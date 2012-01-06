<?php
interface TextileTemplateStorage {
	public function getTextileCompiledFilename($uuid = null);
}

class TextileTemplateStorageDriver extends FObjectDriver implements FObjectUpdateHooks {
	private $compiled = array();
	private $textile;
	private $textileFiles = array();

	public function addTextileFile($filename) {
		if (!file_exists($filename) || !is_file($filename)) {
			throw new InvalidTextileFileException('Invalid Textile file: ' . $filename);
		}
		$page_num = count($this->textileFiles) + 1;
		$compiled = $this->getCompiledFilename($page_num);
		$this->textileFiles[$filename] = $compiled;
		return $compiled;
	}

	public function preUpdate(&$data) {
		$this->textile = new Textile();
		$dir = dirname($this->subject->getTextileCompiledFilename());
		if (!is_dir($dir)) {
			mkdir($dir, 0777, true);
			@chmod($dir, 0777);
		}
	}
	public function doUpdate(&$data) {
		foreach ($this->textileFiles as $file => $save_as) {
			$raw = file_get_contents($file);
			$this->compiled[$save_as] = $this->textile->TextileThis($raw);
		}
	}
	public function postUpdate(&$data) {
		foreach ($this->compiled as $filename => $content) {
			file_put_contents($filename, $content);
		}
	}
	public function failUpdate($exception) {
		// nothing needed
	}

	private function getCompiledFilename($page) {
		return sprintf($this->subject->getTextileCompiledFilename(), $page);
	}
}

class InvalidTextileFileException extends Exception {}
