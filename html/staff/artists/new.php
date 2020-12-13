<?php

require_once('../../../private/initialize.php');

require_login();

$max_file_size = 1048576; //exprssed in bytes =10MB
if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['artist'];
  $artist = new Artist($args);
  $artist->attach_file($_FILES['file_upload']);
  $result = $artist->save();

  if($result === true) {
    $new_id = $artist->id;
    $session->message('The artist was created successfully.');
    redirect_to(url_for('/staff/artists/show.php?id=' . $new_id));
  } else {
    // show errors
  }

} else {
  // display the form
  $artist = new artist;
}

?>

<?php $page_title = 'Create artist'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/artists/index.php'); ?>">&laquo; Back to List</a>

  <div class="artist new">
    <h1>Create artist</h1>

    <?php echo display_errors($artist->errors); ?>

    <form action="<?php echo url_for('/staff/artists/new.php'); ?>" enctype="multipart/form-data" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Create artist" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
