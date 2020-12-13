<?php

require_once('../../../private/initialize.php');

require_login();

$id = $_GET['id'];

$photo = "";
$max_file_size = 1048576; //exprssed in bytes =10MB
if(is_post_request()) {
  // Create record using post parameters
  $photo = new Photograph();
  $photo->caption = $_POST['caption'];
  $photo->art_id = $_POST['art_id'];
  $photo->attach_file($_FILES['file_upload']);
  if($photo->save()) {
    // Success
    $session->message('The photo of the art was successfully uploaded.');
    redirect_to(url_for('/staff/arts/show.php?id=' . $id));
  } else {
    // show errors
    $message = join("<br/>", $photo->errors);
  }
}

?>

<?php $page_title = 'Upload Art pic'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/arts/index.php'); ?>">&laquo; Back to List</a>

  <div class="art new">
    <h1>Upload art Pic</h1>

    <?php echo display_errors($photo->errors); ?>

    <form action="<?php echo url_for('/staff/arts/photo_upload.php'); ?>" enctype="multipart/form-data" method="post">
      <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />
      <input type="text" name="art_id" value="<?php echo $id; ?>" />
      <p><input type="file" name="file_upload" value=""></p>
      <p>Caption: <input type="text" name="caption" value=""/></p>
      <div id="operations">
        <input type="submit" name="submit" value="Upload" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
