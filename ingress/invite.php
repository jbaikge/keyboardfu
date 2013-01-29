<?php
define('USE_BOOTSTRAP', true);
require('webroot.conf.php');

require(SITEROOT . '/lib/google/Google_Client.php');
require(SITEROOT . '/lib/google/contrib/Google_Oauth2Service.php');

session_start();

$client = new Google_Client();
$oauth2 = new Google_Oauth2Service($client);

if (isset($_GET['logout'])) {
	unset($_SESSION['token']);
}

if (isset($_GET['code'])) {
	$client->authenticate();
	$_SESSION['token'] = $client->getAccessToken();
	$redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
	header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
	$client->setAccessToken($_SESSION['token']);
}

if ($client->getAccessToken()) {
	$user = $oauth2->userinfo->get();
	mt_srand($user->id);
	$user->code = base_convert(mt_rand(), 10, 36);
	$_SESSION['access_token'] = $client->getAccessToken();
} else {
	$auth_url = $client->createAuthUrl();
}


$community_name = "DMV Resistance";
$faction = "Resistance";
$lat = 38000000;
$lon = -77000000;

$content = FTemplate::fetch('templates/invite.html.php');
FTemplate::render();
