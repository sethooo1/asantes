<?php
require_once('../private/initialize.php');

// Log out the admin
$session->customer_logout();

redirect_to(url_for('/login.php'));

?>
