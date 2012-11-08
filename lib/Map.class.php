<?php
/*!
 * Article-map handler. Common silliness used to load up the article map.
 * 
 * Must be extended as there's no point in passing it around.
 * 
 * @author Jake Tews <jake@keyboardfu.com>
 * @date Sun Jul 29 12:05:46 EDT 2012
 */
abstract class Map {
	protected static $dateMap;
	protected static $tagMap;
	protected static $urlMap;
	public function __construct() {
		$this->load();
	}
	protected function makeArticles(array $values) {
		return array_map(function($v) {
				return new Article($v['dir']);
			},
			$values
		);
		return $values;
	}
	private function load() {
		$this->loadMap($_ENV['config']['cache.dir'] . '/article_map.php');
		$this->trimFuture();
	}
	private function loadMap($filename) {
		if (self::$dateMap == null) {
			include($filename);
			self::$dateMap = $_date_map;
			self::$tagMap = $_tag_map;
			self::$urlMap = $_url_map;
		}
	}
	private function trimFuture() {
		$now = time();
		$filter = function($v) use($now) {
			return $v['published'] <= $now;
		};
		self::$dateMap = array_filter(self::$dateMap, $filter);
		self::$urlMap = array_filter(self::$urlMap, $filter);
	}
}
