<?php
session_start();
include_once 'includes/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $adminUsername = $_POST['adminUsername'];
    $adminPassword = $_POST['adminPassword'];

    // In a real scenario, you'd want to store and compare hashed passwords.
    // For simplicity, this example uses plain text passwords.

    if ($adminUsername === 'admin' && $adminPassword === 'admin123') {
        $_SESSION['admin_logged_in'] = true;
        header('Location: admin_dashboard.php');
        exit();
    } else {
        echo "Invalid admin credentials.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Include your CSS and other head content -->
</head>

<body>
    <form method="post">
        <label for="adminUsername">Username:</label>
        <input type="text" name="adminUsername" required><br>
        <label for="adminPassword">Password:</label>
        <input type="password" name="adminPassword" required><br>
        <button type="submit">Login</button>
    </form>
    <!-- Include your JavaScript scripts -->
    <script src="js/script.js"></script>
</body>

</html>