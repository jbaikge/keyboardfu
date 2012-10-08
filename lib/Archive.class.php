<?php
/**
 * @author Jake Tews <jake@keyboardfu.com>
 * @date Fri Jan 13 18:36:46 EST 2012
 */
class Archive extends Map {
	public function fromURL($path) {
		if (isset(self::$urlMap[$path])) {
			return new Article(self::$urlMap[$path]['dir']);
		} else {
			return null;
		}
	}
	public static function &getInstance() {
		static $instance;
		if ($instance == null) {
			$instance = new self;
		}
		return $instance;
	}
	public function getCalendarTree() {
		$tree = array();
		foreach (self::$dateMap as $a) {
			++$tree[date('Y-m-01', $a['published'])];
		}
		return $tree;
	}
	public function getDaily($year, $month, $day) {
		$lower = strtotime($year . '-' . $month . '-' . $day);
		$upper = strtotime('+23 hour +59 minute', $lower);
		return $this->makeArticles($this->filterDateRange($lower, $upper));
	}
	public function getLastN($n) {
		return $this->makeArticles(array_slice(self::$dateMap, 0, $n));
	}
	public function getLatest() {
		reset(self::$dateMap);
		$data = current(self::$dateMap);
		return new Article($data['dir']);
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
		return array_filter(self::$dateMap, function($v) use($lower, $upper) {
			return $lower <= $v['published'] && $v['published'] <= $upper;
		});
	}
}
