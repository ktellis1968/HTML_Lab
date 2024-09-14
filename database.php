<?php
    $db_server="localhost";
    $db_user="root";
    $db_password="";
    $db_name="businessdb";
    $conn = "";

    $conn = mysqli_connect(
          $db_server
        , $db_user
        , $db_password
        , $db_name
    );

    if($conn) {
        echo "You are connected to the MySQL database";
    } else {
        echo "You are NOT connected to the MySQL database";
    }
?>
