<?php
include_once 'includes/db_connect.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract data from the form
    $phoneNumber = $_POST['phoneNumber'];
    $names = $_POST['names'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Insert data into the database
    $sql = "INSERT INTO users (phoneNumber, names, email, password) VALUES ('$phoneNumber', '$names', '$email', '$password')";
    $result = $conn->query($sql);

    if ($result) {
        $message = "Registration successful.";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
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