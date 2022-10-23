<?php
$servername = "localhost";
$sname = $_POST['name'];
$email = $_POST['email'];
$subj = $_POST['subject'];
$msg = $_POST['message'];
// Create connection
$conn = mysqli_connect($servername, "root","","onof");
// Check connection
if(!$conn) {
// die("Connection failed");
}
else{
    $stmt = $conn->prepare("insert into contact(sname,email,subj,msg)values(?, ?, ?, ?)");
    $stmt->bind_param("ssss",$sname,$email,$subj,$msg);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

?>