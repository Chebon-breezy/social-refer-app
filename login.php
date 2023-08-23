// Connect to database

// Get form data
$phone = $_POST['phone'];
$password = $_POST['password'];

// Query database to check if user exists
$sql = "SELECT * FROM users WHERE phone='$phone' AND password='$password'";

// Check if user exists
if($user = mysqli_fetch_assoc()) {

// Start session
session_start();

// Store user details in session
$_SESSION['id'] = $user['id'];
$_SESSION['name'] = $user['name'];

// Redirect to packages page
header('Location: packages.php');

} else {
// Invalid login, redirect back to index
header('Location: index.php');
}