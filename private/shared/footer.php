
<!-- Beginning : Modal for Login -->

<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title lead text-lg" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Beginning : Form in Modal for Login -->
        <form action="index.php" method="post">
          <div class="form-group">
            <div class="form-group">
              <input type="text" name="email" value="" class="form-control mt-2 mb-2" placeholder="Email Address">
            </div>
            <div class="form-group">
              <input type="password" name="password" value="" class="form-control mt-2 mb-2" placeholder="Password">
            </div>
          </div>


        <div class="form-group">
          <div class="row ml-auto">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                Remember Me
              </label>
            </div>
          </div>
          <div class="row">
            <button type="submit" name="submit" value="Login" class="btn btn-dark col-4 text-center ml-auto mr-auto mt-5 mb-3">Sign in</button>
          </div>
        </div>
        </form>
        <!-- Ending : Form in Modal for Login -->
      </div>
      <div class="modal-footer">
        <p class="lead-sm">No account? Click <a href="register.php">Register</a>
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Ending : Modal for Login -->


<!-- Footer Beginning :  -->
<hr class="mt-5 mb-5"/>
<footer class="page-footer bg-dark">

  <div class="container">
    <div class="row py-4 d-flex align-items-center">
      <div class="col-md-12 text-center">
        <a href="#"><i class="fab fa-facebook-f mr-5"></i></a>
        <a href="https://twitter.com/azantesart" target="_blank"><i class="fab fa-twitter mr-5"></i></a>
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
          <li class="my-2"><a href="#" class="text-light">Nigerian Art</a></li>
          <li class="my-2"><a href="#" class="text-light">Authenticity</a></li>
          <li class="my-2"><a href="#" class="text-light">Democracy in Africa</a></li>
          <li class="my-2"><a href="terms.php" class="text-light">Terms and Conditions</a></li>
          <li class="my-2"><a href="privacy.php" class="text-light">Privacy Policy</a></li>
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
    <p class="text-light">&copy; Copyright <?php echo date("Y", time()); ?>
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
<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>

<script src="stylesheet/form-validation.js"></script>

</body>
</html>
<?php db_disconnect($database); ?>
