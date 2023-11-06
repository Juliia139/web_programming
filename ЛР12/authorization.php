<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $password = $_POST["password"];

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=books", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Помилка підключення до бази даних: " . $e->getMessage();
        exit();
    }

    $sql = "SELECT * FROM users WHERE login = :login";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':login', $login);

    if ($stmt->execute()) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION["id"] = $user['id'];
            echo "Авторизація успішна. Ви увійшли як " . $user['surname'] . "<p>Тепер Вам доступний <a href='display_book.php'>перегляд списку книг</a>.</p>";

        } else {
            echo "Неправильне ім'я користувача або пароль.";
        }
    } else {
        echo "Помилка при авторизації.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Авторизація</title>
</head>
<body>
    <h1>Вхід до системи</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="login">Ім'я користувача:</label>
        <input type="text" name="login" required><br><br>

        <label for="password">Пароль:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Увійти">
        <input type="button" value="Назад" onclick="location.href='http://127.0.0.1/index.php';">
    </form>
</body>
</html>