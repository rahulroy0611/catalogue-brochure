<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "catalogue_shop";

$conn = mysqli_connect($hostname, $username, $password, $database_name);

if(mysqli_connect_errno()){
    echo "Connection Error: ". mysqli_connect_error();
    exit();
}

?>