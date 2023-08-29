<?php
session_start();
include_once 'includes/db_connect.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE phoneNumber = ?");
    $stmt->bind_param("s", $phoneNumber);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (array_key_exists('password', $user)) {
            echo 'Fetched password: ' . $user['password'];

            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                ob_start();
                header('Location: packages.php');
                ob_end_flush();
                exit();
            } else {
                $message = "Invalid phone number or password.";
            }
        } else {
            echo "Password does not exist for this user.";
        }
    } else {
        $message = "Invalid phone number or password.";
    }
    $stmt->close();
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