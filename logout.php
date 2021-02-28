<?php

    $cookie_name = "authorization";
    $cookie_value = "denied";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    header("location: login.php");

?>