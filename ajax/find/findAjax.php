<?php
include $_SERVER["DOCUMENT_ROOT"] . "/root.php";
//include $_SERVER["DOCUMENT_ROOT"] . "/layout/session.php";

//sessionEmailCode는 123456으로 고정
$sessionEmailCode = '123456';

//email로 코드 전송
if ($_POST['mode'] == 'find_id_send_code') {
    //이메일 발송에 필요한 코드
    $to = $_POST['fullEmail'];
    $subject = "Find ID Verification";
    $message = 'Hi Hackers! Your verification code is [123456]!';
    $headers = 'From:noreply@test.hackers.com. \r\n';

    //메일 발송
    $sendEmail = mail($to, $subject, $message, $headers);

    //session값을 json으로 변환
    $responsedata = [
        'sessionEmailCode' => '123456'
    ];

    echo json_encode($responsedata);
}

//ID찾기_email
if ($_POST['mode'] == 'find_id') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $check = false;

//    print_r($email);

    //ID찾기
    $sql = "SELECT * FROM member WHERE name = '{$name}' and email = '{$email}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

//    print_r($row);

    if ($row) {
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['sessionEmailCode'] = '123456';

        $check = true;
//        print_r($row);
    }

    $responsedata = [
        'check' => $check
    ];

    header('Content_type: application/json');
    echo json_encode($responsedata);
}

//비밀번호 찾기_email
if ($_POST['mode'] == 'find_pw') {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $check = false;

    $sql = "SELECT * FROM member WHERE name = '{$name}' and id = '{$id}' and email = '{$email}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($row);

    if ($row) {
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
    }

    $responsedata = [
        'check' => $check
    ];

    echo json_encode($responsedata);
}
?>