//정보 수정 페이지

//아래 항목이 모두 입력되어야 함
let modifyChecks = {
    idCheck: false,
    passwordCheck: false,
    emailCheck: false,
    addressCodeCheck: false
};

//정보수정 버튼 클릭시
$("#modify_btn").click(function () {
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

        $.ajax("/ajax/member/memberAjax.php", {
            method: "POST",
            data: data,
            success: function (data) {
                if (data.result) {
                    alert("정보 수정이 완료되었습니다. 다시 로그인해주세요.");
                    window.location.replace("/login/index.php?mode=logout");
                } else {
                    alert("정보 수정를 바르게 입력후, 정보 수정을 다시 시도해주세요.");
                }
            }
        })
    } else {
        alert("필수 입력칸을 모두 채우지 않았습니다.");
    }
})