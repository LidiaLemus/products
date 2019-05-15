<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<?php
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
    $sql = "INSERT INTO user VALUES (null, '$user', '$pass')";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?> 


 ?>
</body>
</html>