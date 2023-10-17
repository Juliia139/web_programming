<!DOCTYPE html>
<html>
<head>
<title>Test</title>
<meta charset="utf-8">
</head>
<body>
    <!-- Програма сортування масиву -->
    <h1>Тестова сторінка. ЛР4</h1>
    <h2>Завдання 14</h2>
<?php
function add_matrices($matrix1, $matrix2) {
    $result = array();
    for ($i = 0; $i < count($matrix1); $i++) {
        for ($j = 0; $j < count($matrix1[$i]); $j++) {
            $result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
        }
    }
    return $result;
}

function subtract_matrices($matrix1, $matrix2) {
    $result = array();
    for ($i = 0; $i < count($matrix1); $i++) {
        for ($j = 0; $j < count($matrix1[$i]); $j++) {
            $result[$i][$j] = $matrix1[$i][$j] - $matrix2[$i][$j];
        }
    }
    return $result;
}

$matrix1 = array();
$matrix2 = array();

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $matrix1[$i][$j] = rand(0, 100);
        $matrix2[$i][$j] = rand(0, 100);
    }
}

echo "<h3>Matrix 1:</h3>";
echo "<table border='1'>";
for ($i = 0; $i < count($matrix1); $i++) {
    echo "<tr>";
    for ($j = 0; $j < count($matrix1[$i]); $j++) {
        echo "<td>" . $matrix1[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<h3>Matrix 2:</h3>";
echo "<table border='1'>";
for ($i = 0; $i < count($matrix2); $i++) {
    echo "<tr>";
    for ($j = 0; $j < count($matrix2[$i]); $j++) {
        echo "<td>" . $matrix2[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

$sum_matrix = add_matrices($matrix1, $matrix2);
$difference_matrix = subtract_matrices($matrix1, $matrix2);

echo "<h3>Sum of matrices:</h3>";
echo "<table border='1'>";
for ($i = 0; $i < count($sum_matrix); $i++) {
    echo "<tr>";
    for ($j = 0; $j < count($sum_matrix[$i]); $j++) {
        echo "<td>" . $sum_matrix[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<h3>Difference of matrices:</h3>";
echo "<table border='1'>";
for ($i = 0; $i < count($difference_matrix); $i++) {
    echo "<tr>";
    for ($j = 0; $j < count($difference_matrix[$i]); $j++) {
        echo "<td>" . $difference_matrix[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
    <time>
        <?php
        echo date("Y-m-d H:i:s"); 
        ?> 
    </time> 
</body>
</html>