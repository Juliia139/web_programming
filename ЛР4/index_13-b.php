<!DOCTYPE html>
<html>
<head>
<title>Test</title>
<meta charset="utf-8">
</head>
<body>
    <!-- Програма сортування масиву -->
    <h1>Тестова сторінка. ЛР4</h1>
    <h2>Завдання 13</h2>
<?php

$products = array(
    array("name" => "book", "price" => 200),
    array("name" => "copybook", "price" => 350),
    array("name" => "pencil", "price" => 100),
    array("name" => "rubber", "price" => 150),
    array("name" => "sketchbook", "price" => 300)
);
echo "<table>";
echo "<tr><th>Name</th><th>Price</th></tr>";
foreach ($products as $product) {
    echo "<tr><td>" . $product["name"] . "</td><td>" . $product["price"] . "</td></tr>";
}
echo "</table>";
function print_products($products, $min_price, $max_price) {
    echo "<table>";
    echo "<tr><th>Name</th><th>Price</th></tr>";
    foreach ($products as $product) {
        if ($product["price"] >= $min_price && $product["price"] <= $max_price) {
            echo "<tr><td>" . $product["name"] . "</td><td>" . $product["price"] . "</td></tr>";
        }
    }
    echo "</table>";
}

// Виклик функції з параметрами через адресний рядок
if (isset($_GET["min_price"]) && isset($_GET["max_price"])) {
    print_products($products, $_GET["min_price"], $_GET["max_price"]);
}
?>
    <time>
        <?php
        echo date("Y-m-d H:i:s"); 
        ?> 
    </time> 
</body>
</html>