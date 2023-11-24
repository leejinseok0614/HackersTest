<?php
include $_SERVER["DOCUMENT_ROOT"] . "/root.php";

//$hostname = "172.16.0.32";
//$username = "dev_jinseok";
//$password = "js9158214ok!";
//$dbname = "practice";
//
//#phpinfo();
//
//$conn = mysqli_connect($hostname, $username, $password, $dbname, 3306);

//step_02 전화번호 등록하기
if ($_POST['mode'] == 'step_02') {
    $_SESSION['phoneNum'] = $_POST['phoneNum'];
    $_SESSION['sessionVeriCode'] = 123456;


    //JSON으로 전환
//    print_r($_SESSION['sessionVeriCode']);
//    exit;
    $responseData = [
        'phoneNum' => $_SESSION['phoneNum'],
        'sessionVeriCode' => $_SESSION['sessionVeriCode']
    ];
//    header('Content_Type: application/json');
//    print_r(json_encode($responseData));
//    return $responseData;
    echo json_encode($responseData);
}

//step_03 회원정보 입력하기
//아이디, 중복체크 기능 추가
//우편번호 찾기 다음 API활용
//휴대폰 번호 이미 입력했으니 default값으로 세팅

//아이디 중복검사
if ($_POST['mode'] == 'id_check') {
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

//회원가입 + 유효성 검사
$pattern = [
    'id' => '/^[a-z][a-z0-9]{3,15}$/',
    'name' => '/^[가-힣]{2, }/',
    'password' => '/^(?=.*[a-z])(?=.*[0-9][a-z0-9]){8,15}$/',
    'phoneNum' => '/^010/d{8}$/',
    'addressNum' => '/\d{5,6}$/'
];

if ($_POST['mode'] == 'step_03') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phoneNum = $_POST['phoneNum'];
    $normalNum = $_POST['normalNum'];
    $addressNum = $_POST['addressNum'];
    $address = $_POST['address'];
    $extraAddress = $_POST['extraAddress'];
    $sendSMS = $_POST['sendSMS'];
    $sendEmail = $_POST['sendEmail'];

    //유효성검사
    $isValid = [
        'id' => preg_match($pattern['id'], $id),
        'name' => preg_match($pattern['name'], $name),
        'password' => preg_match($pattern['password'], $password),
        'phoneNum' => preg_match($pattern['phoneNum'], $phoneNum),
        'addressNum' => preg_match($pattern['addressNum'], $addressNum)
    ];
//
//    print_r($isValid);
    //비밀번호 암호화
    if (!in_array(false)) {
//        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $hashedPassword = hash('sha256', $password);

        $sql = "INSERT INTO practice
        (
            id,
            name,
            password,
            email,
            phoneNum,
            normalNum,
            addressNum,
            address,
            extraAddress,
            sendSMS,
            sendEmail
        )
        values (
            '{$id}',
            '{$name}',
            '{$hashedPassword}',
            '{$email}',
            '{$phoneNum}',
            '{$normalNum}',
            '{$addressNum}',
            '{$address}',
            '{$extraAddress}',
            '{$sendSMS}',
            '{$sendEmail}'
        )";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            $_SESSION['id'] = $id;
            $_SESSION['password'] = $password;

            $responseData = [
                "result" => true
            ];
        }

        header('Content_type: application/json');
        echo json_encode($responseData);
    }
}
