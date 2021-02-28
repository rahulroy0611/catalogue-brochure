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
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/record.js"></script>
    <script>
    </script>
  </head>
  <body class="bg-light">
  <?php include("navbar.php"); ?>

  <h1 class="text-center">Sell Record Page</h1>

    <section>
      <div class="container mt-3">
        <form action="sell_record.php" method="POST">
          <div class="row form-group">
            <div class="col-sm-3">
            <label for="">Product Id 1</label>
            <input type="text" class="form-control" name="v_product_id1" id="v_product_id1" list="product_list1">
            <datalist id="product_list1" >
            </datalist>
            </div>
            <div class="col-sm-3">
            <label for="">Count</label>
            <input type="number" class="form-control" name="v_product_count1" id="c_product_count1">
            </div>
          </div>
          <div class="row form-group">
          <div class="col-sm-3">
          <label for="">Product Id 2</label>
          <input type="text" class="form-control" name="v_product_id2" id="v_product_id2" list="product_list2">
          <datalist id="product_list2" >
          </datalist>
          </div>
          <div class="col-sm-3">
          <label for="">Count</label>
          <input type="number" class="form-control" name="v_product_count2" id="c_product_count2">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-3">
          <label for="">Product Id 3</label>
          <input type="text" class="form-control" name="v_product_id3" id="v_product_id3" list="product_list3">
          <datalist id="product_list3" >
          </datalist>
          </div>
          <div class="col-sm-3">
          <label for="">Count</label>
          <input type="number" class="form-control" name="v_product_count3" id="c_product_count3">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-3">
          <label for="">Product Id 4</label>
          <input type="text" class="form-control" name="v_product_id4" id="v_product_id4" list="product_list4">
          <datalist id="product_list4" >
          </datalist>
          </div>
          <div class="col-sm-3">
          <label for="">Count</label>
          <input type="number" class="form-control" name="v_product_count4" id="c_product_count4">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-3">
          <label for="">Product Id 5</label>
          <input type="text" class="form-control" name="v_product_id5" id="v_product_id5" list="product_list5">
          <datalist id="product_list5" >
          </datalist>
          </div>
          <div class="col-sm-3">
          <label for="">Count</label>
          <input type="number" class="form-control" name="v_product_count5" id="c_product_count5">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-3">
          <label for="">Product Id 6</label>
          <input type="text" class="form-control" name="v_product_id6" id="v_product_id6" list="product_list6">
          <datalist id="product_list6" >
          </datalist>
          </div>
          <div class="col-sm-3">
          <label for="">Count</label>
          <input type="number" class="form-control" name="v_product_count6" id="c_product_count6">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-3">
          <label for="">Product Id 7</label>
          <input type="text" class="form-control" name="v_product_id7" id="v_product_id7" list="product_list7">
          <datalist id="product_list7" >
          </datalist>
          </div>
          <div class="col-sm-3">
          <label for="">Count</label>
          <input type="number" class="form-control" name="v_product_count7" id="c_product_count7">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-3">
          <label for="">Product Id 8</label>
          <input type="text" class="form-control" name="v_product_id8" id="v_product_id8" list="product_list8">
          <datalist id="product_list8" >
          </datalist>
          </div>
          <div class="col-sm-3">
          <label for="">Count</label>
          <input type="number" class="form-control" name="v_product_count8" id="c_product_count8">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-3">
          <label for="">Product Id 9</label>
          <input type="text" class="form-control" name="v_product_id9" id="v_product_id9" list="product_list9">
          <datalist id="product_list9" >
          </datalist>
          </div>
          <div class="col-sm-3">
          <label for="">Count</label>
          <input type="number" class="form-control" name="v_product_count9" id="c_product_count9">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-3">
          <label for="">Product Id 10</label>
          <input type="text" class="form-control" name="v_product_id10" id="v_product_id10" list="product_list10">
          <datalist id="product_list10" >
          </datalist>
          </div>
          <div class="col-sm-3">
          <label for="">Count</label>
          <input type="number" class="form-control" name="v_product_count10" id="c_product_count10">
          </div>
        </div>
        
          <div class="row">
            <button type="submit" id="sell_record_submit" name="sell_record_submit" class="btn btn-primary btn-lg btn-block col-sm-6 mx-4">Submit</button>
          </div>
        </form>
      </div>
    </section>
  </body>
</html>


<?php

require("db_connection.php");

if(isset($_POST["sell_record_submit"])){

  for ($x = 1; $x <= 10; $x++ ){

    if($_POST['v_product_id'.$x] != "" and $_POST['v_product_count'.$x] != ""){
      $product_id = $_POST["v_product_id" . $x];
      $product_count = $_POST["v_product_count" . $x];

      $sql = "SELECT * from product WHERE product_id = '$product_id' ";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);

      $old_count = $row["count"];
      if($old_count > 0 ){
        $new_product_count = $old_count - $product_count;
        $sql = "UPDATE product SET count = '$new_product_count' WHERE product_id = '$product_id' ";
        if(mysqli_query($conn, $sql)){
          echo "<script>alert('Record update successfully')</script>";
        } else {
          echo "Error updating record (".$product_id."): " . mysqli_error($conn);
        }
      }
    } else {
        continue;
    }
  }
}
mysqli_close($conn);

?>