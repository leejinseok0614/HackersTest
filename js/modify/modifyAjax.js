//email 선택
$(".select_email").on("change", function () {
    let address = $(this).val();
    $("#modify_email_address").val(address);
})

//ID중복검사
$("#modify_id_check_btn").click(function () {
    let idInput = $("#modify_id").val();

    let data = {
        mode: 'modify_id_check',
        idInput: idInput
    };

    $.ajax("/ajax/modify/modifyAjax.php", {
        method: "POST",
        data: data,
        success: function (data) {

            if (data.check) {
                alert("사용 가능한 아이디입니다.");
                inputChecks['idCheck'] = true;
                console.log(123);
            } else {
                alert("이미 사용중인 아이디입니다.");
                $("#modify_id").val("");
                $("#modify_id").focus();
                inputChecks['idCheck'] = false;
            }
        }
    })
})

//변경 탭과 비밀번호 확인 탭 같은지 확인
$("#modify_pw_check").blur(function () {
    let pwInput = $("#modify_pw").val();
    let pwInputCheck = $("#modify_pw_check").val();

    //같은지 확인
    let check = pwInput == pwInputCheck;

    if (pwInputCheck) {
        //같을 경우
        if (check) {
            modifyChecks['passwordCheck'] = true;
            alert("비밀번호 확인이 완료되었습니다.");
        } else {
            modifyChecks['passwordCheck'] = false;
            alert("비밀번호를 확인해주세요.");
            $("modify_pw_check").val("");
            $("modify_pw_check").focus();
        }
    }
})

// //ID 대문자 방지
// $("#modify_id").on("keyup", function () {
//     alert("아이디에는 대문자가 들어갈 수 없습니다.")
//     $("#modify_id").val("");
//     $("#modify_id").focus();
//     inputChecks['idCheck'] = false;
// })

//비밀번호
//바밀번호 대문자 방지
// $("#modify_pw").on("keyup", function () {
//     alert("비밀번호에는 대문자가 들어갈 수 없습니다.")
//     $("#modify_pw").val("");
//     $("#modify_pw").focus();
//     inputChecks['pwCheck'] = false;
// })

//아래 항목이 모두 입력되어야 함
let modifyChecks = {
    idCheck: false,
    passwordCheck: false,
    emailCheck: false,
    addressNumCheck: false
};

//정보수정 버튼 클릭시
$("#modify_btn").click(function () {
    console.log("정보수정 버튼 클릭");
    // console.log("1234");

    modifyChecks = {
        idCheck: false,
        passwordCheck: false,
        emailCheck: false,
        addressNumCheck: false
    };

    modifyChecks['idCheck'] = $("#modify_id").val() != '';
    modifyChecks['passwordCheck'] = $("#modify_pw").val() != '';
    modifyChecks['emailCheck'] = $("#modify_email").val() != '';
    modifyChecks['addressNumCheck'] = $("#modify_addressNum").val() != '';

    // console.log($("#modify_id").val())
    // console.log($("#modify_pw").val())
    // console.log($("#modify_email").val())
    // console.log($("#modify_addressNum").val())
    // console.log(modifyChecks['idCheck'])
    // console.log(modifyChecks['passwordCheck'])
    // console.log(modifyChecks['emailCheck'])
    // console.log(modifyChecks['addressNumCheck'])
    // console.log(Object.values(modifyChecks));

    // console.log(Object.values(modifyChecks).every(check => check));
    if (Object.values(modifyChecks).every(check => check)) {
        let id = $("#modify_id").val();
        let password = $("#modify_pw").val();
        let email = $("#modify_email").val() + "@" + $("#modify_email_address").val();

        let phoneNum = ''
        $(".phoneNum").each(function () {
            let num = $(this).val();
            phoneNum += num;
        })

        let normalNum = '';
        $(".normalNum").each(function () {
            let num = $(this).val();
            normalNum += num;
        })

        let addressCode = $("#modify_addressNum").val();
        let address = $("#modify_address").val();
        let extraAddress = $("#modify_extra_address").val();

        let sendSMS = $(".send_sms:checked").val(); //modify.php 수정 예정
        let sendEmail = $(".send_email:checked").val(); //modify.php 수정 예정

        // console.log('$_SESSION');

        let data = {
            mode: "modify",
            id: id,
            password: password,
            email: email,
            normalNum: normalNum,
            addressCode: addressCode,
            address: address,
            extraAddress: extraAddress,
            sendSMS: sendSMS,
            sendEmail: sendEmail
        }
        // console.log(data);
        $.ajax("/ajax/modify/modifyAjax.php", {
            method: "POST",
            data: data,

            success: function (data) {
                let test = JSON.parse(data);
                // let test = JSON.parse(data);
                // console.log(test);
                if (test.result) {
                    console.log(data);
                    alert("정보 수정이 완료되었습니다. 다시 로그인해주세요.");
                    window.location.replace("/login/index.php?mode=logout");
                } else {
                    console.log(data);
                    alert("정보 수정를 바르게 입력후, 정보 수정을 다시 시도해주세요.");
                }
            }
        })
    } else {
        console.log('error');
        alert("필수 입력칸을 모두 채우지 않았습니다.");
        event.preventDefault();
    }
})