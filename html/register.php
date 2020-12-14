<?php require_once("../private/initialize.php"); ?>
<?php $page_title = "Register"; ?>
<?php include(SHARED_PATH . '/header.php'); ?>
<?php
$max_file_size = 1048576; //exprssed in bytes =10MB
if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['customer'];
  $customer = new Customer($args);
  $result = $customer->save();

  if($result === true) {
    $new_id = $customer->id;
    $session->message('The customer was created successfully.');
    redirect_to(url_for('/customer/index.php?id=' . $new_id));
  } else {
    // show errors
  }

} else {
  // display the form
  $customer = new Customer;
}
 ?>


    <!-- Form Beginning : The start of the registration form -->
    <div class="container">
      <h6 class="lead display-3 mt-5">Create your online account</h6>
    <hr class="mt-2 mb-5"/>

    <?php echo display_errors($customer->errors); ?>
    <form class="" action="register.php" method="post">
      <dl>
        <dt>First name</dt>
        <dd><input type="text" name="customer[first_name]" value="<?php echo h($customer->first_name); ?>" /></dd>
      </dl>

      <dl>
        <dt>Last name</dt>
        <dd><input type="text" name="customer[last_name]" value="<?php echo h($customer->last_name); ?>" /></dd>
      </dl>

      <dl>
        <dt>Email</dt>
        <dd><input type="text" name="customer[email]" value="<?php echo h($customer->email); ?>" /></dd>
      </dl>

      <dl>
        <dt>Username</dt>
        <dd><input type="text" name="customer[username]" value="<?php echo h($customer->username); ?>" /></dd>
      </dl>

      <dl>
        <dt>Password</dt>
        <dd><input type="password" name="customer[password]" value="" /></dd>
      </dl>

      <dl>
        <dt>Confirm Password</dt>
        <dd><input type="password" name="customer[confirm_password]" value="" /></dd>
      </dl>
      <input type="submit" name="submit" value="Submit">

    </form>


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
