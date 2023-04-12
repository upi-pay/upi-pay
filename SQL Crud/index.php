<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>CRUD Operations</h1>

    <form method="post" action="insert.php">
        <h2>Create</h2>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Enter email" required>
        <label for="dept">Department:</label>
        <input type="text" name="dept" id="dept" placeholder="Enter department" required>
        <br>
        <input type="submit" name="submit" value="Create">
    </form>

    <form method="post">
        <h2>Update/Delete</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </table>
    </form>
</div>
<script src="script.js"></script>
</body>

</html>


<?php
// error_reporting(0);
//connect to database
include 'config.php';



// if (isset($_POST['submit'])) {
    //retrieve data from database
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            //output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<table>";
                // echo "<thead>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                // echo "<td>" . $row["department_name"] . "</td>";
                // echo "</thead>";
                echo "<td>";
                echo "<form method='post' action='update.php' style='display: inline;'>";
                echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
                echo "<input type='submit' name='update' value='Update' class='button'>";
                echo "</form>";
                echo "<form method='post' action='delete.php' style='display: inline;'>";
                echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
                echo "<input type='submit' name='delete' value='Delete' class='button danger'>";
                echo "</form>";
                echo "<form method='post' action='join.php' style='display: inline;'>";
                echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
                echo "<input type='submit' name='join' value='Join' class='button danger'>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
                echo "</table>";
            }
        } else {
            echo "<tr><td colspan='4' class='alert danger'>No data found.</td></tr>";
        }
    // }





mysqli_close($conn);
?>