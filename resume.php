<?php
require('webroot.conf.php');

function stars($n) {
	echo trim(str_repeat('&#x2605', $n) . str_repeat('&#x2606', 5 - $n));
}

FTemplate::render('templates/resume.html.php');
