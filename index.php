<?php
// Start session
session_start();

// Check if user is logged in, if so redirect
if (isset($_SESSION['user_id'])) {
    header('Location: package.php');
    exit;
}
?>

<html>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<body>

    <div class="container">

        <h1>Homepage</h1>

        <div class="row">
            <div class="col-md-6">
                <h2>Register</h2>

                <!-- Registration form -->
                <form action="register.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <!-- More inputs -->

                    <button type="submit" class="btn btn-primary">Register</button>
                </form>

            </div>

            <div class="col-md-6">
                <h2>Login</h2>

                <!-- Login form -->
                <form action="login.php" method="post">

                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>

                </form>
            </div>
        </div>

    </div>

</body>

</html>