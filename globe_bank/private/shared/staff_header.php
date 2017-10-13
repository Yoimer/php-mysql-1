<?php
	if (!isset($page_title)) {
		$page_title = 'Staff Area';
	}
?>

<!doctype html>

<html lang="en">
  <head>
    <title>GBI - <?php echo $page_title; ?></title>
    <meta charset="utf-8">
	<!-- <link rel="stylesheet" media="all" href="../stylesheets/staff.css" /> -->
	<link rel="stylesheet" media="all"  <a href="<?php echo url_for('/stylesheets/staff.css'); ?>" />
  </head>

  <body>
	<header>
		<h1>GBI Staff Area</h1>
	</header>
	
	<navigation>
		<ul>
			<!-- <li><a href="index.php">Menu</a></li> -->
			<!-- <li><a href="<?php //echo '../index.php'; ?>">Menu</a></li> -->
			<!--  <li><a href="<?php //echo WWW_ROOT . '/staff/index.php'; ?>">Menu</a></li> -->
			<li><a href="<?php echo url_for('/staff/index.php'); ?>">Menu</a></li>
		</ul>
	</navigation>