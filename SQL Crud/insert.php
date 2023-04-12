<?php
include 'config.php';
//create or insert data into database
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dept = $_POST['dept'];
    $sql = "INSERT INTO users (name, email,department_name) VALUES ('$name', '$email', '$dept')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully <br><br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $sql = "Insert into departments (department_name) values ('$dept')";
    if (mysqli_query($conn, $sql)) {
        echo " ";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>