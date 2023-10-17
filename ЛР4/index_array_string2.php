<!DOCTYPE html>
<html>
<head>
<title>Test</title>
<meta charset="utf-8">
</head>
<body>
    <!-- Програма сортування масиву -->
    <h1>Тестова сторінка. ЛР4</h1>
    <h2>Баготовимірні масиви</h2>

    function print_table($array) {
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Ім'я</th>";
    echo "<th>Прізвище</th>";
    echo "<th>Вік</th>";
    echo "<th>Студент</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    foreach ($array as $person) {
        echo "<tr>";
        echo "<td>" . $person['name'] . "</td>";
        echo "<td>" . $person['surname'] . "</td>";
        echo "<td>" . $person['age'] . "</td>";
        echo "<td>" . ($person['student'] ? 'Так' : 'Ні') . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
}
    <time>
        <?php
        echo date("Y-m-d H:i:s"); 
        ?> 
    </time> 
</body>
</html>