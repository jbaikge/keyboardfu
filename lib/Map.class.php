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
	protected static $map;
	public function __construct() {
		$this->load();
	}
	protected function makeArticles(array $values) {
		return array_map(function($v) {
				return new Article($v['basename']);
			},
			$values
		);
		return $values;
	}
	private function load() {
		$this->loadMap($_ENV['config']['cache.dir'] . '/articles/map.php');
		$this->trimFuture();
	}
	private function loadMap($filename) {
		include($filename);
		self::$map = $map;
	}
	private function trimFuture() {
		$now = time();
		$this->map = array_filter($this->map, function($v) use($now) {
			return $v['published'] <= $now;
		});
	}
}
