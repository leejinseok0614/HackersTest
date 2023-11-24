//정보 수정 페이지


//email 선택
$(".select_email").on("change", function () {
    let address = $(this).val();
    $("#modify_email_address").val(address);
})

//아래 항목이 모두 입력되어야 함
let modifyChecks = {
    idCheck: false,
    passwordCheck: false,
    emailCheck: false,
    addressCodeCheck: false
};

//비밀번호 변경 탭과 비밀번호 확인 탭 같은지 확인
$("#modify_pw_check").blur(function () {
    let pwInput = $("#modify_pw").val();
    let pwInputCheck = $("#modify_pw_check").val();

    //같은지 확인
    let check = pwInput == pwInputCheck;

    if (pwInputCheck) {
        //같을 경우
        if (check) {
            alert("비밀번호 확인이 완료되었습니다.");
            inputChecks['pwCheck'] = true;
        } else {
            alert("비밀번호를 확인해주세요.");
            $("modify_pw_check").val("");
            $("modify_pw_check").focus();
            inputChecks['pwCheck'] = false;
        }
    }
})

//정보수정 버튼 클릭시
$("#modify_btn").click(function () {
    //ID 대문자 방지
    $("#modify_id").on("keyup", function () {
        alert("아이디에는 대문자가 들어갈 수 없습니다.")
        $("#modify_id").val("");
        $("#modify_id").focus();
        inputChecks['idCheck'] = false;
    })

    //바밀번호 대문자 방지
    $("#modify_pw").on("keyup", function () {
        alert("비밀번호에는 대문자가 들어갈 수 없습니다.")
        $("#modify_pw").val("");
        $("#modify_pw").focus();
        inputChecks['pwCheck'] = false;
    })

    if (Object.values(modifyChecks).every(check => check)) {
        let id = $("#modify_id").val();
        let password = $("#modify_pw").val();
        let email = $("#modify_email").val() + "@" + $("#modify_email_address");
        let phoneNum = $(".phoneNum").each(function () {
            let num = $(this).val();
            phoneNum += num;
        })

        let normalNum = $(".normalNum").each(function () {
            let num = $(this).val();
            normalNum += num;
        })

        let addressCode = $("#modify_addressCode").val();
        let address = $("#modify_address").val();
        let extraAddress = $("#modify_extra_address").val();

        let sendSMS = $(".send_sms:checked").val(); //modify.php 수정 예정
        let sendEmail = $(".send_email:checked").val(); //modify.php 수정 예정

        let data = {
            mode: "modify",
            id: id,
            password: password,
            email: email,
            phoneNum: phoneNum,
            normalNum: normalNum,
            addressCode: addressCode,
            address: address,
            extraAddress: extraAddress,
            sendSMS: sendSMS,
            sendEmail: sendEmail
        }
        // console.log(data);
        $.ajax("/ajax/member/memberAjax.php", {
            method: "POST",
            data: data,
            success: function (data) {
                if (data.result) {
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