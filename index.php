<?php
require('webroot.conf.php');

$latest = Archive::getInstance()->getLatest();
$content = FTemplate::fetch('templates/index.html.php');
FTemplate::render();
