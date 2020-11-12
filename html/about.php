<?php
  require_once("../includes/initialize.php");
 ?>

<?php include_layout_template('header.php') ?>


    <!-- Beginning : Jumbotron -->
    <div class="jumbotron">
      <h1 class="display-4">Welcome to azantes!</h1>
      <p class="lead"></p>
      <hr class="my-4">
      <p>Authentique Art du Afrique</p>
    </div>
    <!-- Ending : Carousel -->

    <!-- Beginning : Main Container Starts with Cards of pics -->

    <!-- Trending Beginning : The header for the Trending Section with the Horizontal Line -->
    <div class="container">
      <h1 class="lead display-4 mt-5">About Us</h1>
    <hr class="mt-2 mb-5"/>

    <!-- Trending Beginning : Main Container Starts with Cards of pics -->

      <div class="container">
        <div class="row">
          <div class="col-2">
            <img src="img/c5.jpg" alt="..." class="rounded-lg mt-2 mb-2" style=" width:150px; height:150px;">
            <img src="img/c1.jpg" alt="..." class="rounded-circle mt-2 mb-2" style=" width:150px; height:150px;">
          </div>
          <div class="col-10 ml-auto">
            <p class="lead">azantes founded in the year 2020, is a website dedicated to authentic African art.
              azantes is a name and place that speaks of extraordinary art, unparalleled service, expertise and global reach. Founded in 1766 by James Christie, Christie's has since conducted the greatest and most celebrated auctions through the centuries providing a popular showcase for the unique and the beautiful. Christie’s offers around 350 auctions annually in over 80 categories, including all areas of fine and decorative arts, jewellery, photographs, collectibles, wine, and more. Prices range from $200 to over $100 million. Christie's also has a long and successful history conducting private sales for its clients in all categories, with emphasis on Post-War & Contemporary, Impressionist & Modern, Old Masters and Jewellery.

              Christie’s has a global presence in 46 countries, with 10 salerooms around the world including in London, New York, Paris, Geneva, Milan, Amsterdam, Dubai, Zürich, Hong Kong, and Shanghai. More recently, Christie’s has led the market with expanded initiatives in growth markets such as Russia, China, India and the United Arab Emirates, with successful sales and exhibitions in Beijing, Mumbai and Dubai.
            </p>
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
