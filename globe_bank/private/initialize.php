<?php

	// Assign file paths to PHP constants
	// __FILE__ returns the current path to this file
	// dirname() returns the path to the parent directory
	define("PRIVATE_PATH", dirname(__FILE__));
	define("PROJECT_PATH", dirname(PRIVATE_PATH));
	define("PUBLIC_PATH", PROJECT_PATH . '/public');
	define("SHARED_PATH", PRIVATE_PATH . '/shared');

	// Assign the root URL to a PHP constant
	// * Do not need to include the domain
	// * Use same document root as webserver
	// * Can set a hardcoded value:
	// define("WWW_ROOT", '/~kevinskoglund/globe_bank/public');
	// define("WWW_ROOT", '');
	// * Can dynamically find everything in URL up to "/public"
	$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
	$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
	define("WWW_ROOT", $doc_root); // makes WWW_ROOT an absolute value that we can be used in our web pages

	require_once('functions.php');
	/*echo PRIVATE_PATH . "<br />";
	echo PROJECT_PATH . "<br />";
	echo PUBLIC_PATH  . "<br />";
	echo SHARED_PATH  . "<br />";*/
?>
