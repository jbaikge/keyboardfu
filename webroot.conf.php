<?php
$config['database.auto_connect'] = false;
$config['title'] = 'KeyboardFu';
$config['report.frequency'] = 100;
$config['mode.production'] = strpos(__FILE__, '/home/jbaikge') === 0;

require(dirname(__FILE__) . '/lib/framework/load.php');

if (defined('USE_BOOTSTRAP')) {
	Meta::addStylesheet('/css/bootstrap.min.css');
	Meta::addJavascript('/js/bootstrap.min.js');
} else {
	Meta::addStylesheet('/css/base.css');
	Meta::addStylesheet('//fonts.googleapis.com/css?family=Droid+Sans+Mono|Droid+Serif|Droid+Sans');
}
