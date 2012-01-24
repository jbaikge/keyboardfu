<?php
$config['database.auto_connect'] = false;
$config['secret'] = 'd57c6fc8086676a5ca088744888964b592adc50b881b085d7a187aa9c31f9027';
$config['title'] = 'KeyboardFu';
$config['report.frequency'] = 100;
$config['mode.production'] = strpos(__FILE__, '/home/jbaikge') === 0;

require(dirname(__FILE__) . '/lib/framework/load.php');

Meta::addStylesheet('/css/960_12_col.css');
Meta::addStylesheet('/css/base.css');

if ($_ENV['config']['mode.production']) {
	Meta::addJavascript('/js/analytics.js');
}
