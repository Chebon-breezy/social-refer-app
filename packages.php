<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedPackage = $_POST['package'];
    $_SESSION['selected_package'] = $selectedPackage;
    $packagePage = "package{$selectedPackage}.php";
    header("Location: $packagePage");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Include your CSS and other head content -->
</head>

<body>
    <form method="post">
        <button type="submit" name="package" value="250">KSH 250</button>
        <button type="submit" name="package" value="500">KSH 500</button>
        <button type="submit" name="package" value="1000">KSH 1000</button>
    </form>
    <!-- Include your JavaScript scripts -->
    <script src="js/script.js"></script>
</body>

</html>