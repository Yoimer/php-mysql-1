<?php

require_once('../../../private/initialize.php');

$id = $_GET['id'];

if(!isset($_GET['id'])) {
	redirect_to(url_for('/staff/subjects/index.php'));
}

/*$id = $_GET['id'];
$menu_name = '';
$position = '';
$visible = '';*/

if (is_post_request())
{

	// Handle form values sent by new.php

  $subject = [];
  $subject['id'] = $id;
  $subject ['menu_name'] = isset($_POST['menu_name']) ? $_POST['menu_name'] : 'DEFAULT VALUE';
  $subject ['position'] = isset($_POST['position']) ? $_POST['position'] : 'DEFAULT VALUE';
	$subject ['visible'] = isset($_POST['visible']) ? $_POST['visible'] : 'DEFAULT VALUE';
  
  $result = update_subject($subject);
  redirect_to(url_for('/staff/subjects/show.php?id=' . $id));

}else {

  $subject = find_subject_by_id($id);

  $subject_set = find_all_subjects();
  $subject_count = mysqli_num_rows($subject_set);
  mysqli_free_result($subject_set);

}

?>

<?php $page_title = 'Edit Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject edit">
    <h1>Edit Subject</h1>

    <form action="<?php echo url_for('/staff/subjects/edit.php?id=' . h(u($id))); ?>" method="post">
      <dl> <!--data list -->
        <dt>Menu Name</dt> <!-- data term -->
        <dd><input type="text" name="menu_name" value="<?php echo h($subject['menu_name']); ?>" /></dd> <!-- data definition -->
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <!-- <select name="position">
           <option value="1"<?php //if($subject['position'] == "1") { echo " selected";} ?>>1</option>
          </select> -->
          <select name="position">
          <?php
            for($i=1; $i <= $subject_count; $i++) {
              echo "<option value=\"{$i}\"";
              if($subject["position"] == $i) {
                echo " selected";
              }
              echo ">{$i}</option>";
            }
          ?>
          </select>

        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1"<?php if($subject['visible'] == 1) {echo " checked";}?> />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Subject" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
