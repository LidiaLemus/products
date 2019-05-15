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


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "select * from product";
    
    if($conn){
        $result = $conn->query($sql);
        foreach ($result as $value) {
            echo "<br>" . $value["product_name"];
            echo "<br>"  . $value["price"];
            echo  "<br>" . $value["is_activate"]
        }

    }else{
            echo "nothig";

    }
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?> 
</body>
</html>