<?php
$visits = 1;
if(isset($_COOKIE['visits'])) {
    $visits = $_COOKIE['visits'] + 1;
}
setcookie('visits', $visits, time() + (86400 * 30), "/");
echo "Кількість відвідувань сторінки: ".$visits;
?>