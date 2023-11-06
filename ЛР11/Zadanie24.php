<?php
$mysqli = new mysqli('localhost', 'root', '', 'products');

if ($mysqli->connect_error) {
    die('Error: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$results = $mysqli->query("SELECT id, product_code, product_name, product_desc, price FROM products");

print '<table border="1">';

while ($row = $results->fetch_object()) {
    print '<tr>';
    print '<td>' . $row->id . '</td>';
    print '<td>' . $row->product_code . '</td>';
    print '<td>' . $row->product_name . '</td>';
    print '<td>' . $row->product_desc . '</td>';
    print '<td>' . $row->price . '</td>';
    print '</tr>';
}

print '</table>';

$product_name = $mysqli->query("SELECT product_name FROM products WHERE id = 3")->fetch_object()->product_name;

print '<br> Назва товару: ' . $product_name . '<br>';

$result = $mysqli->query("SELECT COUNT(*) FROM products");
$get_total_rows = $result->fetch_row();

print '<br> Кількість строк: ' . $get_total_rows[0] . '<br>';

$search_product = "PD1003"; // product id

// Створення prepared statement
$query = "SELECT id, product_code, product_desc, price FROM products WHERE product_code=?";
$statement = $mysqli->prepare($query);

// Параметри прив’язки для маркерів, де (s = string, i = integer, d = double, b = blob)
$statement->bind_param('s', $search_product);

// Виконання запиту
$statement->execute();

// Зв'язування результуючих змінних
$statement->bind_result($id, $product_code, $product_desc, $price);

print '<br><table border="1">';
// Вивід записів
while ($statement->fetch()) {
    print '<tr>';
    print '<td>' . $id . '</td>';
    print '<td>' . $product_code . '</td>';
    print '<td>' . $product_desc . '</td>';
    print '<td>' . $price . '</td>';
    print '</tr>';
}
print '</table>';

// Закриття з'єднання
$statement->close();

// product 1
$product_code1 = '"' . $mysqli->real_escape_string('P1004') . '"';
$product_name1 = '"' . $mysqli->real_escape_string('Google Nexus') . '"';
$product_price1 = '"' . $mysqli->real_escape_string('150') . '"';

// product 2
$product_code2 = '"' . $mysqli->real_escape_string('P2004') . '"';
$product_name2 = '"' . $mysqli->real_escape_string('Apple iPad 2') . '"';
$product_price2 = '"' . $mysqli->real_escape_string('220') . '"';

// product 3
$product_code3 = '"' . $mysqli->real_escape_string('P3004') . '"';
$product_name3 = '"' . $mysqli->real_escape_string('Samsung Galaxy Note') . '"';
$product_price3 = '"' . $mysqli->real_escape_string('263') . '"';

// Insert multiple rows
$insert = $mysqli->query("INSERT INTO products(product_code, product_name, price) VALUES ($product_code1, $product_name1, $product_price1), ($product_code2, $product_name2, $product_price2), ($product_code3, $product_name3, $product_price3)");

if ($insert) {
    print '<br> Запит успішно виконаний! Всього ' . $mysqli->affected_rows . ' рядків додано.<br>';
} else {
    die('<br>Помилка: (' . $mysqli->errno . ') ' . $mysqli->error) . '<br>';
}

// Запит на оновлення
$results = $mysqli->query("UPDATE products SET product_name='52 inch TV', product_code='323343' WHERE ID=24");

// Запит на видалення
$results = $mysqli->query("DELETE FROM products WHERE ID=24");

if ($results) {
    print '<br>Запит успішно виконаний! Запис оновлено/видалено/';
} else {
    print '<br>Помилка: (' . $mysqli->errno . ') ' . $mysqli->error;
}

$mysqli->close();
?>