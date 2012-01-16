<?php
require('webroot.conf.php');
$date = filter_input(INPUT_GET, 'date', FILTER_SANITIZE_STRING);

$bits = explode('/', trim($date, '/'));

switch (count($bits)) {
	// Daily archive. If none exist, redirect to the monthly archive page.
	case 3:
		$articles = Archive::getInstance()->getDaily($bits[0], $bits[1], $bits[2]);
		if (empty($articles)) {
			header('Location: ' . WEBROOT . '/' . $bits[0] . '/' . $bits[1]);
			exit;
		}
		$timestamp = strtotime(implode('-', $bits));
		Meta::setTitle('Archive for ' . FString::date($timestamp));
		break;
	// Monthly archive. If none exist, redirect to the yearly archive page.
	case 2:
		$articles = Archive::getInstance()->getMonthly($bits[0], $bits[1]);
		if (empty($articles)) {
			header('Location: ' . WEBROOT . '/' . $bits[0]);
			exit;
		}
		$timestamp = strtotime(implode('-', $bits) . '-01');
		Meta::setTitle('Archive for ' . FString::date($timestamp, 'M, Y'));
		break;
	// Yearly archive. If none exist, fall through to the default action.
	case 1:
		$articles = Archive::getInstance()->getYearly($bits[0]);
		Meta::setTitle('Archive for ' . $bits[0]);
		if (!empty($articles)) {
			break;
		}
	// No date supplied (direct link to archive.php) or empty yearly archive.
	default:
		header('Location: ' . WEBROOT . '/');
		exit;
}

$list = array_reduce($articles, function($html, $article) {
	return $html . FTemplate::fetchCached('templates/archive-item.html.php', array('article' => &$article));
}, '');

$content = FTemplate::fetch('templates/archive.html.php');

FTemplate::render();
