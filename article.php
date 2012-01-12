<?php
require('webroot.conf.php');

// Figure out what to load
list($path, $page) = array_values(filter_input_array(INPUT_GET, array(
	'path' => FILTER_SANITIZE_STRING,
	'page' => FILTER_VALIDATE_INT
)));
if ($path == '') {
	header('HTTP 1.1 404 Not Found');
	echo 'no path supplied';
	exit;
}

$article = Article::getFromURL($path);
if ($article == null) {
	header('HTTP 1.1 404 Not Found');
	echo 'article not found';
	exit;
}

// Push in meta information
Meta::setTitle($article->title);
array_map(array('Meta', 'addStylesheet'), $article->getStylesheets());

$body = FTemplate::fetch($article->getPage($page));

// Render
$content = FTemplate::fetch('templates/article.html.php');
FTemplate::render();
