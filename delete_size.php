<?php

require("db_connection.php");

$id = $_REQUEST["id"];
$query = "DELETE FROM size where id = '$id'";
$result = mysqli_query($conn, $query);
header("location: add_size.php");

?>