<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=books", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Помилка підключення до бази даних: " . $e->getMessage();
    exit();
}

$stmt = $pdo->query("SELECT COUNT(*) FROM books");
$get_total_rows = $stmt->fetch(PDO::FETCH_NUM);

echo 'В базі ' . $get_total_rows[0] . ' книг';
?>