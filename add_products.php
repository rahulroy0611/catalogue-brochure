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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/index_page.js"></script>
    <script>
      function readFrontImage(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          document.getElementById("front_image").style.visibility = "visible";
          reader.onload = function (e) {
            $("#front_image")
              .attr("src", e.target.result)
              .width(150)
              .height(200);
          };

          reader.readAsDataURL(input.files[0]);
        }
      }
      function readBackImage(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          document.getElementById("back_image").style.visibility = "visible";
          reader.onload = function (e) {
            $("#back_image")
              .attr("src", e.target.result)
              .width(150)
              .height(200);
          };

          reader.readAsDataURL(input.files[0]);
        }
      }
    </script>
  </head>
  <body class="bg-light">
    
  <?php include("navbar.php"); ?>
    <section>
      <div class="container mt-3">
        <form action="add_products.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="row">
              <div class="col-sm-3 mb-2">
                <label for="">Product Name</label>
                <input type="text" class="form-control" id="product_name" name="product_name" />
              </div>
              <div class="col-sm-2 mb-2">
                <label for="">Product Id</label>
                <input type="text" class="form-control" id="product_id" name="product_id"/>
              </div>
              <div class="col-sm-3 mb-2">
                <label for="">Company name</label>
                <input type="text" class="form-control" id="company_name" name="company_name"/>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3 mb-2">
                <label for="">Category</label>
                <input type="text" class="form-control" placeholder="type category" name="search_category" id="search_category" list="category_result" />
                <datalist id="category_result"> </datalist>
              </div>
              <div class="col-sm-3 mb-2">
                <label for="">Subcategory</label>
                <input type="text" class="form-control" placeholder="type subcategory" name="search_subcategory" id="search_subcategory" list="subcategory_result" />
                <datalist id="subcategory_result"> </datalist>
              </div>
              <div class="col-sm-2 mb-2">
                <label for="">Size</label>
                <input type="text" class="form-control" placeholder="type size" name="search_size" id="search_size" list="size_result" />
                <datalist id="size_result"> </datalist>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-2 mb-2">
                <label for="">Price</label>
                <input type="text" class="form-control" id="price" name="price" />
              </div>
              <div class="col-sm-2 mb-2">
                <label for="">Count</label>
                <input type="text" class="form-control" id="count" name="count" />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 mb-2">
                <label for="">Front Pic</label>
                <input
                  type="file"
                  name="front_fileToUpload"
                  id="front_fileToUpload"
                  class="form-control-file"
                  accept="image/gif, image/jpeg, image/png"
                  onchange="readFrontImage(this);"
                />
              </div>
              <div class="col-sm-4 mb-2">
                <label for="">Back Pic</label>
                <input
                  type="file"
                  name="back_fileToUpload"
                  id="back_fileToUpload"
                  class="form-control-file"
                  accept="image/gif, image/jpeg, image/png"
                  onchange="readBackImage(this);"
                />
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 mb-2">
                <img
                  id="front_image"
                  style="visibility: hidden"
                  src="#"
                  alt="Front image"
                />
              </div>
              <div class="col-sm-4 mb-2">
                <img
                  id="back_image"
                  src="#"
                  style="visibility: hidden"
                  alt="Back image"
                />
              </div>
            </div>
            <div class="row mx-2">
              <button
                type="submit"
                id="add_product"
                name="add_product"
                class="btn btn-primary btn-lg btn-block col-sm-8"
              >
                Add in List
              </button>
            </div>
          </div>
        </form>
      </div>
    </section>
  </body>
</html>


<?php

require("db_connection.php");

if(isset($_POST["add_product"])){
  $product_name = $_POST["product_name"];
  $product_id = $_POST["product_id"];
  $company_name = $_POST["company_name"];
  $category = $_POST["search_category"];
  $subcategory = $_POST["search_subcategory"];
  $size = $_POST["search_size"];
  $price = $_POST["price"];
  $count = $_POST["count"];
  $target_dir = "uploads/";

  
  if($size != ""){
    switch($size){
      case "S":
        $size = 401;
        break;
      case "M":
        $size = 402;
        break;
      case "L":
        $size = 403;
        break;
      case "XL":
        $size = 404;
        break;
      case "XXL":
        $size = 405;
        break;
      case "XXXL":
        $size = 406;
        break;
      case "XXXXL":
        $size = 407;
        break;
      case "XXXXXL":
        $size = 408;
        break;  
    }
  }



  $frontImage_fileName = $target_dir . $product_id .  "_". "frontImage" . "_" .basename($_FILES["front_fileToUpload"]["name"]);
  $backImage_fileName = $target_dir . $product_id . "_" . "backImage" . "_" . basename($_FILES["back_fileToUpload"]["name"]);

  $uploadOk = 1;
  $front_imageFileType = strtolower(pathinfo($frontImage_fileName,PATHINFO_EXTENSION));
  $back_imageFileType = strtolower(pathinfo($backImage_fileName,PATHINFO_EXTENSION));

  $new_frontImage_fileName = $target_dir . $product_id . "_" . "frontImage." . $front_imageFileType;
  $new_backImage_fileName = $target_dir . $product_id . "_" . "backImage." . $back_imageFileType;


  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  } else {
    if (move_uploaded_file($_FILES["front_fileToUpload"]["tmp_name"], $new_frontImage_fileName)) {
      // echo "The file ". htmlspecialchars( basename( $_FILES["front_fileToUpload"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
      $uploadOk = 0;
    }
    if (move_uploaded_file($_FILES["back_fileToUpload"]["tmp_name"], $new_backImage_fileName)) {
      // echo "The file ". htmlspecialchars( basename( $_FILES["back_fileToUpload"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
      $uploadOk = 0;
    }
  }

  if($uploadOk != 0){
    $sql = "INSERT INTO 
            product (id, product_name, product_id, company_name, category, subcategory, size, price, count, frontImage_src, backImage_src) 
            VALUES 
            (NULL, '$product_name', '$product_id', '$company_name', '$category', '$subcategory', '$size', '$price', '$count', '$new_frontImage_fileName', '$new_backImage_fileName' )";
    if(mysqli_query($conn, $sql)){
      echo "<script>alert('Product Added');</script>";
    } else {
      echo mysqli_error($conn);
    }
  }

}


?>
