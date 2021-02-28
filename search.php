<?php

require("db_connection.php");

if(isset($_POST["search_category"])){
    
    $sql = "SELECT * from category";
    $query = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($query)){
        echo "<option>".$row['category_name']."</option>";
    }

}

if(isset($_POST["search_subcategory"])){
    $sql = "SELECT * from subcategory";
    $query = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($query)){
        echo "<option>".$row['subcategory_name']."</option>";
    }
}

if(isset($_POST["search_size"])){
    $sql = "SELECT * from size";
    $query = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($query)){
        echo "<option>".$row['size_name']."</option>";
    }
}


?>