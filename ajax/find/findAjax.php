<?php
include $_SERVER["DOCUMENT_ROOT"] . "/root.php";
include $_SERVER["DOCUMENT_ROOT"] . "/layout/session.php";

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
    $sessionEmailCode = '123456';

    //sql문으로 db에서 검색
    $sql = "SELECT * FROM practice WHERE id = '{$name}' and email = '{$email}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if ($row) {
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
//        $_SESSION['sessionEmailCode'] = '123456';

        $check = true;
//        print_r($row);
    }

    $responsedata = [
        'check' => $check
    ];

    header('Content_type: application/json');
    echo json_encode($responsedata);
}

//email로 코드 전송 (PASSWORD)
if ($_POST['mode'] == 'find_pw_send_code') {
    //이메일 발송에 필요한 코드
    $to = $_POST['fullEmail'];
    $subject = "Find Password Verification";
    $message = 'Hi Hackers! Your verification code is [123456]!';
    $headers = 'From:noreply@test.hackers.com. \r\n';

    //메일 발송
    $sendEmail = mail($to, $subject, $message, $headers);

    //session값을 json으로 변환
    $responsedata = [
        'sessionEmailPwCode' => '123456'
    ];

    echo json_encode($responsedata);
}

//PW찾기_email
if ($_POST['mode'] == 'find_pw') {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $check = false;

//    print_r($email);

    //PW찾기
    $sql = "SELECT * FROM practice WHERE id = '{$id}' and email = '{$email}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

//    print_r($row);

    if ($row) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
//        $_SESSION['sessionEmailCode'] = '123456';

        $check = true;
//        print_r($row);
    }

    $responsedata = [
        'check' => $check
    ];

    header('Content_type: application/json');
    echo json_encode($responsedata);
}

if ($_POST['mode'] == 'password_reset') {
    $id = $_SESSION['id'];
    $resetPassword = $_POST['password'];
    $resetHashPassword = password_hash('sha256', $resetPassword);
    $id = $_SESSION['id'];
//    if (is_null($_SESSION['id'])){
//        $id = $_POST['id'];
//    } else {
//        $id = $_SESSION['id'];
//    }
//    is_null($_SESSION['id']) ? $id = $_POST['id'] : $id = $_SESSION['id'];

    print_r($_SESSION['id']);
    $check = false;

    //password 업데이트하는 sql문 구성
    $sql = "UPDATE practice 
            SET
                password = '{$resetHashPassword}';
            WHERE 
                $id = {$id}";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if ($row) {
        $check = true;
    }

    $responsedata = [
        'check' => $check
    ];

    header('Content_type: application/json');
    echo json_encode($responsedata);
}
?>