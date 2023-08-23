<?php

// Connect to database
include 'db_connect.php';

// Get package details
$sql = "SELECT * FROM packages WHERE id = 500";
$result = mysqli_query($conn, $sql);

$package = mysqli_fetch_assoc($result);

?>

<h1><?php echo $package['name']; ?></h1>

<p><?php echo $package['details']; ?></p>

<p>Price: <?php echo $package['price']; ?></p>