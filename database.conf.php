<?php
FDataModel::setModel(array(
	'articles' => array(
		'_prefix' => "article_",
		'_engine' => "InnoDB",
		'id' => FDataModel::intPK(),
		'uuid' => FDataModel::char(36)->unique(),
		'pages' => FDataModel::tinyint()->unsigned()->notNull()->def(1),
		'title' => FDataModel::varchar(255),
		'path' => FDataModel::varchar(128),
		'date' => FDataModel::datetime(),
		'updated' => FDataModel::timestamp()->notNull(),
	),
	'article_tags' => array(
		'_engine' => "InnoDB",
		'article_id' => FDataModel::intFK()
			->foreignKey("articles", "article_id", "CASCADE", "CASCADE")
			->unique('article_tag'),
		'tag_id' => FDataModel::intFK()
			->foreignKey("tags", "tag_id", "CASCADE", "CASCADE")
			->unique('article_tag')
	),
	'tags' => array(
		'_prefix' => "tag_",
		'_engine' => "InnoDB",
		'id' => FDataModel::intPK(),
		'name' => FDataModel::varchar(64),
	),
));
