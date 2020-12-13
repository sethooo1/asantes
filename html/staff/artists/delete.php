<?php

require_once('../../../private/initialize.php');

require_login();

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/artists/index.php'));
}
$id = $_GET['id'];
$artist = Artist::find_by_id($id);
if($artist == false) {
  redirect_to(url_for('/staff/artists/index.php'));
}

if(is_post_request()) {

  // Delete artist
  $result = $artist->delete();
  $session->message('The artist was deleted successfully.');
  redirect_to(url_for('/staff/artists/index.php'));

} else {
  // Display form
}

?>

<?php $page_title = 'Delete artist'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/artists/index.php'); ?>">&laquo; Back to List</a>

  <div class="artist delete">
    <h1>Delete artist</h1>
    <p>Are you sure you want to delete this artist?</p>
    <p class="item"><?php echo h($artist->full_name()); ?></p>

    <form action="<?php echo url_for('/staff/artists/delete.php?id=' . h(u($id))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete artist" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
