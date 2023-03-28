<?php
header("Access-Control-Allow-Origin: *");
echo "hello";
$servername = "localhost";
$dbname = "guvi";

// Create connection
$conn = new mysqli($servername, "root", "",$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from form
$email = $_GET["em"];
$password = $_GET["pass"];
$confirmpassword = $_GET["cpass"];

// Insert data into table
$sql = "INSERT INTO register VALUES ('$email','$password','$confirmpassword')";
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

