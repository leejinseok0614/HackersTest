// 아이디/패스워드 찾기 구현
// - 휴대폰,이메일 인증 모두구현
// - 실제 메일, 휴대폰 인증번호(패스워드) 고정[123456] 조회되도록 세션처리하여 인증번호 확인절차 진행
// - /member/index.php?mode=find_id
// - /member/index.php?mode=find_pass

//연도별은 php로 작성, 월만 2월때매 복잡해서 하나하나 적음
let month = {
    1: 31,
    2: 28,
    3: 31,
    4: 30,
    5: 31,
    6: 30,
    7: 31,
    8: 31,
    9: 30,
    10: 31,
    11: 30,
    12: 31
};

//월 + 일선택
$("#month_input").on('change', function () {
    let date = month[$("#month_input")].val();

    for (let i = 1; i <= date; i++) {
        $("#date_input").append("<option value()'" + i + "'>" + i + "</option>")
    }
})

//email 주소 선택
$(".select_email").on('change', function () {
    let address = $(this).val();
    $("#email_address_input").val(address);
})

let sessionEmailCode = '';
console.log("전역 변수 : " + sessionEmailCode)
//인증번호 받기 버튼을 누를 경우 (SESSION에 저장)
$("#send_code_btn").click(function () {
    let email = $("#email_input").val();
    let fullEmail = email + "@" + $("#email_address_input").val();

    let data = {
        mode: 'find_id_send_code',
        fullEmail: fullEmail
    };

    if (email) {
        $.ajax("/ajax/find/findAjax.php", {
            method: "POST",
            data: data,
            success: function (data) {
                console.log("인증번호 받기 버튼 클릭")
                console.log(data)
                let test = JSON.parse(data);
                console.log(test)
                sessionEmailCode = test.sessionEmailCode;
                console.log("값 받음 : " + sessionEmailCode)
                alert("인증번호가 제대로 발송되었습니다.");
            }
        })
    } else {
        alert("이메일 주소를 확인해주세요.")
    }
})

//인증번호 확인 버튼을 누르면 -> mode: find_id로 이동
$("#email_code_check_btn").click(function () {
    console.log("확인 버튼 클릭 : " + sessionEmailCode)
    let VeriCodeCheck = $("#email_code_check_input").val();

    if (VeriCodeCheck) {
        if (VeriCodeCheck == sessionEmailCode) {
            let name = $("#name_input").val();
            let email = $("#email_input").val() + "@" + $("#email_address_input").val();

            let data = {
                mode: 'find_id',
                name: name,
                email: email
            }
            console.log(data);

            $.ajax("/ajax/find/findAjax.php", {
                method: "POST",
                data: data,
                success: function (data) {
                    let test = JSON.parse(data);
                    console.log(test)
                    // let abc = JSON.parse(data);
                    if (test.check) {
                        // console.log(data);
                        // console.log("됨")
                        // let test = JSON.parse(data);
                        // console.log('test=>', test);
                        // console.log('data=>', data);
                        // console.log(test.sessionVeriCode);
                        window.location.replace("http://test.hackers.com/find/findIdFinish.php#");
                    } else {
                        // console.log(data);
                        // console.log("안됨")
                        // console.log(data);
                        alert("가입되지 않은 회원입니다.");
                    }
                }
            })
        } else {
            alert("인증번호가 맞지 않습니다. 다시 확인해주세요.");
        }
    } else {
        alert("인증번호 받기 버튼을 눌러주세요.");
    }
})