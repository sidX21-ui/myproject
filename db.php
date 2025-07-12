<?php
$host = "localhost";
$user = "root";       // XAMPP default username
$pass = "";           // XAMPP default has no password
$dbname ="myproject";  // Your DB name

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

// echo "✅ Connected successfully";
?>