<?php
class Meta {
	private static $stylesheets = array();
	private static $title = null;

	public static function addStylesheet($path) {
		self::$stylesheets[] = $path;
	}

	public static function getStylesheets() {
		return self::$stylesheets;
	}

	public static function getPageTitle() {
		$title = $_ENV['config']['title'];
		if (self::$title) {
			$title = htmlize(self::$title) . ' &raquo; ' . $title;
		}
		return $title;
	}

	public static function getTitle() {
		return htmlize(self::$title);
	}

	public static function setTitle($title) {
		self::$title = $title;
	}
}
