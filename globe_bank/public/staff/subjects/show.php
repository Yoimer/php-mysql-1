<?php
	/*$id = $_GET['id'];
	echo $id;*/

//Default values

/*$page = $_GET['page'];

if (isset($_GET['page]))
{
	$page = $_GET['page'];
}
else
{
	$page = '1';
}*/

//$page = $_GET['page'] ?? '1'; // PHP > 7.0

//$id = isset($_GET['id']) ? $_GET['id'] : 'DEFAULT VALUE';
//echo $id . "<br />";
//echo $id;

//$page = isset($_GET['page']) ? $_GET['page'] : 'DEFAULT VALUE';
//echo $page . "<br />";
//echo $page;

$page2 = isset($_GET['page2']) ? $_GET['page2'] : 'DEFAULT VALUE';
//echo $page2 . "<br />";
echo $page2;

$comp = (int)$page2;

if ($comp == 32)
{
	echo "value of. " . $page2;
}

?>