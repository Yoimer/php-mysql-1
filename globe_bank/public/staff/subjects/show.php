<?php require_once('../../../private/initialize.php'); ?>

<?php

$id = isset($_GET['id']) ? $_GET['id'] : 'DEFAULT VALUE';
//echo htmlspecialchars($id) . "<br />"; It does this below, using h () function

$subject = find_subject_by_id($id);

?>

<?php $page_title = 'Show Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
	<a class="back-link" href="<?php echo url_for('/staff/subjects/index.php') ?>">&laquo; Back to List</a>
	<div class="subject show">
		<h1>Subject: <?php echo h($subject['menu_name']); ?></h1>
        <div class="attributes">
            <dl>
                <dt>Menu Name</dt>
                <dd><?php echo h($subject['menu_name']); ?></dd>
            </dl>
            <dl>
                <dt>Position</dt>
                <dd><?php echo h($subject['position']); ?></dd>
            </dl>
            <dl>
                <dt>Visible</dt>
                <dd><?php echo $subject['visible'] == '1' ? 'true' : 'false'; ?></dd>
                </dl>
        </div>
	</div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>



<!-- <a href="show.php?name=<?php //echo u('John Doe'); ?>">Link</a><br />
<a href="show.php?company=<?php //echo u('Widgets&More'); ?>">Link</a><br />
<a href="show.php?query=<?php //echo u('!#*?'); ?>">Link</a><br /> -->