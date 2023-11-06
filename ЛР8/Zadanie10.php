<?php
// Отримання змісту файла auto.json
$json = file_get_contents('auto.json');

// Розпакування JSON-даних у масив
$data = json_decode($json, true);

// Перевірка наявності даних
if ($data) {
    echo '<ul>';
    
    // Виведення елементів списку
    foreach ($data as $car) {
        echo '<li>';
        echo $car['model'] . '<br>';
        echo '</li>';
    }
    
    echo '</ul>';
} else {
    echo 'Помилка при читанні файлу auto.json';
}
?>