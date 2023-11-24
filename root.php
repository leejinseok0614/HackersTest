<?php
//include $_SERVER["DOCUMENT_ROOT"] . "/layout/session.php";
//echo $_SERVER["DOCUMENT_ROOT"];
$hostname = "172.16.0.32";
$username = "dev_jinseok";
$password = "js9158214ok!";
$dbname = "practice";

#phpinfo();

$conn = mysqli_connect($hostname, $username, $password, $dbname);

//if($conn) {
//    echo "야호";
//} else {
//    echo "?";
//}
#or die("html>script language='JavaScript'>alert('Unable to connect to Database! Please try again later!.')/history.go(-1_/script>html>");

//if ($conn->connect_error) {
//    echo "error";
//} else {
//    echo "야호";
//}
?>