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
 
 try(){
 	

 }catch(PDOException $e){
 	 echo $sql . "<br>" . $e->getMessage();
 }
$conn = null;
   ?>
</body>
</html>