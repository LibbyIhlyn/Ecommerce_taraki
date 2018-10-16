<?php

include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$contact = $_POST["contact"];
$address = $_POST["address"];
$zipcode = $_POST["zipcode"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];

if($mysqli->query("INSERT INTO `users`(`fname`, `lname`, `contact`, `address`, `zipcode`, `email`, `password`) VALUES('$fname', '$lname', '$contact', '$address', $zipcode, '$email', '$pwd')")){
	echo '<script>alert('Account Successfully Created!')</script>'
}

header ("location:login.php");

?>