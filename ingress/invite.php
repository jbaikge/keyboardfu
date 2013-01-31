<?php
require('webroot.conf.php');

$community_name = "DMV Resistance";
$faction = "Resistance";
$lat = 38000000;
$lon = -77000000;

$content = FTemplate::fetch('templates/invite.html.php');
FTemplate::render();
