<?php
require('webroot.conf.php');

$communities = array(
	'dmv-resistance' => array(
		'title'   => "DMV Resistance",
		'faction' => "Resistance",
		'link'    => "https://plus.google.com/communities/103349576921336760265",
		'lat'     => 38000000,
		'lon'     => -77000000,
	),
);

$key = trim($_SERVER['PATH_INFO'], '/');
if (!array_key_exists($key, $communities)) {
	header('Location: http://www.google.com');
	exit;
}

extract($communities[$key]);

$content = FTemplate::fetch('templates/invite.html.php');
FTemplate::render();
