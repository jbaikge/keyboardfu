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

	public static function getTitle() {
		$title = $_ENV['config']['title'];
		if (self::$title) {
			$title = self::$title;
		}
	}
}
