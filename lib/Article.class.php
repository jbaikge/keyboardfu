<?php
class Article extends FObject {
	public static function getModel() {
		return new FModelManager(array(
			FField::make('modified'),
			FField::make('pages'),
			FField::make('published'),
			FField::make('tags'),
			FField::make('title'),
			FField::make('url'),
		));
	}
}
