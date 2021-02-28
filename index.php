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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/index_page.js"></script>
  <script src="js/search_magic.js"></script>
</head>
<body class="bg-light">
  <?php include("navbar.php"); ?>

  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2 pt-2 pb-3">
          <!-- <form action=""> -->
            <div class="form-group">
              <label for="">Category</label>
              <input type="text" class="form-control" placeholder="type category" name="search_category" id="search_category" list="category_result" />
              <datalist id="category_result"> </datalist>
            </div>
            <div class="form-group">
              <label for="">Subcategory</label>
              <input type="text" class="form-control" placeholder="type subcategory" id="search_subcategory" list="subcategory_result"  />
              <datalist id="subcategory_result"> </datalist>
            </div>
            <div class="form-group">
              <label for="">Min Size:</label>
              <input type="text" class="form-control" placeholder="type min size" name="min_size" id="min_size" list="size_result1" style="text-transform:uppercase"/>
              <datalist id="size_result1"> </datalist>
              <label for="">Max Size:</label>
              <input type="text" class="form-control" placeholder="type max size" name="max_size" id="max_size" list="size_result2" style="text-transform:uppercase"/>
              <datalist id="size_result2"> </datalist>
            </div>
            <div class="form-group">
              <label for="sel1">Min:</label>
              <input type="text" class="form-control" value="1" name="min_value" id="min_value">
              <label for="sel1">Max:</label>
              <input type="text" class="form-control" name="max_value" id="max_value" >
            </div>
            <div class="form-group">
              <label for="">Product ID</label>
              <input type="text" name="product_id" id="product_id" class="form-control">
            </div>
            <button id="search_magic" name="search_magic" class="btn btn-danger btn-lg btn-block">Search</button>
          <!-- </form> -->
        </div>
        <div class="col-sm-10">
          <div class="container-fluid">
            <div class="row mt-2 mb-3" id="search_data_display">
              <!-- data shows here start -->
              <!-- data shows here end -->
            </div>
          </div>
        </div>
      </div>
  </section>
</body>

</html>