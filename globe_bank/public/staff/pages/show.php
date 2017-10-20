<?php require_once('../../../private/initialize.php'); ?>

<?php

$id = isset($_GET['id']) ? $_GET['id'] : 'DEFAULT VALUE';
//echo htmlspecialchars($id) . "<br />"; It does this below, using h () function
?>

<?php $page_title = 'Show Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
	<a class="back-link" href="<?php echo url_for('/staff/pages/index.php') ?>">&laquo; Back to List</a>
	<div class="page show">
		Page ID <?php echo h($id); ?>
	</div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>