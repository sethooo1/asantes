<?php

require_once('../../../private/initialize.php');

require_login();

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/arts/index.php'));
}
$id = $_GET['id'];
$art = Art::find_by_id($id);
if($art == false) {
  redirect_to(url_for('/staff/arts/index.php'));
}

if(is_post_request()) {

  // Save record using post parameters
  $args = $_POST['art'];
  $art->merge_attributes($args);
  $result = $art->save();

  if($result === true) {
    $session->message('The art was updated successfully.');
    redirect_to(url_for('/staff/arts/show.php?id=' . $id));
  } else {
    // show errors
  }

} else {

  // display the form

}

?>

<?php $page_title = 'Edit art'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/arts/index.php'); ?>">&laquo; Back to List</a>

  <div class="art edit">
    <h1>Edit art</h1>

    <?php echo display_errors($art->errors); ?>

    <form action="<?php echo url_for('/staff/arts/edit.php?id=' . h(u($id))); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Edit art" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
