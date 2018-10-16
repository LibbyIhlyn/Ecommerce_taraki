<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$city = $_POST["city"];
$pin = $_POST["pin"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
$pwd2 = $_POST["pwd2"];


if($fname!=""){
  $result = $mysqli->query('UPDATE users SET fname ="'. $fname .'" WHERE id ='.$_SESSION['id']);
  if($result){
  }
}

if($lname!=""){
  $result = $mysqli->query('UPDATE users SET lname ="'. $lname .'" WHERE id ='.$_SESSION['id']);
  if($result){
  }
}

if($address!=""){
  $result = $mysqli->query('UPDATE users SET address ="'. $address .'" WHERE id ='.$_SESSION['id']);
  if($result){
  }
}

if($city!=""){
  $result = $mysqli->query('UPDATE users SET address2 ="'. $city .'" WHERE id ='.$_SESSION['id']);
  if($result){
  }
}

if($pin!=""){
  $result = $mysqli->query('UPDATE users SET zipcode ='. $pin .' WHERE id ='.$_SESSION['id']);
  if($result){
  }
}

if($email!=""){
    $query = "SELECT email FROM users where email = '$email'";
    $queryresult = mysqli_query($mysqli, $query);
	if(mysqli_num_rows($queryresult)>0) {
		echo "<script type='text/javascript'>alert('This Email Already Exists.')</script>";
		header ("Refresh: 0; url=account.php");
    }else{
     $result = $mysqli->query('UPDATE users SET email ="'. $email .'" WHERE id ='.$_SESSION['id']);
        if($result) {
        }
    }
}

//$result = $mysqli->query('Select password from users WHERE id ='.$_SESSION['id']);
//$obj = $result->fetch_object();

if($pwd != $pwd2) {
		echo "<script type='text/javascript'>alert('The Passwords Does Not Match.')</script>";
		header ("Refresh: 0; url=account.php");
    }
    elseif ($pwd === $pwd2){
    $query = $mysqli->query('UPDATE users SET password ="'. $pwd .'" WHERE id ='.$_SESSION['id']);
    if($query){
    
    echo "<script type='text/javascript'>alert('Update Successful.')</script>";
    session_destroy();
    header ("location: login.php");
    }
}
?>