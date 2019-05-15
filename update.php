<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <?php


$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "products";

$product_name = $_POST['product_name'];
$price = $_POST['price'];
$is_activate = $_POST['is_astivate'];
 
   try(){

     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "update product set product_name='$product_name',price='$price',is_activate='$is_activate' where id=$id";
$conn->exec($sql);
    

   }catch(PDOException $e){
 	 echo $sql . "<br>" . $e->getMessage();
   }
     $conn = null;
   ?>
</body>
</html>