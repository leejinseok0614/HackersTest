<?php
$hostname = "172.16.0.32";
$username = "dev_jinseok";
$password = "js9158214ok!";
$dbname = "practice";

#phpinfo();

$conn = mysqli_connect($hostname, $username, $password, $dbname, 3306);
#or die("html>script language='JavaScript'>alert('Unable to connect to Database! Please try again later!.')/history.go(-1_/script>html>");

//if ($conn->connect_error) {
//    echo "error";
//} else {
//    echo "야호";
//}
?>