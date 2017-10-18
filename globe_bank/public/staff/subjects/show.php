<?php require_once('../../../private/initialize.php'); ?>

<?php

$id = isset($_GET['id']) ? $_GET['id'] : 'DEFAULT VALUE';
echo $id . "<br />";

?>

<a href="show.php?name=<?php echo u('John Doe'); ?>">Link</a><br />
<a href="show.php?company=<?php echo u('Widgets&More'); ?>">Link</a><br />
<a href="show.php?query=<?php echo u('!#*?'); ?>">Link</a><br />