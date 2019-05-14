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
$dbname = "auth";

$user = $_POST["user"];
$pass = $_POST["pass"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO products VALUES (null, '$product_name', '$price','$is_activate')";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?> 
</body>
</html>
