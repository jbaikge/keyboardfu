<?php
require('webroot.conf.php');
Meta::setTitle('About');
$content = FTemplate::fetch('cache/static/about.html.php');
FTemplate::render();
