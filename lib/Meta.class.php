<?php
class Meta {
	const POS_TITLE = 1;
	const POS_DESC = 2;
	const POS_NEXT = 3;
	const POS_PREV = 4;
	private static $main = array(
		'<meta charset="UTF-8">'
	);
	private static $javascripts = array();
	private static $stylesheets = array();
	private static $title;

	public static function addJavascript($url) {
		self::$javascripts[$url] = sprintf('<script src="%s"></script>', $url);
	}
	public static function addStylesheet($url) {
		self::$stylesheets[$url] = sprintf('<link rel="stylesheet" type="text/css" href="%s">', $url);
	}
	public static function getAll() {
		if (!isset(self::$main[self::POS_TITLE])) {
			self::setTitle($_ENV['config']['title']);
		}
		ksort(self::$main);
		return array_merge(self::$main, self::$stylesheets, self::$javascripts);
	}
	public static function getJavascripts() {
		return self::$javascripts;
	}
	public static function getStylesheets() {
		return self::$stylesheets;
	}
	public static function getTitle() {
		return self::$title;
	}
	public static function setDescription($description) {
		self::$main[self::POS_DESC] = sprintf(
			'<meta name="description" content="%s">',
			htmlize(strip_tags($description))
		);
	}
	public static function setNext($url) {
		self::$main[self::POS_NEXT] = sprintf('<link rel="next" href="%s">', htmlize($url));
	}
	public static function setPrevious($url) {
		self::$main[self::POS_PREV] = sprintf('<link rel="prev" href="%s">', htmlize($url));
	}
	public static function setTitle($title) {
		self::$title = $title;
		if ($title != $_ENV['config']['title']) {
			$title .= ' - ' . $_ENV['config']['title'];
		}
		self::$main[self::POS_TITLE] = sprintf('<title>%s</title>', htmlize($title));
	}
	public static function toString($prefix = "\t") {
		$string = '';
		foreach (Meta::getAll() as $tag) {
			$string .= sprintf("%s%s\n", $prefix, $tag);
		}
		return $string;
	}
}
