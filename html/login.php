<?php
require_once('../private/initialize.php');

$errors = [];
$email = '';
$password = '';

if(is_post_request()) {

  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';

  // Validations
  if(is_blank($email)) {
    $errors[] = "Email cannot be blank.";
  } elseif (!has_length($email, array('max' => 255))) {
    $errors[] = "Email must be less than 255 characters.";
  } elseif (!has_valid_email_format($email)) {
    $errors[] = "Email must be a valid format.";
  }
  if(is_blank($password)) {
    $errors[] = "Password cannot be blank.";
  } elseif (!has_length($password, array('min' => 12))) {
    $errors[] = "Password must contain 12 or more characters";
  } elseif (!preg_match('/[A-Z]/', $password)) {
    $errors[] = "Password must contain at least 1 uppercase letter";
  } elseif (!preg_match('/[a-z]/', $password)) {
    $errors[] = "Password must contain at least 1 lowercase letter";
  } elseif (!preg_match('/[0-9]/', $password)) {
    $errors[] = "Password must contain at least 1 number";
  } elseif (!preg_match('/[^A-Za-z0-9\s]/', $password)) {
    $errors[] = "Password must contain at least 1 symbol";
  }

  // if there were no errors, try to login
  if(empty($errors)) {
    $customer = Customer::find_by_email($email);
    // test if admin found and password is correct
    if($customer != false && $customer->verify_password($password)) {
      // Mark customer as logged in
      $session->login_customer($customer);
      redirect_to(url_for('/customer/index.php'));
    } else {
      // username not found or password does not match
      $errors[] = "Log in was unsuccessful.";
    }
  }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signin Template · Bootstrap v5.0</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link href="stylesheets/bootstrap-4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>
    <!-- Custom styles for this template -->
    <link href="stylesheets/signin.css" rel="stylesheet">
  </head>
  <?php $page_title = 'Log in'; ?>
  <body class="text-center">

<main class="form-signin">

<div id="content">

  <?php echo display_errors($errors); ?>

  <form action="login.php" method="post">
    <a href="index.php"><img class="mb-4" src="images/icon/logo2222.png" alt="" width="200" height="95"></a>
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <label for="inputEmail" class="" hidden>Email address</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email" value="<?php echo h($email); ?>" /><br />
    <label for="inputPassword" class="" hidden>Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password" value="" /><br />
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" name="submit" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
  </form>

  <p class="lead-sm">No account? Click <a href="register.php">Register</a>

</div>
</main>
  </body>
</html>
