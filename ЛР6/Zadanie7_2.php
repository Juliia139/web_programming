<?php
$cookie_name = "name";
unset($_COOKIE[$cookie_name]);
setcookie($cookie_name, '', time() - 3600, '/');
echo "Cookie з ім'ям '" . $cookie_name . "' видалено.";
?>