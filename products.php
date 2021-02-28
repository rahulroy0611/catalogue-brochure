<?php

include("authorization_check.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="js/script.js"></script>
</head>

<body class="bg-light">

  <?php include("navbar.php"); ?>
  <section>
    <div class="container mt-3">
      <div class="row">
        <div class="col-sm-2">
          <a href="add_products.php">
            <button type="button" class="btn btn-primary">
              Add Product
            </button></a>
        </div>
        <div class="col-sm-10"></div>
        <div class="row mt-3 pb-5 mb-4">

          <?php
          require("db_connection.php");
          $sel_query = "SELECT * FROM product ORDER BY id desc;";
          $result = mysqli_query($conn, $sel_query);
          $counter = 0;
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
              <?php $counter = $counter + 1; ?>
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 mt-2">
                <div class="card rounded shadow-sm border-0">
                  <div class="card-body p-4">
                    <img src="<?php echo $row["frontImage_src"]; ?>" alt="" data-toggle="modal" data-target="#exampleModal<?php echo $counter; ?>" class="img-fluid d-block mx-auto mb-3" />
                    <!-- modal1 -->
                    <div class="modal fade" id="exampleModal<?php echo $counter; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div id="carouselExampleControls<?php echo $counter; ?>" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img src="<?php echo $row["frontImage_src"]; ?>" alt="Front Image" class="img-fluid d-block mx-auto mb-3">
                                </div>
                                <div class="carousel-item">
                                  <img src="<?php echo $row["backImage_src"]; ?>" alt="Front Image" class="img-fluid d-block mx-auto mb-3">
                                </div>
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleControls<?php echo $counter; ?>" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleControls<?php echo $counter; ?>" role="button" data-slide="next">
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
                    </div>
                    <!-- modal1 -->
                    <h5><?php echo $row["product_name"] . " - " . $row["product_id"]; ?> </h5>
                    <p class="text-muted font-italic h6">
                      <?php echo $row["category"] . " - " . $row["subcategory"]; ?>
                    </p>
                    <p class="text-muted font-italic h6">
                      <?php
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
                      if ($row['size'] != 401 and $row['size'] != 402 and $row['size'] != 403 and $row['size'] != 404 and $row['size'] != 405 and $row['size'] != 406 and $row['size'] != 407 and $row['size'] != 408) {
                        echo $row['size'];
                      }
                      ?>
                    </p>
                    <ul class="list-inline small">
                      <li class="list-inline-item m-0">
                        <strong>Price</strong><?php echo "  ₹" . $row["price"]; ?>
                      </li>
                      <li class="list-inline-item m-0">
                        <strong>Count</strong><?php echo " " . $row["count"]; ?>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success"></i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success"></i>
                      </li>
                      <li class="list-inline-item m-0">
                        <?php
                        if ($row["count"] >= 1) {
                          echo "<i class='fa fa-star-o text-success'>";
                          echo "In Stock";
                          echo "</i>";
                        } else {
                          echo "<i class='fa fa-star-o text-danger'>";
                          echo "Out of stock";
                          echo "</i>";
                        }
                        ?>
                      </li>
                    </ul>
                    <a class="btn btn-primary btn-sm" role="button" href="edit_product.php?id=<?php echo $row["id"]; ?>">Edit</a>
                  </div>
                </div>
              </div>
            <?php  } ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>