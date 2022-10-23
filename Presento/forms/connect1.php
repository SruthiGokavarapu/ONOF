<?php
$servername = "localhost";
$sname = $_POST['name'];
$email = $_POST['email'];
$sub = $_POST['subject'];
$msg = $_POST['message'];
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
// Create database
$db = "CREATE DATABASE contact";
if (mysqli_query($conn, $sql)) {
echo "Database created successfully";
}
$sq1 = "CREATE TABLE contact (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    sname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    sub VARCHAR(120),
    msg VARCHAR(300)
    )";
    if (mysqli_query($conn, $sql)) {
    } 
    $sql2 = "INSERT INTO contact (sname,email,sub,msg)
VALUES ('$sname','$email','$sub','$msg)";
mysqli_query($conn, $sq1)
mysqli_query($conn, $sql2)
mysqli_close($conn);
?>