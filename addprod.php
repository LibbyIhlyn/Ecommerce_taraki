<?php
require 'config.php';

if(isset($_POST['code']) && isset($_POST['name'])){

$code = $_POST["code"];
$name = $_POST["name"];
$desc = $_POST["desc"];
$img = $_POST["img"];
$quantity = $_POST["quantity"];
$price = $_POST["price"];
$category = $_POST["category"];

$query = "SELECT code FROM products where product_code = '$code'";
$queryresult = mysqli_query($mysqli,$query);
$checkrows = mysqli_num_rows($queryresult)>0;
	
	if(checkrows == true) {
		echo "<script type='text/javascript'>alert('This Product Code Already Exists.')</script>";
		header ("Refresh: 0; url=register.php");
    }
    else{
        $querycheck= "INSERT INTO products (product_code, product_name, product_desc, product_img_name, qty, price, category) VALUES
                    ('$code', '$name', '$desc', '$img', '$quantity', '$price', '$category')";
        $checkresult = mysqli_query($mysqli, $querycheck);
        
        if($checkresult){
            echo "<script type='text/javascript'>alert('Product Successfully Added!')</script>";
            header ("Refresh: 0; url=addproduct.php");
        }
    }
}
?>