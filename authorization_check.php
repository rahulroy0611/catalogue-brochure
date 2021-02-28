<?php

    // $authorized_code = $_COOKIE['authorization'];

    if(isset($_COOKIE['authorization'])){

        $authorized_code = $_COOKIE['authorization'];

        if($authorized_code == "denied"){
            header("location: login.php");
        }

    } else {
        header("location: login.php");
    }

?>