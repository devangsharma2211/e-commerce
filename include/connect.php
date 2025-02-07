<?php
// Get MySQL database credentials from environment variables
$dbHost = getenv('DB_HOST');  // Render's database host
$dbUser = getenv('DB_USER');  // MySQL username from Render
$dbPass = getenv('DB_PASS');  // MySQL password from Render
$dbName = getenv('DB_NAME');  // Database name from Render

// Create connection
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}


/* host name sql105.ezyro.com
username ezyro_37450296
password Devang@22
database ezyro_37450296_mystore */
?>  
