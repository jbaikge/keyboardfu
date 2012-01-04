<?php
class ArticleMap {
	private static $map;
	private static $mapFile = '/article_map.json';

	public static function addArticle(Article $article) {
		self::loadMap();
		self::$map[$article->uuid] = $article->path;
		self::saveMap();
	}
	public static function getArticle($key) {
		self::loadMap();
		if (array_key_exists($key, self::$map)) {
			return new Article($key);
		} else if ($uuid = array_search($key, self::$map)) {
			return new Article($uuid);
		} else {
			return false;
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
