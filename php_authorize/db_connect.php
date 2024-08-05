<?php

$servername = "mysql";
$username = "sail";
$password = "password";
$db_name = "laravel";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
