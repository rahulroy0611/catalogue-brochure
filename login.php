<?php

ob_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body class="bg-light">
    
    <div class="wrapper fadeInDown">
    <div id="formContent">

        <div class="fadeIn first">
        <img src="images/login_icon.png" id="icon" alt="User Icon" class="rounded mx-auto d-block"/>
        </div>

        <form action="login.php" method="POST">
            <input type="text" id="username" class="fadeIn second" name="username" placeholder="login" required autofocus autocomplete="off">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required autocomplete="off">
            <input type="submit" id="login_submit" name="login_submit" class="fadeIn fourth" value="Log In">
        </form>

        <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<?php

require("db_connection.php");

if(isset($_POST['login_submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cookie_name = "authorization";
    $cookie_value = "access";

    $sql = "SELECT username FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        header("location: index.php");
    }
}

ob_flush();

?>

