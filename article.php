<?php
require('webroot.conf.php');

// Figure out what to load
$path = filter_input(INPUT_GET, 'path', FILTER_SANITIZE_STRING);
if ($path == '') {
	header('HTTP 1.1 404 Not Found');
	echo 'no path supplied';
	exit;
}

$article = ArticleMap::getArticle($path);
if ($article == null) {
	header('HTTP 1.1 404 Not Found');
	echo 'article not found';
	exit;
}

// Push in meta information
Meta::setTitle($article->title);
//foreach ($article->getStylesheets() as $stylesheet) {
//	Meta::addStylesheet($stylesheet);
//}
$body = FTemplate::fetch($article->pages[0]);

// Render
$content = FTemplate::fetch('templates/article.html.php');
FTemplate::render();
