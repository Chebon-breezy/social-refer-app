<?php
include_once 'includes/db_connect.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $names = mysqli_real_escape_string($conn, $_POST['names']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (phoneNumber, names, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $phoneNumber, $names, $email, $password);

    if ($stmt->execute()) {
        $message = "Registration successful.";
    } else {
        $message = "Error: " . $stmt->error;
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
    <h1>Register</h1>
    <form method="post">
        <div>
            <label for="phoneNumber">Phone Number:</label>
            <input type="text" name="phoneNumber" required>
        </div>
        <div>
            <label for="names">Full Name:</label>
            <input type="text" name="names" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" name="confirmPassword" required>
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
    <p><?php echo $message; ?></p>
    <!-- Include your JavaScript scripts -->
    <script src="js/script.js"></script>
</body>

</html>