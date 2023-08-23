<?php

session_start();

$package = $_SESSION['package'];

if ($package != 250) {
    header('Location: packages.php');
}

?>

<html>

<body>

    <div class="container">

        <h1>Package 250</h1>

        <p>Details about 250 package</p>

        <?php
        // Fetch package details from database
        $sql = "SELECT * FROM packages WHERE id = 250";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            echo "<div class='package-details'>";
            echo "<h2>" . $row['name'] . "</h2>";
            echo "<p>" . $row['details'] . "</p>";
            echo "<p>Price: " . $row['price'] . "</p>";
            echo "</div>";
        }
        ?>

    </div>

</body>

</html>