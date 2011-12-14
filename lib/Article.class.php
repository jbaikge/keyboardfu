<?php
class Article extends FObject implements FObjectDatabaseStorage {
	public static function getFromHash($hash) {
		$result = FObjectQuery::select(__CLASS__)->hash($hash);
		if (count($result)) {
			return $result->fetch();
		} else {
			$object = new __CLASS__;
			$object->hash = $hash;
			return $object;
		}
	}
	public static function getModel() {
		return new FModelManager(array(
			FField::make('title'),
			FField::make('hash'),
			FField::make('tags'),
			FField::make('pubDate'),
			FField::make('content'),
			FField::make('url')
		));
	}
}
