<?php

require("db_connection.php");

if(isset($_POST["default_display"])){
    $sel_query = "SELECT * FROM product ORDER BY id desc;";
    $result = mysqli_query($conn, $sel_query);
    $counter = 0;
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $counter = $counter + 1; 
            if ($row["count"] < 1) {
                continue;
            }
            echo '<div class="col-lg-3 col-md-6 mb-4 mb-lg-0 mt-2">';
                echo '<div class="card rounded shadow-sm border-0">' ;  
                    echo '<div class="card-body p-4">';      
                        echo '<img src="' . $row["frontImage_src"] . '" alt="" class="img-fluid d-block mx-auto mb-3"  data-toggle="modal" data-target="#exampleModal'.$counter.'"/>' ;
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
                        echo $row["category"] . " - " . $row["subcategory"] ;
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
