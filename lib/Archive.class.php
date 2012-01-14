<?php
/**
 * @author Jake Tews <jake@keyboardfu.com>
 * @date Fri Jan 13 18:36:46 EST 2012
 */
class Archive {
	const YEARLY  = 1;
	const MONTHLY = 2;
	const DAILY   = 3;
	private $maps = array();
	public function __construct() {
		$this->load();
	}
	public static function &getInstance() {
		static $instance;
		if ($instance == null) {
			$instance = new self;
		}
		return $instance;
	}
	public function getYearly($year) {
		$values = array_filter($this->maps['date'], function($v) use($year) {
			return date('Y', $v[0]) == $year;
		});
		return $this->makeArticles($values);
	}
	private function load() {
		$dir = $_ENV['config']['cache.dir'] . '/articles/';
		$this->loadDateMap($dir . 'date_map.php');
		#$this->loadTagMap($dir . 'tag_map.php');
	}
	private function loadDateMap($filename) {
		include($filename);
		$this->maps['date'] = array_map(null, array_keys($date_map), array_values($date_map));
	}
	private function loadTagMap($filename) {
		include($filename);
		$this->maps['tag'] = array_map(null, array_keys($tag_map), array_values($tag_map));
	}
	private function makeArticles(array $values) {
		return $values;
	}
}
