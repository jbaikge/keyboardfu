<?php
class ArticleMap {
	private static $map;
	private static $mapFile = '/article_map.json';

	public static function addArticle(Article $article) {
		self::loadMap();
		$tuple = array($article->uuid, $article->path);
		self::$map[$article->uuid] = $tuple;
		self::$map[$article->path] = $tuple;
		self::saveMap();
	}
	public static function getArticle($key) {
		self::loadMap();
		if (array_key_exists($key, self::$map)) {
			return new Article(self::$map[$key][0]);
		}
	}

	private static function getFilename() {
		return $_ENV['config']['cache.dir'] . self::$mapFile;
	}
	private static function loadMap() {
		if (isset(self::$map)) {
			return;
		}
		if (file_exists(self::getFilename())) {
			self::$map = json_decode(file_get_contents(self::getFilename()), true);
		} else {
			self::$map = array();
		}
	}
	private static function saveMap() {
		file_put_contents(self::getFilename(), json_encode(self::$map));
	}
}
