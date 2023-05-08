<?php

    $host = "localhost";
    $mysql_user = "atharv";
    $mysql_password = "root";
    $db = "books";

    $username = $_POST["username"];
    $password = $_POST["password"];

    $salt = "1p2h3pd9e8m7o6";
    $password = crypt($password, $salt);

    $dbConnection = mysqli_connect($host, $mysql_user, $mysql_password, $db);
    if (!$dbConnection)
    {
        echo "Failed to connect to database ..." . mysqli_connect_error();
        die();
    }

    $sql = "SELECT * FROM users WHERE Username='$username' AND Password='$password'";
    $result = mysqli_query($dbConnection, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    
    if ($count == 1) 
    {
        header("Location: ../catalogue.html");
    }
    else
    {
        echo "Could Not Login ... Please Try Again Or Contact The Admin";
        echo '<script type="text/javascript">
                setTimeout(function(){
                location.href = "../login.html";
                }, 2000);
                </script>';
    }

    mysqli_close($dbConnection);

?>

