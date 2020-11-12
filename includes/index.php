<?php
  require_once("../includes/initialize.php");
 ?>

<?php include_layout_template('header.php') ?>

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
          <img src="img/354.jpg" class="d-block w-100 img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/354.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/354.jpg" class="d-block w-100" alt="...">
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

      <div class="card-deck">
        <div class="card" style="width: 18rem;">
          <img src="img/c1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="img/c1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="img/c1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>

      <div class="card-deck mt-5">
        <div class="card" style="width: 18rem;">
          <img src="img/c2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="img/c3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="img/c4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include_layout_template('footer.php') ?>
