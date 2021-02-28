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

    if($min_size == "s" or $min_size == "m" or $min_size == "l" or $min_size == "xl" or $min_size == "xxxl" or $min_size == "xxxxl" or $min_size == "xxxxxl"){
      $min_size = strtoupper($min_size);
    }
    if($max_size == "s" or $max_size == "m" or $max_size == "l" or $max_size == "xl" or $max_size == "xxxl" or $max_size == "xxxxl" or $max_size == "xxxxxl"){
      $max_size = strtoupper($max_size);
    }

    if($min_size != ""){
        switch($min_size){
          case "S":
            $min_size = 401;
            break;
          case "M":
            $min_size = 402;
            break;
          case "L":
            $min_size = 403;
            break;
          case "XL":
            $min_size = 404;
            break;
          case "XXL":
            $min_size = 405;
            break;
          case "XXXL":
            $min_size = 406;
            break;
          case "XXXXL":
            $min_size = 407;
            break;
          case "XXXXXL":
            $min_size = 408;
            break;  
        }
    }

    if($max_size != ""){
        switch($max_size){
          case "S":
            $max_size = 401;
            break;
          case "M":
            $max_size = 402;
            break;
          case "L":
            $max_size = 403;
            break;
          case "XL":
            $max_size = 404;
            break;
          case "XXL":
            $max_size = 405;
            break;
          case "XXXL":
            $max_size = 406;
            break;
          case "XXXXL":
            $max_size = 407;
            break;
          case "XXXXXL":
            $max_size = 408;
            break;  
        }
      }


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
        $counter = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $counter = $counter + 1; 
            if ($row["count"] < 1) {
                continue;
            }
            echo '<div class="col-lg-3 col-md-6 mb-4 mb-lg-0 mt-2">';
                echo '<div class="card rounded shadow-sm border-0">' ;  
                    echo '<div class="card-body p-4">';      
                        echo '<img src="' . $row["frontImage_src"] . '" alt="" class="img-fluid d-block mx-auto mb-3"  data-toggle="modal" data-target="#exampleModal'.$counter.'" />' ;
                        echo '
                        <div class="modal fade" id="exampleModal'.$counter.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div id="carouselExampleControls'.$counter.'" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="'.$row["frontImage_src"].'" alt="Front Image" class="img-fluid d-block mx-auto mb-3">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="'.$row["backImage_src"].'" alt="Front Image" class="img-fluid d-block mx-auto mb-3">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls'.$counter.'" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls'.$counter.'" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                          </div>
                        </div>
                      </div>';
                        echo '<h5>'.$row["product_name"].' - '. $row["product_id"] .'</h5>'  ;        
                        echo '<p class="text-muted font-italic h6">';
                        echo $row["category"] . " - " . $row["subcategory"];
                        echo "<br>";
                        echo "<b>Size - </b>";
                        if ($row['size'] == 401) {
                            echo "S";
                          }
                          if ($row['size'] == 402) {
                            echo "M";
                          }
                          if ($row['size'] == 403) {
                            echo "L";
                          }
                          if ($row['size'] == 404) {
                            echo "XL";
                          }
                          if ($row['size'] == 405) {
                            echo "XXL";
                          }
                          if ($row['size'] == 406) {
                            echo "XXXL";
                          }
                          if ($row['size'] == 407) {
                            echo "XXXXL";
                          }
                          if ($row['size'] == 408) {
                            echo "XXXXXL";
                          }
                          if($row['size'] != 401 and $row['size'] != 402 and $row['size'] != 403 and $row['size'] != 404 and $row['size'] != 405 and $row['size'] != 406 and $row['size'] != 407 and $row['size'] != 408){
                            echo $row['size'];
                          }
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