<!DOCTYPE html>
<html>
<head>
	<title>Update User Data</title>
<style>
    .container {
	max-width: 800px;
	margin: 0 auto;
	padding: 50px;
	background-color: #f2f2f2;
}

h1 {
	text-align: center;
	margin-bottom: 50px;
}

form {
	display: flex;
	flex-direction: column;
	align-items: center;
}

label {
	margin-top: 20px;
	font-weight: bold;
}

input[type="text"],
input[type="email"] {
	width: 100%;
	padding: 10px;
	margin-top: 10px;
	margin-bottom: 20px;
	border: none;
	border-radius: 3px;
	box-shadow: 0 0 5px rgba(0,0,0,0.1);
}

button {
	width: 100%;
	padding: 10px;
	background-color: #4CAF50;
	color: #fff;
	border: none;
	border-radius: 3px;
	cursor: pointer;
}

</style>
</head>
<body>
	<div class="container">
		<h1>Update User Data</h1>
		<?php
        error_reporting(0);
		include 'config.php';

		// Get the user data from the database
		$id = $_POST['id'];
		$sql = "SELECT * FROM users WHERE id='$id'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // Output the data in a form
		    $row = $result->fetch_assoc();
		    ?>
		    <form method="POST" action="">
		    	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
		    	<label for="name">Name:</label>
		    	<input type="text" name="name" id="name" value="<?php echo $row['name']; ?>">
		    	<label for="email">Email:</label>
				<input type="email" name="email" id="email" value="<?php echo $row['email']; ?>">
				<label for="dept">Department:</label>
        		<input type="text" name="dept" id="dept" value="<?php echo $row['department_name']; ?>">
		    	
		    	<a href="http://localhost/SQL%20Crud/"><button type="submit" name="update" value="Update" onclick="redirect()">Update</button></a>
		    </form>
		    <?php
		} else {
		    echo "User not found!";
		}
        
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
			$dept = $_POST['dept'];
            $sql = "UPDATE users SET name='$name', email='$email', department_name='$dept' WHERE id='$id'";
            if (mysqli_query($conn, $sql)) {
                // echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }

        // Close the connection

		$conn->close();
		function redirect()
        {
            $url = 'http://localhost/SQL%20Crud/';
            header('Location: ' . $url);
            echo"<script> window.href.location = 'http://localhost/SQL%20Crud/'; </script>";
        }
		?>
	</div>
</body>
</html>
