<?php
$servername = "db.vc-insight.com";
$username = "md464821db452589";
$password = "uva2019";
$dbname = "md464821db452589";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>