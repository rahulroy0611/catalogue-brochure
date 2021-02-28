<?php

require("db_connection.php");

if(isset($_POST["v_product_id"])){

    $data = $_POST['v_product_id'];

    $sql = "SELECT product_id FROM product WHERE product_id LIKE '%$data%' ";

    $query = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($query)){
        echo "<option>".$row['product_id']."</option>";
    }

}


?>