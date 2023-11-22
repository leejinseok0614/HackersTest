// step_01
// 동의체크박스를 모두 체크해야 다음단계로 넘어갈수 있게 개발할것

let agreeCheck1 = false;
let agreeCheck2 = false;

//전체 체크 기능
$('#agree_All').change(function () {

    console.log(123);
    let checkAll = $(this).is(':checked');
    console.log(checkAll)

    if (checkAll) {
        $(".agree_check").prop("checked", true);
        // $("#agree_Check1").prop("checked", true);
        // $("#agree_Check2").prop("checked", true);
        //agreeCheck1 = true;
        //agreeCheck2 = true;
    } else {
        $(".agree_check").prop("checked", false);
        //agreeCheck1 = false;
        //agreeCheck2 = false;
        // $("#agree_Check1").prop("checked", false);
        // $("#agree_Check2").prop("checked", false);
    }
})

//체크 안되어있는게 있으면 체크 해제
$('#agree_CheckAll').change(function () {
    let agreeCheckedCount = $(".agree_check:checked").length;

    let countAll = $(".agree_check").length;

    let notChecked = agreeCheckedCount == countAll;

    if (notChecked) {
        alert("약관에 모두 동의하셨는지 확인해주세요.");
        $(".agree_check").prop("checked", false);
        $("#agree_CheckAll").prop("checked", false);
    }
})

//각 버튼별 체크 기능
$('#agree_Check1').change(function () {
    agreeCheck1 = $(this).is(':checked');
})

$('#agree_Check2').change(function () {
    agreeCheck2 = $(this).is(':checked');
})

//다음단계 이동
$("#next_step_btn").click(function () {
    if (agreeCheck1 || agreeCheck2) {
        alert("약관에 모두 동의했는지 확인해주세요.");
        event.preventDefault();
    }
})

// step_02
// 휴대폰인증만 구현
// SESSION 에 인증번호 고정[123456] 지정하여 매칭후 본인확인 패스

let sessionVeriCodeNum = '';

$("#send_session_code_btn").click(function () {
    let regNum = new RegExp(/^010\d{4}\d{4}$/);
    let phoneNum = '';
    let inputNumCheck = true;

    $(".phone_num").each(function () {
        //입력에 제대로 되지 않았을 경우
        if ($(this).val() === '') {
            alert("입력이 제대로 되었는지 확인해주세요.");
            return inputNumCheck;
        }
        // 입력이 제대로 되었을 경우
        else {
            phoneNum += $(this).val();
        }
    })

    if (inputNumCheck) {
        let check = regNum.test(phoneNum);

        if (!check) { //전화번호 형식에 맞는지 확인
            alert("전화번호 형식에 맞지 않습니다.")
            console.log(error);
        } else { //맞다면 mode 'step_02'로 이동
            let data = {
                mode: 'step_02',
                phoneNum: phoneNum
            }
            // let data2= JSON.stringify(data);
            $.ajax("/ajax/member/memberAjax.php", {
                method: "POST",
                // dataType: 'json',
                data: data,
                // contentType: 'application/JSON',
                //JSON으로 묶어서 보낸 파일을 decode해줘야 함!
                //decode를 하지 않아서 undefined가 지속적으로 출력됨!
                success: function (data) {
                    console.log(data);
                    let test = JSON.parse(data);
                    // console.log('test=>', test);
                    // console.log('data=>', data);
                    // console.log(test.sessionVeriCode);
                    sessionVeriCodeNum = test.sessionVeriCode;
                    // console.log(sessionVeriCodeNum);
                    alert("인증에 성공하였습니다. 인증 번호는 " + sessionVeriCodeNum + "입니다.")
                },
                error: function (data) {
                    console.log(data)
                    alert("인증번호 발송에 실패하였습니다.");
                }
            })
        }
    }
});

//인증번호 확인
$("#check_sessionCode_btn").click(function () {
    let inputSessionVeriCode = $("#text_sessionCode").val();
    let checkSessionVeriCode = inputSessionVeriCode == sessionVeriCodeNum;

    // console.log(sessionVeriCodeNum)
    // console.log(inputSessionVeriCode);
    // console.log(checkSessionVeriCode);

    if (checkSessionVeriCode) {
        window.location.replace("/member/step_03.php");
    } else {
        alert("인증번호가 틀렸습니다.");
        $("#text_sessionCode").val("");
        $("#text_sessionCode").focus();
    }
});

//step_03 회원정보 입력하기
//아이디, 중복체크 기능 추가
//우편번호 찾기 다음 API활용
//휴대폰 번호 이미 입력했으니 default값으로 세팅
//이름, 아이디, 비밀번호, 이메일, 일반 전화, 주소 입력해야 함

let inputChecks = {
    nameCheck: false,
    idCheck: false,
    pwCheck: false,
    emailCheck: false,
    addressNumCheck: false
};

