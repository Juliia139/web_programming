<!DOCTYPE html>
<html>

<head>
    <title>Додавання книги</title>
</head>

<body>
    <h1>Додати нову книгу</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="book_code">Код книги:</label>
        <input type="varchar" name="book_code" required><br><br>

        <label for="book_author">Автор:</label>
        <input type="varchar" name="book_author" required><br><br>

        <label for="book_name">Назва:</label>
        <input type="varchar" name="book_name" required><br><br>

        <label for="book_desc">Опис:</label>
        <input type="tinytext" name="book_desc" required><br><br>

        <input type="submit" value="Додати книгу">
        <input type="button" value="Переглянути список книг" onclick="location.href='http://127.0.0.1/check.php';">
        <br><br>
        <input type="button" value="Дізнатися, скільки книг є в базі" onclick="location.href='http://127.0.0.1/book.php';">
        <input type="button" value="Додати користувача" onclick="location.href='http://127.0.0.1/newuser.php';">
        <br><br>
        <input type="button" value="Авторизуватися" onclick="location.href='http://127.0.0.1/authorization.php';">
        <input type="button" value="Вийти" onclick="location.href='http://127.0.0.1/logout.php';">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Отримати дані з форми
        $book_code = $_POST['book_code'];
        $book_author = $_POST['book_author'];
        $book_name = $_POST['book_name'];
        $book_desc = $_POST['book_desc'];

        // Підключення до бази даних
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=books", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Помилка підключення до бази даних: " . $e->getMessage();
            exit();
        }

        // Додавання користувача до бази даних
        $sql = "INSERT INTO books (book_code, book_author, book_name, book_desc) VALUES (:book_code, :book_author, :book_name, :book_desc)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':book_code', $book_code);
        $stmt->bindParam(':book_author', $book_author);
        $stmt->bindParam(':book_name', $book_name);
        $stmt->bindParam(':book_desc', $book_desc);

        if ($stmt->execute()) {
            echo "<br>Книгу додали успішно!";
        } else {
            echo "Помилка при додаванні книги.";
        }
    }
    ?>
</body>

</html>