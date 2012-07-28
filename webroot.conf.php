<?php
$config['database.auto_connect'] = false;
$config['title'] = 'KeyboardFu';
$config['report.frequency'] = 100;
$config['mode.production'] = strpos(__FILE__, '/home/jbaikge') === 0;

require(dirname(__FILE__) . '/lib/framework/load.php');

Meta::addStylesheet('/css/base.less');
Meta::addStylesheet('//fonts.googleapis.com/css?family=Droid+Sans+Mono|Droid+Serif|Droid+Sans');
Meta::addStylesheet('//fonts.googleapis.com/css?family=Julee&text=FU');
Meta::addStylesheet('//fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC&text=Keyboard');
