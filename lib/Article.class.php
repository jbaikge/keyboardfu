<?php
class Article extends FObject implements JSONStorage, TextileTemplateStorage {
	public function addPage($filename) {
		$pages = $this->pages;
		$pages[] = $this->addTextileFile($filename);
		$this->pages = $pages;
	}
	/**
	 * Required for JSONStorage
	 */
	public function getJSONFilename($uuid = null) {
		if ($uuid == null) {
			$uuid = $this->uuid;
		}
		$filename = sprintf("%s/articles/%s.json", $_ENV['config']['cache.dir'], $uuid);
		return $filename;
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
