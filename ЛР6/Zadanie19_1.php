<?php
// Створення масиву даних для зберігання паролів
$passwords = array(
    "user1" => "password1",
    "user2" => "password2",
    "user3" => "password3"
);

// Збереження значень паролів в cookie
setcookie("passwords", serialize($passwords), time()+3600);

// Виведення значень паролів в html-код
echo '<form>';
foreach ($passwords as $key => $value) {
    echo '<label for="'.$key.'">'.$key.': </label>';
    echo '<input type="text" name="'.$key.'" value="'.$value.'"><br>';
}
echo '</form>';
?>