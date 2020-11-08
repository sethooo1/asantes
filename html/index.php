<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="icon" href="icon.ico">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.5.3/dist/css/bootstrap.css">

    <!--Fontawesome CSS -->
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">

    <title>azantes</title>
  </head>

  <body>



    <!-- Beginning : Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index">
        <img src="icon/logo.png" width="200" height="60" alt="" loading="lazy">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Trending</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Artists</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Auctions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>


        <!-- Beginning : Login and Register Buttons in Nav -->
        <button type="button" class="btn btn-dark mr-2 ml-2">Login</button>
        <button type="button" class="btn btn-dark mr-2 ml-2">
          <a href="register.php" class="text-light">Register</a>
        </button>
        <!-- Ending : Login and Register Buttons in Nav -->

      </ul>
      <!-- Beginning : Search Form in Nav -->
      <form class="form-inline mr-2 ml-2">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="Search Authentic African Art/Objects" aria-label="Search" aria-describedby="basic-addon1">
        </div>
      </form>

      <!-- Ending : Search Form in Nav -->
    </div>
</nav>
    <!-- Ending : Navigation Bar -->

    <!-- Breadcrumbs : Beginning Tag -->
    <!-- Taking out the breadcrumbs for the meantime
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
      </ol>
    </nav>
  -->
    <!-- Breadcrumbs : Ending Tag -->

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

    <!-- Footer Beginning :  -->
    <hr class="mt-5 mb-5"/>
    <footer class="page-footer bg-dark">

      <div class="container">
        <div class="row py-4 d-flex align-items-center">
          <div class="col-md-12 text-center">
            <a href="#"><i class="fab fa-facebook-f mr-5"></i></a>
            <a href="#"><i class="fab fa-twitter mr-5"></i></a>
            <a href="#"><i class="fab fa-instagram mr-5"></i></a>
            <a href="#"><i class="fab fa-pinterest mr-5"></i></a>
            <a href="#"><i class="fab fa-youtube mr-5"></i></a>
            <a href="#"><i class="fab fa-weibo mr-5"></i></a>
            <a href="#"><i class="fab fa-discord mr-5"></i></a>
            <a href="#"><i class="fab fa-telegram mr-5"></i></a>
            <a href="#"><i class="fab fa-vimeo-v"></i></a>
            <a href="#"></a>
            <a href="#"></a>
          </div>

        </div>
      </div>

      <div class="container text-center text-md-left mt-5 text-light">
        <div class="row">

          <div class="col-md-3 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">azantes</h6>
            <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px;">
            <p class="mt-2"> This the Art and Craft destination for authentic African. Sourced from the rich and beautiful motherland</p>
          </div>


          <div class="col-md-3 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Art</h6>
            <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; height: 2px;">

            <ul class="list-unstyled">
              <li class="my-2"><a href="#" class="text-light">Paintings</a></li>
              <li class="my-2"><a href="#" class="text-light">Pencil Art</a></li>
              <li class="my-2"><a href="#" class="text-light">Political Art</a></li>
              <li class="my-2"><a href="#" class="text-light">Freedom Art</a></li>
            </ul>
          </div>

          <div class="col-md-3 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Useful Links</h6>
            <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 110px; height: 2px;">
            <ul class="list-unstyled">
              <li class="my-2"><a href="#" class="text-light">Ashanti Kingdom</a></li>
              <li class="my-2"><a href="#" class="text-light">Nigerian Art</a></li>
              <li class="my-2"><a href="#" class="text-light">Authenticity</a></li>
              <li class="my-2"><a href="#" class="text-light">Democracy in Africa</a></li>
            </ul>
          </div>

          <div class="col-md-3 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Contact Us</h6>
            <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 110px; height: 2px;">
            <ul class="list-unstyled">
              <li class="my-2"><i class="fas fa-home mr-3"></i> Accra, Greater Accra</li>
              <li class="my-2"><i class="fas fa-envelope mr-3"></i> info@azantes.com</li>
              <li class="my-2"><i class="fas fa-phone mr-3"></i> +(233) 502 477 877</li>
              <li class="my-2"><i class="fas fa-print mr-3"></i> +(233) 502 477 877</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="footer-copyright text-center py-3">
        <p class="text-light">&copy; Copyright
          <a href="#" class="text-light" >azantes</a>
        </p>
      </div>



  </footer>
    <!-- Footer Ending :  -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
