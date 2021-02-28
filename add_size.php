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
  </head>
  <body class="bg-light">
  <?php include("navbar.php"); ?>

    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-2"></div>
          <div class="col-sm-2">
            <div class="container mt-3">
              <form action="add_size.php" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Size Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="input_size"
                    placeholder="Enter size"
                    name="input_size"
                    oninput="this.value = this.value.toUpperCase()"
                    autofocus
                  />
                </div>
                <button type="submit" id="add_size" name="add_size" class="btn btn-primary">Add</button>
                <button class="btn btn-primary" onclick="window.location.reload();">Refresh</button>
              </form>
              
            </div>
          </div>
          <div class="col-sm-2">
            <div class="container mt-3">
              <table class="table">
                <thead class="thread-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    require("db_connection.php");
                    $count=1;
                    $sel_query="SELECT * FROM size ORDER BY id desc;";
                    $result = mysqli_query($conn,$sel_query);
                    while($row = mysqli_fetch_assoc($result)) { ?>
                    <tr><td><?php echo $count; ?></td>
                    <td><?php echo $row["size_name"]; ?></td>
                    <td>
                    <a class="btn btn-primary btn-sm" role="button" href="delete_size.php?id=<?php echo $row["id"]; ?>">Delete</a>
                    </td>
                    </tr>
                    <?php $count++; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="col-sm-2"></div>
        <div class="col-sm-2"></div>
      </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


<?php

require("db_connection.php");

if(isset($_POST["add_size"])) {
  $input_size = $_POST["input_size"];
  $sql = "INSERT INTO size (id, size_name) VALUES (NULL, '$input_size')";
  if(mysqli_query($conn, $sql)){
    echo "<script>alert('New Record created successfully');</script>";
  } else {
    echo "<script>"."Error ".$sql."<br>".mysqli_error($conn)."</script>";
  }

}

?>
