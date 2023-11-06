<?php
// Получение данных из формы
$author = $_POST['author'];
$title = $_POST['title'];
$year = $_POST['year'];
$pages = $_POST['pages'];

// Загрузка существующей JSON-строки из файла
$file = 'books.json';
$bookData = file_get_contents($file);
$books = json_decode($bookData, true);

// Создание нового элемента книги и добавление его в массив JSON
$newBook = array(
    'author' => $author,
    'title' => $title,
    'year' => $year,
    'pages' => $pages
);
$books[] = $newBook;

// Сохранение изменений в файле books.json
$encodedData = json_encode($books, JSON_PRETTY_PRINT);
file_put_contents($file, $encodedData);

// Перенаправление обратно на форму
header('Location: index.php');
exit;
?>