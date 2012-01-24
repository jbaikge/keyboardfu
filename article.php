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

// Reset page position if out of range
if ($page < 1 || $page > $article->pages) {
	$page = 1;
}

// Determine paging links in the format text => url
$paging = array();
$urlf = '/' . $article->url . '/%d';
$paging['&laquo; Prev'] = ($page == 1) ? null : sprintf($urlf, $page - 1);
foreach (range(1, $article->pages) as $num) {
	$paging[$num] = ($num == $page) ? null : sprintf($urlf, $num);
}
$paging['Next &raquo;'] = ($page == $article->pages) ? null : sprintf($urlf, $page + 1);

// Push in meta information
Meta::setTitle($article->title);
array_map(array('Meta', 'addStylesheet'), $article->getStylesheets());

$body = FTemplate::fetch($article->getPage($page));

// Render
$content = FTemplate::fetch('templates/article.html.php');
FTemplate::render();
