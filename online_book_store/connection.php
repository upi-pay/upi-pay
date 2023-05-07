<?php

//create connection to database

$servername = "localhost";
$hostname = "root";
$password = "";
$database = "obs_db";


$connection = mysqli_connect($servername, $hostname, $password, $database);

if(!$connection){
    die("Connection failed: " . mysqli_connect_error());
}

?>