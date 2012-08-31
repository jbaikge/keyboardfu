<?php
require('webroot.conf.php');

$proficiency_list = array(
	'PHP'             => 5,
	'Go'              => 4,
	'Shell Scripting' => 5,
	'ASP Classic'     => 4,
	'Java'            => 3,
	'HTML4/5'         => 5,
	'JavaScript'      => 5,
	'Data Modeling'   => 5,
	'MySQL SQL'       => 5,
	'MySQL Admin'     => 4,
	'SQLServer SQL'   => 4,
	'SQLServer Admin' => 2,
	'Linux'           => 5,
	'Mac'             => 3,
	'Windows'         => 3,
	'Subversion'      => 5,
	'Git'             => 4,
	'Mercurial (hg)'  => 3,
);

$i = 0;
$m = 1; // multiplier
$profs = array();
$third = ceil(count($proficiency_list) / 3);

foreach ($proficiency_list as $name => $prof) {
	$profs[$i] = array($name, $prof, 5 - $prof);
	$i += 3;
	if (count($profs) == $third * $m) {
		$i = $m;
		$m++;
	}
}
ksort($profs);

FTemplate::render('templates/resume.html.php');
