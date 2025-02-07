2025-02-08 00:55:11.968 [info] > git status -z -uall [114ms]
<?php
$servername = "my-ecommerce-db.onrender.com";  // Replace with your database's hostname
$username = "my_ecommerce_db_user";             // Your MySQL username
$password = "KZFoyc3n1deSaVWgWemsY32F8SPfqbWL";             // Your MySQL password
$dbname = "my_ecommerce_db";                   // Your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


/* host name sql105.ezyro.com
username ezyro_37450296
password Devang@22
database ezyro_37450296_mystore */
?>  
