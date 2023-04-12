<?php
include 'config.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Join Tables</title>
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

table {
	width: 100%;
	border-collapse: collapse;
}

thead {
	background-color: #4CAF50;
	color: #fff;
}

th,
td {
	padding: 10px;
	text-align: left;
	border-bottom: 1px solid #ddd;
}

tr:hover {
	background-color: #f5f5f5;
}

    </style>
</head>
<body>
	<div class="container">
		<h1>Join Tables</h1>
		<table>
			<thead>
				<tr>
					<th>User ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Department</th>
				</tr>
			</thead>
			<tbody>
				<?php

				// Perform the join operation
				$sql = "SELECT users.id, users.name, users.email, departments.department_name 
						FROM users 
						INNER JOIN departments 
						ON users.department_name = departments.department_name";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // Output the data in a table
				    while($row = $result->fetch_assoc()) {
				        echo "<tr>";
				        echo "<td>" . $row['id'] . "</td>";
				        echo "<td>" . $row['name'] . "</td>";
				        echo "<td>" . $row['email'] . "</td>";
				        echo "<td>" . $row['department_name'] . "</td>";
				        echo "</tr>";
				    }
				} else {
				    echo "<tr><td colspan='4'>No results found</td></tr>";
				}

				// Close the connection
				$conn->close();
				?>
			</tbody>
		</table>
	</div>
</body>
</html>

