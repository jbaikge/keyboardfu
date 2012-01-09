<?php
class Article extends FObject {
	public function __construct($name) {
		if (!file_exists($this->getFilename($name))) {
			throw new ArticleDoesNotExistException($name);
		} else {
			require($this->getFilename($name));
		}
	}
	public function getFilename($name) {
		return $_ENV['config']['cache.dir'] . '/articles/' . $name . '/data.php';
	}
	public static function getFromURL($url) {
		return new Article(basename($url));
	}
	public static function getModel() {
		return new FModelManager(array(
			FField::make('modified'),
			FField::make('pages'),
			FField::make('published'),
			FField::make('tags'),
			FField::make('title'),
			FField::make('url'),
		));
	}
}

class ArticleDoesNotExistException extends Exception {}
