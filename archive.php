<?php
require('webroot.conf.php');
$date = filter_input(INPUT_GET, 'date', FILTER_SANITIZE_STRING);

$date_bits = explode('/', trim($date, '/'));

switch (count($date_bits)) {
	// Daily archive
	case 3:
	break;
	// Monthly archive
	case 2:
	break;
	// Yearly archive
	case 1:
	break;
}

FTemplate::render();