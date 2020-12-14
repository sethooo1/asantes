<?php if (!isset($page_title)) {
  $page_title = 'Authentique Art du Afrique';
} ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="icon" href="icon.ico">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo url_for('../stylesheets/bootstrap-4.5.3/dist/css/bootstrap.css'); ?>"/>

    <!--Fontawesome CSS -->
    <link rel="stylesheet" href="<?php echo url_for('../stylesheets/fontawesome-free-5.15.1-web/css/all.css'); ?>"/>

    <title>azantes - <?php echo $page_title; ?> </title>
  </head>

  <body>



    <!-- Beginning : Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index">
        <img src="images/icon/logo2222.png" width="200" height="70" alt="" loading="lazy">
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
          <a class="nav-link" href="artists.php">Artists</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Auctions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>


        <!-- Beginning : Login Button in Nav triggering a Modal -->
        <a href="../logout.php" class="btn btn-dark mr-2 ml-2">Logout</a>
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
