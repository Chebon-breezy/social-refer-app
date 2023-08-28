<?php
session_start();
include_once 'includes/db_connect.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE phoneNumber='$phoneNumber'";
    $result = $conn->query($sql);

    echo "Received password: " . $password;

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (isset($user['password']) && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            ob_start(); // Start output buffering
            header('Location: packages.php');
            ob_end_flush(); // Flush the buffer and redirect
            exit();
        } else {
            $message = "Invalid password.";
        }

        echo "Password verification result: " . $result;
    } else {
        $message = "User not found.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Include your CSS and other head content -->
</head>

<body>
    <h1>Login</h1>
    <form method="post">
        <div>
            <label for="phoneNumber">Phone Number:</label>
            <input type="text" name="phoneNumber" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
    <p><?php echo $message; ?></p>
    <!-- Include your JavaScript scripts -->
    <script src="js/script.js"></script>
</body>

</html>