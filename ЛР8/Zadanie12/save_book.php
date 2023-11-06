<?php
// Получение данных из формы
$author = $_POST['author'];
$title = $_POST['title'];
$year = $_POST['year'];
$pages = $_POST['pages'];

// Загрузка существующего XML-файла
$file = 'book.xml';
$xml = simplexml_load_file($file);

// Создание нового элемента книги и добавление его в XML-структуру
$book = $xml->addChild('book');
$book->addChild('author', $author);
$book->addChild('title', $title);
$book->addChild('year', $year);
$book->addChild('pages', $pages);

// Сохранение изменений в файле book.xml
$xml->asXML($file);

// Перенаправление обратно на форму
header('Location: index.php');
exit;
?>