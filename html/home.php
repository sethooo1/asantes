<?php
  require_once("../includes/initialize.php");
  if (!$session->is_logged_in()) {
    redirect_to("index.php");
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Menu</h2>

	<?php echo output_message($message); ?>
	<ul>
		<li><a href="list_photos.php">List Photos</a></li>
		<li><a href="logfile.php">View Log file</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
  </body>
</html>
