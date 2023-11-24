<?php
session_start();
include $_SERVER["DOCUMENT_ROOT"] . "/layout/session.php";
//parameter값 GET
$mode = $_GET['mode'];

//모드별로 수행
$modeActions = [
    'find_id' => "/find/findId.php",
    'find_pw' => "/find/findPw.php",
    'find_id_send_code' => "/find/findId.php",
    'find_pw_send_code' => "/find/findPw.php",
    'password_reset' => "/find/findPwFinish.php"
];

//filname변수로 mode값에 해당하는 filename 넣기
$filename = include_once $_SERVER['DOCUMENT_ROOT'] . $modeActions[$mode];
?>