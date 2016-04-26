<?php
require_once 'inc/db.php';
require_once 'inc/func.php';

session_name('shop_session');
session_start();

$current_page = basename($_SERVER['PHP_SELF']);

$pages = array(
	'About' => 'about.php',
	'Services' => 'services.php',
	'Contact' => 'contact.php',
	'Search' => 'search.php',
);