<?php
$servername = "localhost";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$clgid = $_POST['clgid'];
$email = $_POST['email'];
// $phn = $_POST['phn'];
$pwd = $_POST['pwd'];
$rrc = $_POST['rrc'];
$ic = $_POST['ic'];
$ec = $_POST['ec'];
// Create connection
$conn = mysqli_connect($servername, "root","","onof");
// Check connection
if(!$conn) {
// die("Connection failed");
}
else{
    $stmt = $conn->prepare("insert into hei(fname,lname,clgid,email,pwd,rrc,ic,ec)values(?, ?, ?, ?,?,?,?,?)");
    $stmt->bind_param("ssssssss",$fname,$lname,$clgid,$email,$pwd,$rrc,$ic,$ec);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

?>