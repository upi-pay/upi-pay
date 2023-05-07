
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
    <form action="register.php" method="post">
    <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputName1" name="name" aria-describedby="nameHelp">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <button type="submit" name="register" class="btn btn-primary">Register</button>
</form>
    </div>
</body>
</html>

<?php
// require_once 'password_hashing_library.php';
include('connection.php');

$token = md5(uniqid(rand(), true));
$error_messages = array();

if(isset($_POST['register']))
{
   $name = $_POST['name'];
    // Check if email is not empty and is a valid email address
    if(empty($_POST['email'])) {
        $error_messages[] = 'Email is required.';
    } else {
        $email = trim($_POST['email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_messages[] = 'Email is not valid.';
        }
    }

    // Check if password is not empty and is at least 8 characters long
    if(empty($_POST['password'])) {
        $error_messages[] = 'Password is required.';
    } 


    if(empty($error_messages)) {
        // Save the user's data to the database or do whatever you need to do with the data.
        
        $query = "INSERT INTO users (name,email, password) VALUES ($name','$email', '$password')";
        $result = mysqli_query($connection, $query);
        if($result)
        {   
            $response = array(
                'status' => 'success'
            );
            echo json_encode($response);
            echo"<script> alert('Registration Successful')</script>";
            echo"<script> window.location.href='login.php'</script>";
        }
    } else {
        // Return the errors as a JSON response
        $response = array(
            'status' => 'error',
            'errors' => $error_messages
        );
        echo json_encode($response);
        echo "<script> 
        alert('Registration Unsuccessful');
        setTimeout(function() {
            window.location.href='register.html';
        }, 5000); // 3 seconds
      </script>";
    }
}
?>