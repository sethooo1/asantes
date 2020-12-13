<?php require_once("../private/initialize.php"); ?>
<?php $arts = Art::find_all(); ?>

<?php include(SHARED_PATH . '/header.php'); ?>

  <!-- Beginning : List of Art Items-->
  <?php foreach ($arts as $art) {?>
  <div class="container">
    <a href="art_detail.php?id=<?php echo $art->id; ?>">
    <div class="row mt- md-">
      <div class="col-4">
        <div class="col-4">
          <?php $photos = Photograph::find_photo_on($art->id); ?>
          <img src="images/arts/<?php echo $photos->filename; ?>" alt="..." class="rounded-lg mt-2 mb-2" style=" width:150px; height:150px;">
        </div>
      </div>
      <div class="col-8">
        <h1><?php echo h($art->name); ?></h1>
        <p>Lot #: <?php echo h($art->u_id) ?> </p>
        <p>Lot #: <?php echo h($art->id) ?> </p>
        <p><?php echo h($art->price); ?></p>
      </div>
      <hr/>
    </div>
    </a>
  </div>

<?php } ?>

  <!-- Beginning : List of Art Items-->
<?php include(SHARED_PATH . '/footer.php'); ?>
