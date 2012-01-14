<?php
require('webroot.conf.php');
$date = filter_input(INPUT_GET, 'date', FILTER_SANITIZE_STRING);

$bits = explode('/', trim($date, '/'));

switch (count($bits)) {
	// Daily archive
	case 3:
		$articles = Archive::getInstance()->getDaily($bits[0], $bits[1], $bits[2]);
		if (empty($articles)) {
			header('Location: ' . WEBROOT . '/' . $bits[0] . '/' . $bits[1]);
			exit;
		}
		break;
	// Monthly archive
	case 2:
		$articles = Archive::getInstance()->getMonthly($bits[0], $bits[1]);
		if (empty($articles)) {
			header('Location: ' . WEBROOT . '/' . $bits[0]);
			exit;
		}
		break;
	// Yearly archive
	case 1:
		$articles = Archive::getInstance()->getYearly($bits[0]);
		if (!empty($articles)) {
			break;
		}
	// No date supplied (direct link to archive.php) or empty yearly archive.
	default:
		header('Location: ' . WEBROOT . '/');
		exit;
}


FTemplate::render();
