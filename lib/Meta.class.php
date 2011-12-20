<?php
class Meta {
	private static $javascripts = array();
	private static $stylesheets = array();
	private static $title = null;

	public static function addJavascript($url) {
		self::$javascripts[$url] = sprintf('<script src="%s"></script>', $url);
	}
	public static function addStylesheet($url) {
		self::$stylesheets[$url] = sprintf('<link rel="stylesheet" type="text/css" href="%s">', $url);
	}
	public static function getAll() {
		return array_merge(self::$stylesheets, self::$javascripts);
	}
	public static function getJavascripts() {
		return self::$javascripts;
	}
	public static function getStylesheets() {
		return self::$stylesheets;
	}
	public static function getTitle() {
		$title = $_ENV['config']['title'];
		if (self::$title) {
			$title = self::$title;
		}
	}
	public static function setTitle($title) {
		self::$title = $title;
	}
	public static function toString($prefix = "\t") {
		$string = '';
		foreach (Meta::getAll() as $tag) {
			$string .= sprintf("%s%s\n", $prefix, $tag);
		}
		return $string;
	}
}
