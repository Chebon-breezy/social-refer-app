<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$selectedPackage = $_SESSION['selected_package'];

if ($selectedPackage != '250') {
    header('Location: packages.php');
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Include your CSS and other head content -->
</head>

<body>
    <h1>Package 250 Page</h1>
    <p>Thank you for choosing the KSH 250 package.</p>
    <!-- Include your JavaScript scripts -->
    <script src="js/script.js"></script>
</body>

</html>