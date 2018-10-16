<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

$username = $_POST["username"];
$password = $_POST["pwd"];
$flag = 'true';

$result = $mysqli->query('SELECT id,email,password,fname,type from users order by id asc');

if($result === FALSE){
  die(mysql_error());
}

else if($result){
  while($obj = $result->fetch_object()){
    if($obj->email === $username && $obj->password === $password && $obj->type === "user") {
      
      date_default_timezone_set("Asia/Manila");
      $date=date("m-d-Y");
      $time=date(time());

      $_SESSION['username'] = $username;
      $_SESSION['type'] = $obj->type;
      $_SESSION['id'] = $obj->id;
      $_SESSION['fname'] = $obj->fname;

      header("location:index.php");
      
    }elseif($obj->email === $username && $obj->password === $password && $obj->type === "admin") {

      $_SESSION['username'] = $username;
      $_SESSION['type'] = $obj->type;
      $_SESSION['id'] = $obj->id;
      $_SESSION['fname'] = $obj->fname;
      header("location:admin.php");

      $query = "INSERT INTO session (useremail, date, timein, type) VALUES ('$username', '$date','$time','admin')";
      $check= mysqli_query($mysqli, $query);
    }else {

        if($flag === 'true'){
          redirect();
          $flag = 'false';
        }
    }
  }
}



function redirect() {
  echo "<script type='text/javascript'>alert('INCORRECT EMAIL/PASSWORD COMBINATION! Try Again.')</script>";
  header("Refresh: 0; url=login.php");
}
?>