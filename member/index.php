<?php
include $_SERVER["DOCUMENT_ROOT"] . "/layout/session.php";
//parameter값 GET
$mode = $_GET['mode'];

//모드별로 수행
$modeActions = [
    'step_01' => "/member/step_01.php",
    'step_02' => "/member/step_02.php",
    'step_03' => "/member/step_03.php",
    'step_04' => "/member/step_complete.php",
];

//filname변수로 mode값에 해당하는 filename 넣기
$filename = $modeActions[$mode];
?>