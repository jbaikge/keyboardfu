<?php
/**
 * @author Jake Tews <jake@keyboardfu.com>
 * @date Fri Jan 13 18:36:46 EST 2012
 */
class Archive {
	private $map;
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
	public function getDaily($year, $month, $day) {
		$lower = strtotime($year . '-' . $month . '-' . $day);
		$upper = strtotime('+23 hour +59 minute', $lower);
		return $this->makeArticles($this->filterDateRange($lower, $upper));
	}
	public function getLastN($n) {
		return array_map(function($data) {
			return new Article($data['basename']);
		}, array_slice($this->map, 0, $n));
	}
	public function getLatest() {
		reset($this->map);
		$data = current($this->map);
		return new Article($data['basename']);
	}
	public function getMonthly($year, $month) {
		$lower = strtotime($year . '-' . $month . '-01');
		$upper = strtotime('+1 month -1 day', $lower);
		return $this->makeArticles($this->filterDateRange($lower, $upper));
	}
	public function getYearly($year) {
		$lower = strtotime($year . '-01-01');
		$upper = strtotime('+1 year -1 day', $lower);
		return $this->makeArticles($this->filterDateRange($lower, $upper));
	}
	private function filterDateRange($lower, $upper) {
		return array_filter($this->map, function($v) use($lower, $upper) {
			return $lower <= $v['published'] && $v['published'] <= $upper;
		});
	}
	private function load() {
		$this->loadMap($_ENV['config']['cache.dir'] . '/articles/map.php');
		$this->trimFuture();
	}
	private function loadMap($filename) {
		include($filename);
		$this->map = $map;
	}
	private function makeArticles(array $values) {
		return array_map(function($v) {
				return new Article($v['basename']);
			},
			$values
		);
		return $values;
	}
	private function trimFuture() {
		$now = time();
		$this->map = array_filter($this->map, function($v) use($now) {
			return $v['published'] <= $now;
		});
	}
}
