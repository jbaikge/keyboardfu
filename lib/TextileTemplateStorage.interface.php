<?php
interface TextileTemplateStorage {
	public function getTextileFiles();
	public function getTextileTemplateDir();
}

class TextileTemplateStorageDriver extends FObjectDriver implements FObjectUpdateHooks {
	private $compiled = array();
	private $textile;

	public function preUpdate(&$data) {
		$this->textile = new Textile();
		if (!is_dir($this->getTextileTemplateDir())) {
			mkdir($this->getTextileTemplateDir());
		}
	}
	public function doUpdate(&$data) {
		foreach ($this->subject->getTextileFiles() as $i => $file) {
			$raw = file_get_contents($file);
			$this->compiled[] = $textile->TextileThis($raw);
		}
	}
	public function postUpdate(&$data) {
		foreach ($this->compiled as $i => $content) {
			$filename = sprintf('%s/%s-%02d.html.php',
				$this->getTextileTemplateDir(),
				$this->subject->uuid,
				$i + 1
			);
			file_put_contents($filename, $content);
		}
	}
	public function failUpdate(&$data) {
		// nothing needed
	}
}
