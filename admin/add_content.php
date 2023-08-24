<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin_login.php');
    exit();
}

include_once 'includes/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['content'];

    $sql = "INSERT INTO content (content_text) VALUES ('$content')";
    $result = $conn->query($sql);

    if ($result) {
        echo "Content added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Include your CSS and other head content -->
</head>

<body>
    <h1>Add Content</h1>
    <form method="post">
        <textarea name="content" rows="4" cols="50" required></textarea><br>
        <button type="submit">Add Content</button>
    </form>
    <!-- Include your JavaScript scripts -->
    <script src="js/script.js"></script>
</body>

</html>