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

$article = Archive::getInstance()->fromURL($path);
if ($article == null) {
	header('HTTP 1.1 404 Not Found');
	echo 'article not found';
	exit;
}

if ($article->pages > 1) {
	// Reset page position if out of range
	if ($page < 1 || $page > $article->pages) {
		$page = 1;
	}
	// Add meta hints for next/previous rels
	if ($page < $article->pages) {
		Meta::setNext('/' . $article->url . '/' . ($page + 1));
	}
	if ($page > 1) {
		Meta::setPrevious('/' . $article->url . (($page - 1 == 1) ? '' : '/' . ($page - 1)));
	}
	// Establish all possible pages
	$paging = array(
		array('&laquo; Prev', $page - 1),
		array('Next &raquo;', $page + 1)
	);
	array_splice($paging, 1, 0, array_map(null, $a = range(1, $article->pages), $a));
	// Generate HTML for links
	$paging_links = array_reduce($paging, function($links, $set) use($page, $article) {
		list($text, $page_num) = $set;
		if ($page_num != $page && $page_num >= 1 && $page_num <= $article->pages) {
			$htmlf = '<li><a href="/%1$s/%2$d">%3$s</a></li>';
		} else {
			$htmlf = '<li><span>%3$s</span></li>';
		}
		$links .= sprintf($htmlf, $article->url, $page_num, $text);
		return $links;
	}, '');
}

// Push in meta information
Meta::setDescription($article->abstract);
Meta::setTitle($article->title);
Meta::addStylesheet('/css/article.css');
array_map(array('Meta', 'addStylesheet'), $article->getStylesheets());

$body = FTemplate::fetch($article->getPage($page));

// Render
$content = FTemplate::fetch('templates/article.html.php');
FTemplate::render();
