<!DOCTYPE html>
<html>

<head>
    <title>Список книг</title>
</head>

<body>
    <?php
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=books", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Помилка підключення до бази даних: " . $e->getMessage();
        exit();
    }

    $sql = "SELECT * FROM books";
    $stmt = $pdo->query($sql);

    if ($stmt->rowCount() > 0) {
        echo "<h1>Список книг</h1>";
        echo "<table border='1'>";
        echo "<tr><th>Код</th><th>Автор</th><th>Назва</th><th>Опис</th></tr>";

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['book_code'] . "</td>";
            echo "<td>" . $row['book_author'] . "</td>";
            echo "<td>" . $row['book_name'] . "</td>";
            echo "<td>" . $row['book_desc'] . "</td>";
            echo "</tr>";
        }

        echo "</table><p>";
    } else {
        echo "У базі даних немає книг.";
    }
    ?>
<input type="button" value="Закрити" onclick="location.href='http://127.0.0.1/index.php';">
</body>

</html>