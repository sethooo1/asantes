<?php require_once("../private/initialize.php"); ?>
<?php $artists = Artist::find_all(); ?>
<?php include(SHARED_PATH . '/header.php'); ?>

  <!-- Beginning : List of Art Items-->
  <?php foreach ($artists as $artist) {?>
  <div class="container">
    <a href="artist_detail.php?id=<?php echo $artist->id; ?>">
    <div class="row mt- md-">
      <div class="col-4">
        <img src="<?php echo h($artist->image_path()) ?>" alt="..." class="rounded-lg mt-2 mb-2" style=" width:150px; height:150px;">
      </div>
      <div class="col-8">
        <h1>Name    : <?php echo h($artist->full_name()); ?></h1>
        <p>Username : <?php echo h($artist->username) ?> </p>
        <p><?php //echo h($artist->price); ?></p>
      </div>
      <hr/>
    </div>
    </a>
  </div>
  <?php } ?>
  <!-- Beginning : List of Art Items-->
<?php include(SHARED_PATH . '/footer.php'); ?>
