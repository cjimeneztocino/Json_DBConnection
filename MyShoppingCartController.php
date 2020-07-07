<?php
ini_set('display_errors', 1);
/*Includes Utillities Classes*/
foreach (glob("Utillities/*.php") as $filename)
{
    include $filename;
}
/*Includes Utillities Classes*/
//include 'Utillities/MySQLConnection.php';
include_once 'assets/_config.php';


/*Utillity Classes*/
$connection = new \MySQLConnection\MySQLConnection($username, $password, $servername, $db);
/*Utillity Classes*/

/*Read JSON*/
$string = file_get_contents("assets/Json/myfile.json");
$json = json_decode($string);
/*Read JSON*/



foreach ($json->products as $product) {
//    var_dump($product);
//    $connection->insertProduct($product->description,$product->material, $product->price, $product->coin);
//    echo "<hr>";
}
$result = $connection->selectProducts();
//var_dump($result);
//while ($row = $result->fetch_assoc()) {
//    var_dump($row);
//    echo "<hr>";
//}

/*Read JSON*/
//$connection->insertProduct("Regal","Piedra Ostionera", 500,"€");
