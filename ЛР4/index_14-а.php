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
        $row = array();
        for ($j = 0; $j < count($matrix1[$i]); $j++) {
            $row[] = $matrix1[$i][$j] + $matrix2[$i][$j];
        }
        $result[] = $row;
    }
    return $result;
}

$matrix1 = array();
$matrix2 = array();

for ($i = 0; $i < 10; $i++) {
    $row1 = array();
    $row2 = array();
    for ($j = 0; $j < 10; $j++) {
        $row1[] = rand(0, 100);
        $row2[] = rand(0, 100);
    }
    $matrix1[] = $row1;
    $matrix2[] = $row2;
}

$result_matrix = add_matrices($matrix1, $matrix2);

echo "Matrix 1:\n";
print_r($matrix1);
echo "\nMatrix 2:\n";
print_r($matrix2);
echo "\nResult Matrix:\n";
print_r($result_matrix);
?>
    <time>
        <?php
        echo date("Y-m-d H:i:s"); 
        ?> 
    </time> 
</body>
</html>