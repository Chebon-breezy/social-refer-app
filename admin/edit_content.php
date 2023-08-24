<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin_login.php');
    exit();
}

include_once 'includes/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contentId = $_POST['content_id'];
    $updatedContent = $_POST['updated_content'];

    $sql = "UPDATE content SET content_text = '$updatedContent' WHERE id = $contentId";
    $result = $conn->query($sql);

    if ($result) {
        echo "Content updated successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$sql = "SELECT * FROM content";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Include your CSS and other head content -->
</head>

<body>
    <h1>Edit Content</h1>
    <?php
    while ($row = $result->fetch_assoc()) {
        echo "<form method='post'>";
        echo "<input type='hidden' name='content_id' value='{$row['id']}'>";
        echo "<textarea name='updated_content' rows='4' cols='50'>{$row['content_text']}</textarea><br>";
        echo "<button type='submit'>Update Content</button>";
        echo "</form>";
    }
    ?>
    <!-- Include your JavaScript scripts -->
    <script src="js/script.js"></script>
</body>

</html>