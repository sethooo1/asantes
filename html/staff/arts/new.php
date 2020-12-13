<?php

require_once('../../../private/initialize.php');

require_login();

if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['art'];
  $art = new Art($args);
  $result = $art->save();

  if($result === true) {
    $new_id = $art->id;
    $session->message('The art was created successfully.');
    redirect_to(url_for('/staff/arts/photo_upload.php?id=' . $new_id));
  } else {
    // show errors
  }

} else {
  // display the form
  $art = new Art;
}

?>

<?php $page_title = 'Create art'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/arts/index.php'); ?>">&laquo; Back to List</a>

  <div class="art new">
    <h1>Create art</h1>

    <?php echo display_errors($art->errors); ?>

    <form action="<?php echo url_for('/staff/arts/new.php'); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Create art" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
