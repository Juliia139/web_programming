<?php
// Запускаем сессию
session_start();
// Удаляем все переменные сессии
session_unset();
// Уничтожаем сессию
session_destroy();
// Перенаправляем пользователя на главную страницу
header("Location: index.php");
?>