<?php
class Article extends FObject implements JSONStorage, TextileTemplateStorage {
	private static $dataDir;

	public function getJSONFilename($uuid) {
		if ($this->dataDir == null) {
			$this->setDataDir();
		}
		return $this->dataDir . $uuid . '.json';
	}
	public static function getModel() {
		return new FModelManager(array(
			FField::make('uuid'),
			FField::make('pages'),
			FField::make('title'),
			FField::make('path'),
			FField::make('pubDate'),
			FField::make('updated')
		));
	}
	private function setDataDir() {
		$this->dataDir = $_ENV['config']['cache.dir'] . '/articles/';
		if (!is_dir($this->dataDir)) {
			mkdir($this->dataDir);
			@chmod($this->dataDir, 0777);
		}
	}
}
