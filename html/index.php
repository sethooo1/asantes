<?php require_once("../private/initialize.php"); ?>
<?php $page_title = "Home Page"; ?>
<?php include(SHARED_PATH . '/header.php'); ?>
<?php $arts = Art::find_all(); ?>

<?php
$sql = "SELECT * FROM users";
$result = $database->query($sql);
$row = $result->fetch_assoc();
$result->free();

echo "Name: " . $row['first_name'] ." ". $row['last_name'];
 ?>
    <!-- Beginning : Carousel without writings so that we can edit Full pictures and use for the carousel -->
    <div class="container-lg mt-3">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/img/354.jpg" class="d-block w-100 img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/img/354.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/img/354.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
    <!-- Ending : Carousel -->

    <!-- Beginning : Main Container Starts with Cards of pics -->

    <!-- Trending Beginning : The header for the Trending Section with the Horizontal Line -->
    <div class="container">
      <h1 class="lead display-3 mt-5">Trending</h1>
    <hr class="mt-2 mb-5"/>

    <!-- Trending Beginning : Main Container Starts with Cards of pics -->

      <div class="card-deck mt-5">
        <?php foreach ($arts as $art) {?>
        <?php $photos = Photograph::find_photo_on($art->id); ?>
        <div class="card" style="width: 18rem;">
          <img src="images/arts/<?php echo $photos->filename; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo h($art->name); ?></h5>
            <p class="card-text">$<?php echo h($art->price); ?> USD</p>
            <?php $artist = Artist::find_by_id($art->artist_id); ?>
            <footer class="blockquote-footer">By <cite title="Source Title"><?php echo h($artist->full_name()); ?></cite></footer>
            <div class="btn-group mt-2 mb-2" role="group">
              <a href="art_detail.php?id=<?php echo $art->id; ?>" class="btn btn-outline-primary">View</a>
              <a href="checkout.php" class="btn btn-outline-success">Add to Cart</a>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>

    <?php include(SHARED_PATH . '/footer.php'); ?>
