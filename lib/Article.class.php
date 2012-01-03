<?php
class Article extends FObject implements DatabaseTableStorage, TextileTemplateStorage {
	public function getDatabaseTableName() {
		return 'articles';
	}
	public function getDatabaseIDWhere($id) {
		return FDB::sql("article_id = %1\$d OR article_uuid = '%1\$s'", $id);
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
