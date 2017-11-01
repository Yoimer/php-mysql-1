<?php

require_once('../../../private/initialize.php');

/*if(!isset($_GET['id'])) {
	redirect_to(url_for('/staff/pages/index.php'));
}

$id = $_GET['id'];*/
$menu_name = '';
$position = '';
$visible = '';

if (is_post_request())
{

	$menu_name = isset($_POST['menu_name']) ? $_POST['menu_name'] : 'DEFAULT VALUE';

	$position = isset($_POST['position']) ? $_POST['position'] : 'DEFAULT VALUE';

	$visible = isset($_POST['visible']) ? $_POST['visible'] : 'DEFAULT VALUE';

	echo "Form parameters<br />";
	echo "Menu name: " . $menu_name . "<br />";
	echo "Position: " . $position . "<br />";
	echo "Visible: " . $visible . "<br />";
}

?>

<?php $page_title = 'Edit Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject edit">
    <h1>Edit Page</h1>

    <form action="<?php echo url_for('/staff/pages/new.php'); ?>" method="post">
      <dl> <!--data list -->
        <dt>Menu Name</dt> <!-- data term -->
        <dd><input type="text" name="menu_name" value="<?php echo $menu_name; ?>" /></dd> <!-- data definition -->
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1">1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Page" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
