<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<div>
    <h3>Вхід на сайт</h3>
<?php
// Файл з даними про користувачів
$users = [
    [
        'login' => 'ivan_sokolov',
        'password' => 'password1',
        'name' => 'Іван'
    ],
    [
        'login' => 'marinka123',
        'password' => 'password2',
        'name' => 'Марина'
    ],
    [
        'login' => 'oleksandr1980',
        'password' => 'password3',
        'name' => 'Олександр'
    ]
];

// Файл з формою входу
include('login-form.php');

// Файл з обробником форми
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('login-handler.php');
}
?>
</div>

</body>
</html>