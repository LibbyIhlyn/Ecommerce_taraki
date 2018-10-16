<?php
require 'config.php';

  session_start();
  session_unset();
  session_destroy();
  header("location:index.php");
  exit();

  $time2=date("d-m-Y", time());
  $query = "INSERT INTO session (timeout) VALUES ('$time2')";
  $check = mysqli_query($mysqli, $query);
  ?>
