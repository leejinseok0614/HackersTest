<?php
$hostname = "172.16.0.32";
$username = "dev_jinseok";
$password = "js9158214ok!";
$dbname = "practice";

#phpinfo();
$conn = mysqli_connect($hostname, $username, $password, $dbname);

$sql = "SELECT * FROM practice WHERE id = 'test'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$sql = "UPDATE 
                    practice
                SET
                    id = 'aaa',
                    password = 'asdsadasdsada',
                    email = 'aaa@aaa.com',
                    phoneNum = '01011111111',
                    normalNum = '01022222222',
                    addressNum = '12345',
                    address = 'aaa',
                    extraAddress = 'aaa',
                    sendSMS = '1',
                    sendEmail = '2'
                WHERE
                    name = 'abc' AND phoneNum =  '01012345678'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if(mysqli_query($conn, $sql)) {
    print_r(mysqli_query($conn, $sql));
} else {
    echo "실패" ;
    print_r($result);
}

//        $row = mysqli_fetch_array($result);
        print_r($row);
?>