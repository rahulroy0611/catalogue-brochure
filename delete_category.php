<?php

require("db_connection.php");

$id = $_REQUEST["id"];
$query = "DELETE FROM category where id = '$id'";
$result = mysqli_query($conn, $query);
header("location: add_category.php");

?>