//회원가입 기능 구현
$("#join_btn").click(function () {
    //공백 불가능
    inputChecks = {
        nameCheck: false,
        idCheck: false,
        passwordCheck: false,
        emailCheck: false,
        addressNumCheck: false
    };
    inputChecks['nameCheck'] = $("#name_input").val() != '';
    inputChecks['idCheck'] = $("#id_input").val() != '';
    inputChecks['passwordCheck'] = $("#pw_input").val() != '';
    inputChecks['emailCheck'] = $("#email_input1").val() != '';
    inputChecks['addressNumCheck'] = $("#addressNum_input").val() != '';


    //ID 대문자 방지
    $("#id_input").on("keyup", function () {
        alert("아이디에는 대문자가 들어갈 수 없습니다.")
        $("#id_input").val("");
        $("#id_input").focus();
        inputChecks['idCheck'] = false;
    })

    //바밀번호 대문자 방지
    $("#pw_input").on("keyup", function () {
        alert("비밀번호에는 대문자가 들어갈 수 없습니다.")
        $("#pw_input").val("");
        $("#pw_input").focus();
        inputChecks['pwCheck'] = false;
    })

    // console.log($("#name_input").val())
    // console.log($("#id_input").val())
    // console.log($("#pw_input").val())
    // console.log($("#email_input1").val())
    // console.log($("#addressNum_input").val())
    // console.log(inputChecks['nameCheck'])
    // console.log(inputChecks['idCheck'])
    // console.log(inputChecks['passwordCheck'])
    // console.log(inputChecks['emailCheck'])
    // console.log(inputChecks['addressNumCheck'])
    // console.log(Object.values(inputChecks));

    if (Object.values(inputChecks).every(check => check)) {
        console.log(1)
        let nameInput = $("#name_input").val();
        let idInput = $("#id_input").val();
        let passwordInput = $("#pw_input").val();
        let emailInput = $("#email_input1").val() + "@" + $("#email_input2").val();

        let phoneInput = '';
        $(".phone").each(function () {
            let num = $(this).val();
            phoneInput += num;
        });

        let normalInput = '';
        $(".normal").each(function () {
            let num = $(this).val();
            normalInput += num;
        });

        let addressNumInput = $("#addressNum_input").val();
        let addressInput = $("#address_input").val();
        let extraAddressInput = $("#addressExtra_input").val();
        let smsSend = $(".sms:checked").val();
        let emailSend = $(".email:checked").val();

        // console.log(smsSend);
        // console.log(emailSend);

        let data = {
            mode: "step_03",
            id: idInput,
            name: nameInput,
            password: passwordInput,
            email: emailInput,
            phoneNum: phoneInput,
            normalNum: normalInput,
            addressNum: addressNumInput,
            address: addressInput,
            extraAddress: extraAddressInput,
            sendSMS: smsSend,
            sendEmail: emailSend
        }

        // console.log(data)

        $.ajax("/ajax/member/memberAjax.php", {
            method: "POST",
            data: data,
            dataType: 'json',

            success: function (data) {
                console.log(data.result)
                if (data.result) {
                    alert("회원가입이 완료되었습니다. 로그인 후, 사용이 가능합니다.")
                    window.location.replace("http://test.hackers.com/member/step_complete.php");
                } else {
                    console.log(data)
                    alert("정보를 바르게 입력했는지 확인해주세요.");
                }
            }
        })
    } else {
        alert("*이 있는 필수 입력칸을 모두 채워주세요.");
        console.log(2)
        event.preventDefault();
    }
})

//ID중복검사
$("#id_check_btn").click(function () {
    let idInput = $("#id_input").val();
    let data = {
        mode: 'id_check',
        idInput: idInput
    };

    $.ajax("/ajax/member/memberAjax.php", {
        method: "POST",
        data: data,
        success: function (data) {

            if (data.check) {
                alert("사용 가능한 아이디입니다.");
                inputChecks['idCheck'] = true;
                console.log(123);
            } else {
                alert("이미 사용중인 아이디입니다.");
                $("#id_input").val("");
                $("#id_input").focus();
                inputChecks['idCheck'] = false;
            }
        }
    })
})

//비밀번호랑 비밀번호 확인 탭이 같은지 확인
$("#pw_input_check").blur(function () {
    let pwInput = $("#pw_input").val();
    let pwInputCheck = $("#pw_input_check").val();

    //같은지 확인
    let check = pwInput == pwInputCheck;

    if (pwInputCheck) {
        //같을 경우
        if (check) {
            alert("비밀번호 확인이 완료되었습니다.");
            inputChecks['pwCheck'] = true;
        } else {
            alert("비밀번호를 확인해주세요.");
            $("pw_input_check").val("");
            $("pw_input_check").focus();
            inputChecks['pwCheck'] = false;
        }
    }
})

//email 선택
$(".select_email").on("change", function () {
    let address = $(this).val();
    $("#email_input2").val(address);
})

//다음 api연동해서 주소 찾기
//내부망이라서 다음api연동 불가로 코드만 작성

// $("#address_btn").click(function() {
//     return new Promise(function(resolve, reject) {
//         new daum.Postcode({
//             oncomplete: function (data) {
//                 var address = data.address;
//                 var extraAddress = '';
//
//                 // 법정동명이 있을 경우 추가한다. (법정리는 제외)
//                 // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
//                 if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
//                     extraAddress += data.bname;
//                 }
//
//                 // 건물명이 있고, 공동주택일 경우 추가한다.
//                 if(data.buildingName !== '' && data.apartment === 'Y'){
//                     extraAddress += (extraAddress !== '' ? ', ' + data.buildingName : data.buildingName);
//                 }
//
//                 // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
//                 if(extraAddress !== ''){
//                     extraAddress = ' (' + extraAddress + ')';
//                 }
//
//                 // 조합된 참고항목을 해당 필드에 넣는다.
//                 document.getElementById("addressNumInput").value = data.zonecode;
//                 document.getElementById("addressInput").value = address;
//             } else {
//                 document.getElementById("extraAddressInput").value = '';
//             }
//             resolve(data.zonecode);
//             }
//         }).open();
//     });
// })

//<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>