<?php
include $_SERVER["DOCUMENT_ROOT"] . "/layout/session.php";
include $_SERVER["DOCUMENT_ROOT"] . "/root.php";
//내정보수정 페이지 구현
//    - /member/index.php?mode=modify
//이름 + 전화번호는 default로 입력되고 나머지는 셀프로

//아이디 중복검사
if ($_POST['mode'] == 'modify_id_check') {
    $idCheck = false;
    $idInput = $_POST['idInput'];

    $sql = "SELECT * FROM practice WHERE id = '{$idInput}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    //중복되는 아이디가 없을 경우
    if (!$row) {
        $idCheck = true;
    }

    //JSON으로 변환
    $responseData = [
        'check' => $idCheck
    ];

    header('Content-Type: application/json');
    echo json_encode($responseData);
}


$pattern = [
    'id' => '/^[a-z][a-z0-9]{3,15}$/',
    'password' => '/^(?=.*[a-z])(?=.*[0-9][a-z0-9]){8,15}$/',
    'addressNum' => '/\d{5,6}$/'
];

if ($_POST['mode'] = 'modify') {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phoneNum = $_POST['phoneNum'];
    $normalNum = $_POST['normalNum'];
    $addressNum = $_POST['addressNum'];
    $address = $_POST['address'];
    $extraAddress = $_POST['extraAddress'];
    $sendSMS = $_POST['sendSMS'];
    $sendEmail = $_POST['sendEmail'];

    //유효성 검사
    $isValid = [
        'id' => preg_match($pattern['id'], $id),
        'password' => preg_match($pattern['password'], $password),
        'phoneNum' => preg_match($pattern['phoneNum'], $phoneNum),
        'addressNum' => preg_match($pattern['addressNum'], $addressNum)
    ];

    if (!in_array(false)) {
//        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $hashedPassword = hash('sha256', $password);

        //sql문으로 원하는 값 업데이트
        $sql = "UPDATE 
                    practice
                SET
                    id = '{$id}',
                    password = '{$hashedPassword}',
                    email = '{$email}',
                    phoneNum = '{$phoneNum}',
                    normalNum = '{$normalNum}',
                    addressNum = '{$addressNum}',
                    address = '{$address}',
                    extraAddress = '{$extraAddress}',
                    sendSMS = '{$sendSMS}',
                    sendEmail = '{$sendEmail}'
                WHERE
                    name = '{$name}' AND phoneNum =  '{phoneNum}'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

        if ($row) {
            $_SESSION['id'] = $id;
            $_SESSION['password'] = $password;

            $responseData = [
                "result" => true
            ];
        } else {
            $responseData = [
                "result" => false
            ];
        }
        header('Content_type: application/json');
        echo json_encode($responseData);
    }
}
?>