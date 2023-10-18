<?php
$login = $_POST['login'];
$password = $_POST['password'];

foreach ($users as $user) {
    if ($user['login'] === $login && $user['password'] === $password) {
        echo "Ви успішно увійшли на сайт, {$user['name']}!";
        exit;
    }
}

echo "Неправильний логін або пароль!";
?>