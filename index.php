<?php
require('webroot.conf.php');

$article_list = '';
foreach (Archive::getInstance()->getLastN($_ENV['config']['latest']) as $article) {
	$article_list .= FTemplate::fetch('templates/article.html.php');
}
$content = FTemplate::fetch('templates/index.html.php');
FTemplate::render();
