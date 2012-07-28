<?php
require('webroot.conf.php');

$article_list = '';
foreach (Archive::getInstance()->getLastN(5) as $article) {
	$article_list .= $article->title;
}
$content = FTemplate::fetch('templates/index.html.php');
FTemplate::render();
