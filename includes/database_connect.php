<?php
// script to connect to the database
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "hms";

$conn = mysqli_connect($servername, $username, $password, $database);

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to Database! Please contact the admin.";
    return;
}
