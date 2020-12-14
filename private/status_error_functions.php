<?php


function require_login()
{
  // This function checks for login
  global $session;
  if (!$session->is_logged_in()) {
    // Checking to see if user is logged in
    redirect_to(url_for('/staff/login.php'));
  } else {
    // Do nothing let the rest of the page proceed
  }
}

function customer_require_login()
{
  // This function checks for login
  global $session;
  if (!$session->customer_is_logged_in()) {
    // Checking to see if user is logged in
    redirect_to(url_for('/login.php'));
  } else {
    // Do nothing let the rest of the page proceed
  }
}


function display_errors($errors=array()) {
  $output = '';
  if(!empty($errors)) {
    $output .= "<div class=\"errors\">";
    $output .= "Please fix the following errors:";
    $output .= "<ul>";
    foreach($errors as $error) {
      $output .= "<li>" . h($error) . "</li>";
    }
    $output .= "</ul>";
    $output .= "</div>";
  }
  return $output;
}

function display_session_message() {
  global $session;
  $msg = $session->message();
  if(isset($msg) && $msg != '') {
    $session->clear_message();
    return '<div id="message">' . h($msg) . '</div>';
  }
}

?>
