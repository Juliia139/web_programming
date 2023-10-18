<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<div>
<?php
// Перевірка, чи була надіслана форма
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Перевірка правильності введених даних
    $errors = [];
    if (empty($_POST['name'])) {
        $errors[] = 'Введіть ваше ім\'я';
    }
    if (empty($_POST['email'])) {
        $errors[] = 'Введіть вашу електронну пошту';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Введіть коректну електронну пошту';
    }
    if (empty($_POST['message'])) {
        $errors[] = 'Введіть ваше повідомлення';
    }

    // Якщо помилок немає, вивести дані з форми
    if (empty($errors)) {
        echo '<p>Ім\'я: ' . htmlspecialchars($_POST['name']) . '</p>';
        echo '<p>Електронна пошта: ' . htmlspecialchars($_POST['email']) . '</p>';
        echo '<p>Повідомлення: ' . htmlspecialchars($_POST['message']) . '</p>';

        // Виведення параметрів завантаженого файлу
        if (!empty($_FILES['file'])) {
            echo '<h3>Інформація про завантажений файл:</h3>';
            echo '<ul>';
            echo '<li>Ім\'я файлу: ' . $_FILES['file']['name'] . '</li>';
            echo '<li>Тип файлу: ' . $_FILES['file']['type'] . '</li>';
            echo '<li>Розмір файлу: ' . $_FILES['file']['size'] . '</li>';
            echo '</ul>';
        }
    } else {
        // Якщо є помилки, вивести їх на екран
        echo '<ul>';
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '</ul>';
    }
}
?>

<h3>Форма зворотного зв'язку</h3>
<form method="post" enctype="multipart/form-data">
    <label for="name">Ім'я:</label>
    <input type="text" name="name" id="name"><br>

    <label for="email">Електронна пошта:</label>
    <input type="text" name="email" id="email"><br>

    <label for="message">Повідомлення:</label>
    <textarea name="message" id="message"></textarea><br>

    <label for="file">Завантажити файл:</label>
    <input type="file" name="file" id="file"><br>

    <input type="submit" value="Надіслати">
</form>
</div>

</body>
</html>