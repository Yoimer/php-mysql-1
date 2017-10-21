<?php

require_once('../../../private/initialize.php');

//$test = $_GET['test'] ?? '';

$test = isset($_GET['test']) ? $_GET['test'] : 'DEFAULT VALUE';

if ($test == '404') {
	error_404();
}	elseif($test == '500') {
	error_500();
}	else {
	echo 'No error';
}

?>