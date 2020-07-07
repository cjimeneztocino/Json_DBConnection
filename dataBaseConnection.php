<?php
ini_set('display_errors', 1);

include_once 'assets/_config.php';

/*Manual Connection*/
$conn = new mysqli($servername, $username, $password, $db );
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    return (false);
}
echo "<p>Connected successfully from Script</p>";
/*Manual Connection*/

/*Read JSON*/
$string = file_get_contents("assets/Json/myfile.json");
$json = json_decode($string);

foreach ($json->products as $product) {
    var_dump($product->description);

    $query = "INSERT INTO Products (description, material, price, coin) VALUES ('$product->description', '$product->material', $product->price, '$product->coin')";
    var_dump($query);
    if ( $conn->query($query) === true){
        echo "<p>Succesfully inserted</p>";
    }else {
        echo "<p>failure by insterT</p>";
    }


    echo "<hr>";
}
/*Read JSON*/

//$query = "INSERT INTO Products (description, material, price, coin) VALUES ('Chair', 'wood', 75, '€')";
//if ( $conn->query($query) === true){
//    echo "<p>Succesfully inserted</p>";
//}else {
//    echo "<p>failure by insterT</p>";
//}
$conn->close();