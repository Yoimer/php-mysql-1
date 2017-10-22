<?php
	ob_start(); // output buffering is turned on
	// Assign file paths to PHP constants
	// __FILE__ returns the current path to this file
	// dirname() returns the path to the parent directory
	define("PRIVATE_PATH", dirname(__FILE__));
	//echo PRIVATE_PATH . "<br />";
	define("PROJECT_PATH", dirname(PRIVATE_PATH));
	//echo PROJECT_PATH . "<br />";
	define("PUBLIC_PATH", PROJECT_PATH . '/public');
	//echo PUBLIC_PATH . "<br />";
	define("SHARED_PATH", PRIVATE_PATH . '/shared');
	//echo SHARED_PATH . "<br />";

	// Assign the root URL to a PHP constant
	// * Do not need to include the domain
	// * Use same document root as webserver
	// * Can set a hardcoded value:
	// define("WWW_ROOT", '/~kevinskoglund/globe_bank/public');
	// define("WWW_ROOT", '');
	// * Can dynamically find everything in URL up to "/public"
	$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
	//echo $_SERVER['SCRIPT_NAME'] . "<br />";
	//echo strpos($_SERVER['SCRIPT_NAME'], '/public')  . "<br />";
	$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
	define("WWW_ROOT", $doc_root); // makes WWW_ROOT an absolute value that we can be used in our web pages
	//echo $doc_root . "<br/>";

	require_once('functions.php');
	/*echo PRIVATE_PATH . "<br />";
	echo PROJECT_PATH . "<br />";
	echo PUBLIC_PATH  . "<br />";
	echo SHARED_PATH  . "<br />";*/
	
	/*
	<?php
	// Values are always string when retrieving from super global variables
	
	$page = $_GET['page'];
	echo gettype($page);
	// 'string'

	$page_as_int = (int) $_GET['page']; // doing casting to convert string into int
	echo gettype($page_as_int);
	// integer
	?>
	*/
?>
