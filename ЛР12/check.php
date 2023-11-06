<?php
// Проверяем, есть ли в сессии переменная, которая указывает на авторизацию пользователя
if (isset($_SESSION['auth'])) {
    // Если пользователь авторизован, выводим список книг
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

        echo "</table>";
    } else {
        echo "У базі даних немає книг.";
    }
} else {
    // Если пользователь не авторизован, выводим сообщение и ссылку для авторизации
    echo "<p>Перегляд книг тільки для авторизованих користувачів.</p>";
    echo "<p>Пожалуйста, <a href='authorization.php'>авторизуйтесь</a> или <a href='newuser.php'>зарегистрируйтесь</a>.</p>";
}
?>
