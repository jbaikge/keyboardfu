<?php
/**
 * @author Jake Tews <jake@keyboardfu.com>
 * @date Tue Dec 13 19:00:35 2011 -0500
 */
class Article extends FObject {
	public function __construct($name) {
		if (!file_exists($this->getFilename($name))) {
			throw new ArticleDoesNotExistException($name);
		} else {
			require($this->getFilename($name));
		}
	}
	public function getFilename($name) {
		return $this->getStorageDir($name) . '/data.php';
	}
	public static function getFromURL($url) {
		return new Article(basename($url));
	}
	public static function getModel() {
		return new FModelManager(
			FField::make('modified'),
			FField::make('name'),
			FField::make('pages'),
			FField::make('published'),
			FField::make('stylesheets'),
			FField::make('tags'),
			FField::make('title'),
			FField::make('url')
		);
	}
	/*!
	 * Fetches the appropriate template for the specified page within an
	 * Article. If a suitable page is not found, the first page is returned.
	 * 
	 * @param $num Page number
	 * @return Filepath to the HTML template.
	 */
	public function getPage($num = 1) {
		$dir = $this->getStorageDir();
		$filename = sprintf("%s/%02d.html.php", $dir, $num);
		if ($num != 1 && !file_exists($filename)) {
			return $this->getPage();
		}
		return $filename;
	}
	public function getStorageDir($name = null) {
		if ($name === null) {
			$name = $this->name;
		}
		return $_ENV['config']['cache.dir'] . '/articles/' . $name;
	}
	public function getStylesheets() {
		return is_array($this->stylesheets) ? $this->stylesheets : array();
	}
}

class ArticleDoesNotExistException extends Exception {}
