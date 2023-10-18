<?php
$cookie_name = "name";
$cookie_value = "Юлия";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie з ім'ям '" . $cookie_name . "' має значення: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie з ім'ям '" . $cookie_name . "' не встановлено.";
}
?>