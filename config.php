<?php

// Database connection parameters
$servername = "localhost"; // Server name
$username = "root"; // Database username
$password = ""; // Database password (if you have one, replace with the actual password)
$dbname = "photography_db"; // Database name

// Create connection using mysqli
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

