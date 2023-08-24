<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin_login.php');
    exit();
}

include_once 'includes/db_connect.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Include your CSS and other head content -->
</head>

<body>
    <h1>View Users</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Phone Number</th>
            <th>Names</th>
            <th>Email</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['phoneNumber']}</td>";
            echo "<td>{$row['names']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <!-- Include your JavaScript scripts -->
    <script src="js/script.js"></script>
</body>

</html>