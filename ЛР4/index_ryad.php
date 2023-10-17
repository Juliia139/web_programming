<!DOCTYPE html>
<html>
<head> 
<title>Test</title>
<meta charset="utf-8">
</head>
<body>
    <h1>Тестова сторінка. ЛР4</h1>
    <h2>Виведення непарних чисел в рядок for</h2>
    <?php
    for($i=1; $i<=100; $i++){
        if ($i%2!=0) echo $i." ";
    }
    ?>
    <h2>Виведення непарних чисел в рядок while</h2>
    <?php
    $i=1;
    while($i<=100) { 
        if ($i%2!==0) echo $i." ";
        $i++;
        } 
        ?>
    <time>
        <?php
        echo date("Y-m-d H:i:s");
        ?> 
    </time>
</body>
</html>