<?php
require('webroot.conf.php');
Meta::setTitle('Coming Soon');
$content = FTemplate::fetch('templates/coming-soon.html.php');
FTemplate::render();
