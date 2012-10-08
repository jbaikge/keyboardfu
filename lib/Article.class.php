<?php
/**
 * @author Jake Tews <jake@keyboardfu.com>
 * @date Tue Dec 13 19:00:35 2011 -0500
 */
class Article extends FObject {
	public function __construct($dir) {
		$this->dir = $dir;
		if (!file_exists($this->getFilename())) {
			throw new ArticleDoesNotExistException($dir);
		} else {
			require($this->getFilename());
			$this->autoData($data);
		}
	}
	public function getFilename() {
		return $this->dir . '/data.php';
	}
	public static function getFromURL($url) {
		return new Article(basename($url));
	}
	public static function getModel() {
		return new FModelManager(
			FField::make('author'),
			FField::make('abstract'),
			FField::make('dir'),
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
		$filename = sprintf("%s/%02d.html.php", $this->dir, $num);
		if ($num != 1 && !file_exists($filename)) {
			return $this->getPage();
		}
		return $filename;
	}
	public function getStylesheets() {
		return is_array($this->stylesheets) ? $this->stylesheets : array();
	}
}

class ArticleDoesNotExistException extends Exception {}
