<?php
ini_set('display_errors', 1);
$productsArray = [
    "products" => [
        [
            "id" => 1,
            "description" => "Table",
            "material" => "Piedra Ostionera",
            "price" => 200,
            "coin" => "€"
        ],
        [
            "id" => 2,
            "description" => "Chair",
            "material" => "Piedra Ostionera",
            "price" => 75,
            "coin" => "€"
        ],
        [
            "id" => 3,
            "description" => "Regal",
            "material" => "Piedra Ostionera",
            "price" => 500,
            "coin" => "€"
        ],
        [
            "id" => 4,
            "description" => "Table",
            "material" => "Suela de chancla",
            "price" => 150,
            "coin" => "€"
        ],
        [
            "id" => 5,
            "description" => "Chair",
            "material" => "Suela de chancla",
            "price" => 50,
            "coin" => "€"
        ],
        [
            "id" => 6,
            "description" => "Regal",
            "material" => "Suela de chancla",
            "price" => 15,
            "coin" => "€"
        ],
        [
            "id" => 7,
            "description" => "Table",
            "material" => "steel ",
            "price" => 75,
            "coin" => "€"
        ],
        [
            "id" => 8,
            "description" => "Chair",
            "material" => "steel ",
            "price" => 30,
            "coin" => "€"
        ],
        [
            "id" => 9,
            "description" => "Regal",
            "material" => "steel ",
            "price" => 150,
            "coin" => "€"
        ],
    ]
];

var_dump($productsArray);
echo "<hr>";
$json_data = json_encode($productsArray, JSON_FORCE_OBJECT);
var_dump($json_data);
echo file_put_contents('assets/Json/myfile.json', $json_data);


?>