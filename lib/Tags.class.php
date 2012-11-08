<?php
/*!
 * Tag manager - simlar functionality to the Archive class, but with a
 * concentration on tags
 * 
 * @author Jake Tews <jake@keyboardfu.com>
 * @date Sun Jul 29 12:03:03 EDT 2012
 */
class Tags extends Map implements IteratorAggregate {
	public function getAll() {
		$heap = new TagHeap;
		foreach (self::$tagMap as $tag => $pages) {
			$heap->insert($tag);
		}
		return $heap;
	}
	public static function &getInstance () {
		static $instance;
		if ($instance == null) {
			$instnace = new self;
		}
		return $instnace;
	}
	public function getIterator() {
		return new UniqueTagFilter($this->getAll());
	}
}

/*!
 * Maintains a heap of tags and keeps them in alphabetical order
 * 
 * @author Jake Tews <jake@keyboardfu.com>
 * @date Sun Jul 29 12:15:18 EDT 2012
 */
class TagHeap extends SplHeap {
	/*!
	 * strcmp() is magical.
	 */
	public function compare($a, $b) {
		return strcmp($b, $a);
	}
}

/*!
 * Filters unique values within iteratables
 * 
 * @author Jake Tews <jake@keyboardfu.com>
 * @date Sun Jul 29 12:35:28 EDT 2012
 */
class UniqueTagFilter extends FilterIterator {
	private $last;
	/*!
	 * Only reset $last if the current item doesn't match
	 */
	public function accept() {
		$current = $this->current();
		return $this->last != $current && $this->last = $current;
	}
}
