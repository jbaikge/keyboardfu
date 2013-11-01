<?php
require('webroot.conf.php');

$communities = array(
	'dmv-resistance' => array(
		'title'   => "DMV Resistance",
		'faction' => "Resistance",
		'link'    => "https://plus.google.com/communities/103349576921336760265",
		'lat'     => 38000000,
		'lon'     => -77000000,
		'mods'    => array("Dazo", "MavicSteelwind", "Fermi", "Thrush", "jbaikge"),
	),
	'hr-resistance' => array(
		'title'   => "Hampton Roads Resistance",
		'faction' => "Resistance",
		'link'    => "https://plus.google.com/communities/107799543110624446726",
		'lat'     => 36942758,
		'lon'     => -75475044,
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
