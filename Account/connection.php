<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbanme = "student_registration";

$conn = mysqli_connect($servername,$username,$password,$dbanme);

if($conn) {
    echo "Connection Successful";
}
else {
    echo "Connection Failed ".mysqli_connect_error();
}
?>