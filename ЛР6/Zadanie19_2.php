<?php
$cookie_name = "visits";
$cookie_value = 0;
if(isset($_COOKIE[$cookie_name])) {
    $cookie_value = $_COOKIE[$cookie_name];
}
$cookie_value++;
setcookie($cookie_name, $cookie_value, time() + 3600, "/");
?>
<!DOCTYPE html>
<html>
<body>
<?php
if($cookie_value == 1) {
    echo "Ласкаво просимо!";
} else {
    echo "Ви зайшли на сторінку $cookie_value разів<br>";
    if(isset($_COOKIE['last_visit'])) {
        echo "Останнє відвідування: ".$_COOKIE['last_visit'];
    }
}
setcookie('last_visit', date('d/m/Y H:i:s'), time() + 3600, "/");
?>
</body>
</html>