<?php
$host = '127.0.0.1';  // or use the MySQL container name
$user = 'root';
$port = '3307';
$password = '';
$dbname = 'mystore';

$db = mysqli_connect($host, $user, $password, $dbname,  $port);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// If connection is successful
echo "Connected successfully";

/* host name sql105.ezyro.com
username ezyro_37450296
password Devang@22
database ezyro_37450296_mystore */
?>  
