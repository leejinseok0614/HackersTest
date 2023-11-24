<?php
include $_SERVER["DOCUMENT_ROOT"] . "/root.php";
//session_start();
include $_SERVER["DOCUMENT_ROOT"] . "/layout/session.php";
//$hostname = "172.16.0.32";
//$username = "dev_jinseok";
//$password = "js9158214ok!";
//$dbname = "practice";
//
//$conn = mysqli_connect($hostname, $username, $password, $dbname, 3306);

////test용도
//print_r($_POST);
//exit;
if ($_POST['mode'] == 'login') {
//    $userId = 'test';
//    $userPassword = 'test123';
    $userId = $_POST['id'];

//    print_r($_POST['id']);
    $userPassword = $_POST['password'];
//    print_r($_POST['password']);

    //DB에서 정보 추출
    $sql = "SELECT * FROM practice WHERE id = '$userId'";
//echo $sql; exit;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

//    print_r($row);

//    print_r($row['id']);
//    print_r($row['password']);
    //입력받은 비밀번호 암호화 처리해서 비교
    $hashedPassword = hash('sha256', $userPassword);
//    $test = hash('sha256', 'test');
//    print_r($test);
////    exit;
    //test1234 -> 937e8d5fbb48bd4949536cd65b8d35c426b80d2f830c5c308e2cdec422ae2244
    //937e8d5fbb48bd4949536cd65b8d35c426b80d2f830c5c308e2cdec422ae

//    if ($hashedPassword == $row['password']) {
//        echo "ㅗ";
//    } else {
//        print_r($row['password']);
//        print_r($hashedPassword);
//        echo 'ㅠ';
//    }
//    print_r($row['password']);
    //암호화된 비밀번호와 member에 저장된 비밀번호가 같을 경우 로그인이 성공
//    print_r($row['id']);
//    print_r($hashedPassword);
//    echo " / ";
//    print_r($row['password']);
    if ($userId == $row['id']) {
//        echo "!!"; exit();
        if ($hashedPassword == $row['password']) {
            $_SESSION['password'] = $userPassword;
            $_SESSION['id'] = $userId;

            $responseData = [
                'result' => true
            ];
//            echo "true";
//            print_r($responseData);
//        echo $responseData['id'];
//        echo $responseData['password'];

            header('Content-Type: application/json');
            echo json_encode($responseData);
        } else {
//            echo "false";
            $responseData = [
                'result' => false
            ];

            header('Content-Type: application/json');
            echo json_encode($responseData);
        }

    }
}
