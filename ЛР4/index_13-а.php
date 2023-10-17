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
function print_products_alphabetically($products) {
    if (usort($products, function($a, $b) {
        return strcmp($a["name"], $b["name"]);
    })) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Price</th></tr>";
        foreach ($products as $product) {
            echo "<tr><td>" . $product["name"] . "</td><td>" . $product["price"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Ошибка сортировки";
    }
}
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
?>
    <time>
        <?php
        echo date("Y-m-d H:i:s"); 
        ?> 
    </time> 
</body>
</html>