<html>
<head>
    <title>Electricity Bill Calculation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <center><h1>Electricity Bill Calculation</h1></center>

    <form action="" method="POST">
        <label for="units">Enter units consumed:</label>
        <input type="number" name="units" id="units" min="0" max="1000" required>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>
<?php

if(isset($_POST['units'])){
    $units = $_POST['units'];
}

$bill = 0;

if(isset($units))
{
    if ($units <= 50) {
        $bill = $units * 3.50;
    } elseif ($units <= 150) {
        $bill = 50 * 3.50 + ($units - 50) * 4.00;
    } elseif ($units <= 250) {
        $bill = 50 * 3.50 + 100 * 4.00 + ($units - 150) * 5.20;
    } else {
        $bill = 50 * 3.50 + 100 * 4.00 + 100 * 5.20 + ($units - 250) * 6.50;
    }

    echo "<span>"."Total units consumed: " . $units . "<br>";
    echo "Electricity bill: Rs. " . $bill . "</span>";

}    
?>