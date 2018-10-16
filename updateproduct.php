<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

$product_id = $_GET['id'];

if($_GET['id'])
{
$id=$_GET['id'];


$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$city = $_POST["city"];
$pin = $_POST["pin"];
$email = $_POST["email"];
$password = $_POST["password"];

if($fname!=""){
  $result = $mysqli->query('UPDATE products SET product_code ="'. $fname .'" WHERE id ='.$id );
  if($result){
  }
}

if($lname!=""){
  $result = $mysqli->query('UPDATE products  SET product_name ="'. $lname .'" WHERE id ='.$id );
  if($result){
  }
}

if($address!=""){
  $result = $mysqli->query('UPDATE products  SET product_desc ="'. $address .'" WHERE id ='.$id );
  if($result){
  }
}

if($city!=""){
  $result = $mysqli->query('UPDATE products  SET product_img_name ="'. $city .'" WHERE id ='.$id );
  if($result){
  }
}

if($pin!=""){
  $result = $mysqli->query('UPDATE products  SET qty ='. $pin .' WHERE id ='.$id );
  if($result){
  }
}

if($email!=""){
  $result = $mysqli->query('UPDATE products  SET price ='. $email .' WHERE id ='.$id );
  if($result){
  }
}

if($password!=""){
  $result = $mysqli->query('UPDATE products  SET category ='. $password .' WHERE id ='.$id );
  if($result){
  }
}

 echo "<script type='text/javascript'>alert('Product Successfully Updated!')</script>";
 header("Refresh: 0; url=admin.php");

}

?>