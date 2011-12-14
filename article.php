<?php
require('webroot.conf.php');

// Figure out what to load
$url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_STRING);
if ($url == '') {
	header('HTTP 1.1 404 Not Found');
	exit;
}

$article = Article::getFromURL($url);
if ($article == null) {
	header('HTTP 1.1 404 Not Found');
	exit;
}

// Push in meta information
Meta::setTitle($article->title);
foreach ($article->getStylesheets() as $stylesheet) {
	Meta::addStylesheet($stylesheet);
}

// Render
$content = FTemplate::fetch('templates/article.html.php');
FTemplate::render();
