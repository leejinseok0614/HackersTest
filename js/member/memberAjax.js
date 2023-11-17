// step_01
// 동의체크박스를 모두 체크해야 다음단계로 넘어갈수 있게 개발할것
// /member/index.php?mode=step_01

let agreeCheck1 = false;
let agreeCheck2 = false;

//전체 체크 기능
$('#agree-all').change(function() {

    console.log(123);
    let checkAll = $(this).is(':checked');
    console.log(checkAll)

    if(checkAll) {
        //$(".agree-check").prop("checked", true);
        $("#agree_1").prop("checked", true);
        $("#agree_2").prop("checked", true);
        //agreeCheck1 = true;
        //agreeCheck2 = true;
    } else {
        //$(".agree-check").prop("checked", false);
        //agreeCheck1 = false;
        //agreeCheck2 = false;
        $("#agree_1").prop("checked", false);
        $("#agree_2").prop("checked", false);
    }
})

//각 버튼별 체크 기능
$('#agree-check1').change(function() {
    agreeCheck1 = $(this).is(':checked');
});

$('#agree-check2').change(function() {
    agreeCheck2 = $(this).is(':checked');
});

// 휴대폰인증만 구현
// SESSION 에 인증번호 고정[123456] 지정하여 매칭후 본인확인 패스
// 아이핀 인증기능은 생략
// /member/index.php?mode=step_02
