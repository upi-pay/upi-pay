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

    $sql = "INSERT INTO users(Username, Password) VALUES ('$username', '$password')";
    if (mysqli_query($dbConnection, $sql))
    {
        echo "User Registered To Database ... Redirecting";
        echo '<script type="text/javascript">
                setTimeout(function(){
                location.href = "../index.html";
                }, 2000);
                </script>';
    }
    else
    {
        echo "Could Not Sign Up ... Please Try Again Or Contact The Admin";
    }

    mysqli_close($dbConnection);

?>

