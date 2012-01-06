<?php
interface JSONStorage {
	public function getJSONFilename();
}

class JSONStorageDriver extends FObjectDriver implements FObjectPopulateHooks, FObjectUpdateHooks {
	private $filename;
	private $jsonData;
	public function prePopulate(&$data) {
		if (!is_array($data)) {
			$data = array();
		}
		$this->filename = $this->getFilename();
	}
	public function doPopulate(&$data) {
		$encoded = file_get_contents($this->filename);
		$decoded = json_decode($encoded, true);
		if (json_last_error() == JSON_ERROR_NONE) {
			$data = array_merge($data, $decoded);
		} else {
			throw new JSONStorageDecodeException(json_last_error());
		}
	}
	public function postPopulate(&$data) {
	}
	public function failPopulate($exception) {
	}
	public function preUpdate(&$data) {
		$this->filename = $this->getFilename();
		$this->ensureDir(dirname($this->filename));
	}
	public function doUpdate(&$data) {
		$data = $this->subject->getModel()->storage_json();
		foreach ($data as $key => &$value) {
			if (isset($value['callback'])) {
				$callback = $value['callback'];
				$value = $callback($this->subject->$key);
			} else {
				$value = $this->subject->$key;
			}
		}
		$this->jsonData = json_encode($data);
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
	private function getFilename() {
		$filename = $this->subject->getJSONFilename();
		if ($filename == false) {
			throw new JSONStorageNoFileException('Could not determine filename');
		}
		return $filename;
	}
}

class JSONStorageNoFileException extends Exception {}

class JSONStorageDecodeException extends Exception {}
