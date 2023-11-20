<?php
session_start();
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

//회원가입 눌렀을 때, 아래 항목들이 true여야 함
if($_POST['mode' == 'step_03']) {
    $userName = $_POST['userName'];
    $userId = $_POST['userId'];
    $userPassword = $_POST['userPassword'];
    $userEmail = $_POST['userEmail'];
    $userPhoneNum = $_POST['userPhoneNum'];
    $userPostNum = $_POST['userPostNum'];
    $userAddress = $_POST['userAddress'];
    $userExtraAddress = $_POST['userExtraAddress'];
    $sendSMS = $_POST['userSMS'];
    $sendEmail = $_POST['userEmail'];
}
?>