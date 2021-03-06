<?php

  function db_connect() {
    $connection = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    confirm_db_connection($connection);
    return($connection);
  }

  function confirm_db_connection($connection){
    if ($connection->connect_errno) {
      // Message when there is an error
      $msg = "Database connection failed: ";
      $msg .= $connection->connect_error;
      $msg .= " (" . $connection->connect_errno .")";
      exit($msg);
    }
  }

  function db_disconnect($connection){
    if (isset($connection)) {
      // If the database is open this closes it
      $connection->close();
    }
  }


 ?>
