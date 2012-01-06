<?php
class Article extends FObject implements JSONStorage, TextileTemplateStorage {
	public function addPage($filename) {
		$pages = $this->pages;
		$pages[] = $this->addTextileFile($filename);
		$this->pages = $pages;
	}
	public function generatePath($directory) {
		$title = basename($directory);
		$date = date('/Y/m/d/', strtotime($this->pubDate));
		return $this->path = $date . $title;
	}
	/**
	 * Required for JSONStorage
	 */
	public function getJSONFilename() {
		if (isset($this->uuid)) {
			$uuid = $this->uuid;
		} else if (isset($this->initialized_id)) {
			$uuid = $this->initialized_id;
		}
		if (!isset($uuid)) {
			return false;
		}
		return sprintf("%s/articles/%s.json", $_ENV['config']['cache.dir'], $uuid);
	}
	public static function getModel() {
		return new FModelManager(array(
			FField::make('uuid'),
			FField::make('pages'),
			FField::make('title'),
			FField::make('path'),
			FField::make('pubDate')
				->storage_json_options()
					->callback(function($v) { return date('c', strtotime($v)); }),
			FField::make('updated')
				->storage_json_options()
					->callback(function($v) { return date('c'); })
		));
	}
	/**
	 * Required for TextileTemplateStorage
	 */
	public function getTextileCompiledFilename($uuid = null) {
		if ($uuid == null) {
			$uuid = $this->uuid;
		}
		$filename = sprintf("%s/article_templates/%s-%%02d.html.php", $_ENV['config']['cache.dir'], $uuid);
		return $filename;
	}
	public function populate() {
		var_dump("NOOP");
	}
}
