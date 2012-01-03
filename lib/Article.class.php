<?php
class Article extends FObject implements DatabaseTableStorage, TextileTemplateStorage {
	public function getByUUID($uuid) {
		$result = FDB::query("SELECT article_id FROM articles WHERE article_uuid = '%s' LIMIT 1", $uuid);
		if (count($result)) {
			return new Article($result->fetch()->article_id);
		} else {
			return null;
		}
	}
	public function getDatabaseTableName() {
		return 'articles';
	}
	public function getDatabaseIDWhere($id) {
		return FDB::sql("article_id = %d", $id);
	}
	public static function getModel() {
		return new FModelManager(array(
			FField::make('id')
				->database_options()->fieldName('article_id'),
			FField::make('uuid')
				->database_options()->fieldName('article_uuid'),
			FField::make('pages')
				->database_options()->fieldName('article_pages'),
			FField::make('title')
				->database_options()->fieldName('article_title'),
			FField::make('path')
				->database_options()->fieldName('article_path'),
			FField::make('date')
				->database_options()->fieldName('article_date'),
			FField::make('updated')
				->database_options()->fieldName('article_updated')
		));
	}
}
