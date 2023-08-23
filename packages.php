<?php

session_start();

// Check if user is logged in
if (!isset($_SESSION['id'])) {
    header('Location: index.php');
    exit;
}

?>

<html>

<!-- HTML and Bootstrap for page layout -->

<body>

    <div class="container">

        <h1>Packages</h1>

        <div class="row">

            <div class="col-md-4">
                <button class="btn btn-primary" onclick="choosePackage(250)">KSH 250</button>
            </div>

            <div class="col-md-4">
                <button class="btn btn-primary" onclick="choosePackage(500)">KSH 500</button>
            </div>

            <div class="col-md-4">
                <button class="btn btn-primary" onclick="choosePackage(1000)">KSH 1000</button>
            </div>

        </div>

    </div>

    <script>
        function choosePackage(amount) {
            // Store choice in session
            $.post('choose_package.php', {
                amount: amount
            }, function() {
                // Redirect to package page
                window.location.href = 'package' + amount + '.php';
            });
        }
    </script>

</body>

</html>