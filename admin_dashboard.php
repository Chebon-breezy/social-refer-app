<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin_login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Include your CSS and other head content -->
</head>

<body>
    <h1>Admin Dashboard</h1>
    <ul>
        <li><a href="add_content.php">Add Content</a></li>
        <li><a href="edit_content.php">Edit Content</a></li>
        <li><a href="view_users.php">View Users</a></li>
    </ul>
    <!-- Include your JavaScript scripts -->
    <script src="js/script.js"></script>
</body>

</html>