<?php

require("db_connection.php");

if(isset($_POST["search_category"])){

    $category = $_POST["search_category"];
    $subcategory = $_POST["search_subcategory"];
    $min_size = $_POST["min_size"];
    $max_size = $_POST["max_size"];
    $minValue = $_POST["search_minValue"];
    $maxValue = $_POST["search_maxValue"];
    $productId = $_POST["search_productId"];

    if($min_size != "" and $max_size == ""){
        $size = $min_size;
        if($category != "" and $subcategory == "" and $size == "" and  $maxValue == "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' ;" ;
        }
        if($category != "" and $subcategory == "" and $size != "" and  $maxValue == "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' and size = '$size' ;" ;
        }
        if($category != "" and $subcategory == "" and $size == "" and  $maxValue != "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' and price BETWEEN '$minValue' AND '$maxValue' ;" ;
        }
        if($category != "" and $subcategory != "" and $size == "" and $maxValue == "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' and subcategory = '$subcategory' ;";
        }
        if($category != "" and $subcategory != "" and $size != "" and $maxValue == "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' and subcategory = '$subcategory' and size = '$size' ;";
        }
        if($category != "" and $subcategory != "" and $size != "" and $maxValue != "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' and subcategory = '$subcategory' and price BETWEEN '$minValue' AND '$maxValue' ;";
        }
        if($category != "" and $subcategory != "" and $size != "" and $maxValue != "" and $productId != ""){
            $sql = "SELECT * from product WHERE category = '$category' and subcategory = '$subcategory' and price BETWEEN '$minValue' AND '$maxValue' and product_id = '$productId' ;";
        }
        if($category == "" and $subcategory == "" and $size == "" and  $maxValue == "" and $productId !== ""){
            $sql = "SELECT * from product WHERE product_id = '$productId' ;";
        }
    }

    if($min_size == "" and $max_size != ""){
        $size = $max_size;
        if($category != "" and $subcategory == "" and $size == "" and  $maxValue == "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' ;" ;
        }
        if($category != "" and $subcategory == "" and $size != "" and  $maxValue == "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' and size = '$size' ;" ;
        }
        if($category != "" and $subcategory == "" and $size == "" and  $maxValue != "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' and price BETWEEN '$minValue' AND '$maxValue' ;" ;
        }
        if($category != "" and $subcategory != "" and $size == "" and $maxValue == "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' and subcategory = '$subcategory' ;";
        }
        if($category != "" and $subcategory != "" and $size != "" and $maxValue == "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' and subcategory = '$subcategory' and size = '$size' ;";
        }
        if($category != "" and $subcategory != "" and $size != "" and $maxValue != "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' and subcategory = '$subcategory' and price BETWEEN '$minValue' AND '$maxValue' ;";
        }
        if($category != "" and $subcategory != "" and $size != "" and $maxValue != "" and $productId != ""){
            $sql = "SELECT * from product WHERE category = '$category' and subcategory = '$subcategory' and price BETWEEN '$minValue' AND '$maxValue' and product_id = '$productId' ;";
        }
        if($category == "" and $subcategory == "" and $size == "" and  $maxValue == "" and $productId !== ""){
            $sql = "SELECT * from product WHERE product_id = '$productId' ;";
        }
    }

    if($min_size == "" and $max_size == ""){
        $size = "";
        if($category != "" and $subcategory == "" and $size == "" and  $maxValue == "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' ;" ;
        }
        if($category != "" and $subcategory == "" and $size != "" and  $maxValue == "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' and size = '$size' ;" ;
        }
        if($category != "" and $subcategory == "" and $size == "" and  $maxValue != "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' and price BETWEEN '$minValue' AND '$maxValue' ;" ;
        }
        if($category != "" and $subcategory != "" and $size == "" and $maxValue == "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' and subcategory = '$subcategory' ;";
        }
        if($category != "" and $subcategory != "" and $size != "" and $maxValue == "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' and subcategory = '$subcategory' and size = '$size' ;";
        }
        if($category != "" and $subcategory != "" and $size != "" and $maxValue != "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' and subcategory = '$subcategory' and price BETWEEN '$minValue' AND '$maxValue' ;";
        }
        if($category != "" and $subcategory != "" and $size != "" and $maxValue != "" and $productId != ""){
            $sql = "SELECT * from product WHERE category = '$category' and subcategory = '$subcategory' and price BETWEEN '$minValue' AND '$maxValue' and product_id = '$productId' ;";
        }
        if($category == "" and $subcategory == "" and $size == "" and  $maxValue == "" and $productId !== ""){
            $sql = "SELECT * from product WHERE product_id = '$productId' ;";
        }
    }

    if($min_size != "" and $max_size != ""){
        if($category != "" and $subcategory == "" and  $maxValue == "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' and size BETWEEN '$min_size' AND '$max_size';" ;
        }
        if($category == "" and $subcategory != "" and $maxValue == "" and $productId == ""){
            $sql = "SELECT * from product WHERE subcategory = '$subcategory' and size BETWEEN '$min_size' AND '$max_size';" ;
        }
        if($category != "" and $subcategory == "" and $maxValue != "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' and price BETWEEN '$minValue' AND '$maxValue' and and size BETWEEN '$min_size' AND '$max_size' ;" ;
        }
        if($category != "" and $subcategory != "" and  $maxValue == "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' and subcategory = '$subcategory' and size BETWEEN '$min_size' AND '$max_size';";
        }
        if($category != "" and $subcategory != "" and $maxValue == "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' and subcategory = '$subcategory' and size BETWEEN '$min_size' AND '$max_size';";
        }
        if($category != "" and $subcategory != "" and $maxValue != "" and $productId == ""){
            $sql = "SELECT * from product WHERE category = '$category' and subcategory = '$subcategory' and price BETWEEN '$minValue' AND '$maxValue' and size BETWEEN '$min_size' AND '$max_size' ;";
        }
        if($category != "" and $subcategory != "" and $maxValue != "" and $productId != ""){
            $sql = "SELECT * from product WHERE category = '$category' and subcategory = '$subcategory' and price BETWEEN '$minValue' AND '$maxValue' and product_id = '$productId' and size BETWEEN '$min_size' AND '$max_size' ;";
        }
        if($category == "" and $subcategory == "" and $maxValue == "" and $productId !== ""){
            $sql = "SELECT * from product WHERE product_id = '$productId' and size BETWEEN '$min_size' AND '$max_size' ;";
        }
        if($category == "" and $subcategory == "" and $maxValue == "" and $productId == "" ){
            $sql = "SELECT * from product where size BETWEEN '$min_size' AND '$max_size';";
        }
        if($category == "" and $subcategory == "" and $productId == "" and $maxValue != ""){
            $sql = "SELECT * from product where size BETWEEN '$min_size' AND '$max_size' and price BETWEEN '$minValue' AND '$maxValue';";
        }
    }

    // echo $sql;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) { 
            if ($row["count"] < 1) {
                continue;
            }
            echo '<div class="col-lg-3 col-md-6 mb-4 mb-lg-0 mt-2">';
                echo '<div class="card rounded shadow-sm border-0">' ;  
                    echo '<div class="card-body p-4">';      
                        echo '<img src="' . $row["frontImage_src"] . '" alt="" class="img-fluid d-block mx-auto mb-3" />' ;
                        echo '<h5>'.$row["product_name"].'</h5>'  ;        
                        echo '<p class="text-muted font-italic h6">';
                        echo $row["category"] . " - " . $row["subcategory"] . " - " . $row["size"];
                        echo '</p>';
                        echo '<ul class="list-inline small">
                              <li class="list-inline-item m-0">
                              <strong>Price</strong>'. " ₹" . $row["price"] . "  " .'</li>';
                        echo '<li class="list-inline-item m-0">'. '&nbsp'.'</li>';
                        echo '<li class="list-inline-item m-0">
                              <strong>Count</strong>'. " " . $row["count"] . "  " .'</li>';
                        echo '</ul>';  
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        }
    }


}

?>