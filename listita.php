<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
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
            echo "<table border=2px>";

            echo"<tr>";
            echo"<td>";
                echo"Nombre del Producto";
            echo"</td>";
            echo"<td>";
                echo"Precio";
            echo"</td>";
            echo"<td>";
                echo"Estado";
            echo"</td>";
            echo"</tr>";

            echo"<tr>";
               echo"<td>";
                    echo "<br>" . $value["product_name"];
               echo"</td>";
            echo"<td>";
            echo "<br>"  . $value["price"];

            echo"</td>";

            echo"<td>";
            echo  "<br>" . $value["is_activate"];

            echo"</td>";
            

                echo "<td>"; 

                echo "<input type='button' value='modificar'>";

                echo "<input type='button' value='Eliminar'>";
                echo "<input type='button' value='Agregar'>";
                echo "</td>";



            echo"</tr>";
            echo "<br>";


            

            echo "</table>";
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