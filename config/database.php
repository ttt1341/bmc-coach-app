<?php

$host = 'localhost';
$db   = 'ibadclub_bmc';
$user = 'ibadclub_bmc';
$pass = 'YOUR_PASSWORD';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
}

?>
