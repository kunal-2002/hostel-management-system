<?php

require("../includes/database_connect.php");

$full_name = $_POST['full_name'];
$roll_no = $_POST['roll_no'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = sha1($password);
$gender = $_POST['gender'];
$registered_as = $_POST['registered_as'];

$sql = "SELECT * FROM users WHERE email='$email' OR roll_no='$roll_no' ";

$result = mysqli_query($conn, $sql);
if(!$result){
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$row_count = mysqli_num_rows($result);
if($row_count != 0){
    $response = array("success" => false, "message" => "You are already registered with us!, you can login now.");
    echo json_encode($response);
    return;
}

$sql = "INSERT INTO users (email, password, full_name, roll_no, gender, registered_as) VALUES ('$email', '$password', '$full_name', '$roll_no', '$gender', '$registered_as')";

$result = mysqli_query($conn, $sql);
if(!$result){
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$response = array("success" => true, "message" => "Your account has been created successfully!");
echo json_encode($response);
mysqli_close($conn);