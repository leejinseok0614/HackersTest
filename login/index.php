<?php
include $_SERVER["DOCUMENT_ROOT"] . "/layout/session.php";
include $_SERVER["DOCUMENT_ROOT"] . "/root.php";
//echo "!!"; exit();
//parameter값 GET
$mode = $_GET['mode'];
//print_r($_SERVER); exit();
//모드별로 수행
$modeActions = [
    'login' => "/login/login.php",
    'logout' => "/login/index.php"
];

//filname변수로 mode값에 해당하는 filename 넣기
$filename = include_once $_SERVER['DOCUMENT_ROOT'] . $modeActions[$mode];

if ($mode == 'logout') {
    session_destroy();
    header("Location: http://test.hackers.com/");
}

?>