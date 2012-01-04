<?php
interface JSONStorage {
	public function getJSONFilename($uuid = null);
}

class JSONStorageDriver extends FObjectDriver implements /*FObjectPopulateHooks,*/ FObjectUpdateHooks {
	private $filename;
	private $jsonData;
	/*
	public function prePopulate(&$data) {
		if (!is_array($data)) {
			$data = array();
		}
	}
	public function doPopulate(&$data) {

	}
	*/
	public function preUpdate(&$data) {
		$this->filename = $this->subject->getJSONFilename();
		$this->ensureDir(dirname($this->filename));
	}
	public function doUpdate(&$data) {
		$this->jsonData = json_encode($this->subject->getData());
	}
	public function postUpdate(&$data) {
		file_put_contents($this->filename, $this->jsonData);
		$this->jsonData = null;
	}
	public function failUpdate($exception) {
		$this->jsonData = null;
	}
	private function ensureDir($dir) {
		if (!is_dir($dir)) {
			mkdir($dir);
			@chmod($dir, 0777);
		}
	}
}
