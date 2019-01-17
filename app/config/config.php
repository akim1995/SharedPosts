<?php
// DB Params
define('DB_HOST', 'localhost');
define('DB_USER', 'khalitov');
define('DB_PASS', '123');
define('DB_NAME', 'shareposts');
	// App Root
/* define('APPROOT', dirname(dirname(__FILE__))); */
define('APPROOT', $_SERVER['DOCUMENT_ROOT'] . '/app');
	// URL Root
// you can also hardcode url root like http://my-mvc.lan/
define('URLROOT', $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . 
	'://' . $_SERVER['HTTP_HOST']);
	// Site Name
define('SITENAME', 'SharePosts');
define('APPVERSION', '1.0.0');

