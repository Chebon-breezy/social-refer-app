<?php

// Database credentials
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', ''); // set password 
define('DB_NAME', 'socialmarket');

// Connect to database  
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
