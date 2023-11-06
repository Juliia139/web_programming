<!DOCTYPE html>
<html>
<head>
  <title>Список книг</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h1>Список книг</h1>
  <table>
    <?php
    $json = '{"author": "Надежда Кузьмина", "title": "Наследница драконов.Тайна", "year": 2013, "pages": 350}';
    $data = json_decode($json);

    // Проверка наличия данных
    if ($data) {
        echo '<table>';
        echo '<tr><th>Автор</th><th>Назва</th><th>Рік</th><th>Кількість сторінок</th></tr>';

        // Вывод элементов таблицы
        echo '<tr>';
        echo '<td>' . $data->author . '</td>';
        echo '<td>' . $data->title . '</td>';
        echo '<td>' . $data->year . '</td>';
        echo '<td>' . $data->pages . '</td>';
        echo '</tr>';

        echo '</table>';
    } else {
        echo 'Ошибка при разборе JSON';
    }
    ?>
  </table>
</body>
</html>