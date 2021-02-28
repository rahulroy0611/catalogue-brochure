<?php

require("db_connection.php");

$id = $_REQUEST["id"];
$query = "DELETE FROM subcategory where id = '$id'";
$result = mysqli_query($conn, $query);
header("location: add_subcategory.php");

?>