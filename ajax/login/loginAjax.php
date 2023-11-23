<?php
include $_SERVER["DOCUMENT_ROOT"] . "/root.php";
//include $_SERVER["DOCUMENT_ROOT"] . "/layout/session.php";
//$hostname = "172.16.0.32";
//$username = "dev_jinseok";
//$password = "js9158214ok!";
//$dbname = "practice";
//
//$conn = mysqli_connect($hostname, $username, $password, $dbname, 3306);

////test용도
if ($_POST['mode'] == 'login') {
//    $userId = 'test';
//    $userPassword = 'test123';
    $userId = $_POST['id'];
    $userPassword = $_POST['password'];

    $sql = "SELECT * FROM member WHERE id = '$userId'";

    //DB에서 정보 추출
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    //입력받은 비밀번호 암호화 처리해서 비교
    $hashedPassword = hash('sha256', $userPassword);

    //암호화된 비밀번호와 member에 저장된 비밀번호가 같을 경우 로그인이 성공
    if ($userId == $row['id']) {
        if ($hashedPassword == $row['password']) {
            $_SESSION['id'] = $userId;
            $_SESSION['password'] = $userPassword;

            $responseData = [
                'result' => true
            ];
//        echo $responseData['id'];
//        echo $responseData['password'];
            header('Content-Type: application/json');
            echo json_encode($responseData);
//        return $responseData;
        } else {
            $responseData = [
                'result' => false
            ];
        }
    }
}
