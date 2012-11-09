<?php
require('webroot.conf.php');

// Strip file extension to determine filename for other components
$base = basename(__FILE__, '.php');

// Fetch Article object
require(__DIR__ . '/' . $base . '.object');

// Push in meta information
Meta::setDescription($article->abstract);
Meta::setTitle($article->title);
Meta::addStylesheet('/css/article.css');
array_map(array('Meta', 'addStylesheet'), $article->stylesheets);

$body = FTemplate::fetch($base . '.body');

// Render
$content = FTemplate::fetch('templates/article.html.php');
$content .= FTemplate::fetch('templates/article-aside.html.php');
FTemplate::render();
