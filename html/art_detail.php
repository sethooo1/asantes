<?php require_once("../private/initialize.php"); ?>

<?php
$id = $_GET['id'];

if (!$id) {
  // If id is not Found
  redirect_to('art.php');
}

$art = Art::find_by_id($id);
$artist = Artist::find_by_id($art->artist_id);

?>
<?php $page_title = 'Detail: ' . $art->name(); ?>
<?php include(SHARED_PATH . '/header.php'); ?>


  <!-- Beginning : List of Art Items-->
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="display-4"><?php echo h($art->name);?> </h1>
      </div>
    </div>
    <div class="row alert alert-secondary" role="alert">
      <div class="col-8">
        <?php $photos = Photograph::find_photo_on($art->id); ?>
        <img src="images/arts/<?php echo $photos->filename; ?>" alt="..." class="rounded-lg mt-2 mb-2" style=" width:650px; height:750px;">
      </div>
      <div class="col-4 alert alert-dark" role="alert">
        <p class="lead"><?php echo h($art->name);?></p>
        <p class="lead"><em><a href="artist.php"><?php echo h($artist->full_name());?></p></a></em>
        <p class="lead">Size:<?php echo h($art->width);?></p>
        <p class="lead"><mark>$<?php echo h($art->price);?> USD</mark></p>
        <p class="lead"><?php echo h($art->description);?></p>
        <a href="checkout.php" class="btn btn-outline-success">Add to Cart</a>

      </div>

    </div>

  </div>
  <!-- Beginning : List of Art Items-->
<?php include(SHARED_PATH . '/footer.php'); ?>
