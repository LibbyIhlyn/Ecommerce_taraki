<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

$product_id = $_GET['id'];

if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from products where id='$id'";
 mysqli_query( $mysqli,$sql);
 echo "<script type='text/javascript'>alert('Product Successfully Deleted!')</script>";
 header("Refresh: 0; url=admin.php");
}
?>