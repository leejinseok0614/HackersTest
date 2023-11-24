<?php
include $_SERVER["DOCUMENT_ROOT"] . "/layout/session.php";
//parameter값 GET
$mode = $_GET['mode'];

//모드별로 수행
$modeActions = [
    'modify' => "/modify/modify.php",
    'modify_id_check' => "/modify/modify.php"
];

//filname변수로 mode값에 해당하는 filename 넣기
$filename = include_once $_SERVER['DOCUMENT_ROOT'] . $modeActions[$mode];
?>