// 로그인/로그아웃기능 구현
// - 세션으로 로그인함.
// - 로그인 성공시 리퍼러를 활용한 페이지 리다이렉트 처리
// - 로그인 실패시 로그인 실패사유에 대한 경고창(alert) 발생 및 다시 로그인하도록 복귀
// - 로그인 및 로그아웃 상태에서 상단 로그인/로그아웃 버튼 변경 필요
// - /member/login.html
$('#login button[type=submit]').click(function () {

    // console.log("버튼 클릭");
    let userId = $('#id_input').val();
    let userPwd = $('#password_input').val();

    // console.log(userId);
    // console.log(userPwd);

    let data = {
        mode: 'login',
        id: userId,
        password: userPwd
    }
    console.log(data);

    $.ajax("/ajax/login/loginAjax.php", {
        method: "POST",
        data: data,
        // dataType: 'json',
        success: function (data) {
            console.log(data);
            if (data.result) {
                alert("로그인에 성공하였습니다.");
                window.location.replace("http://test.hackers.com/index.php");
            } else {
                // console.log(data);
                alert("아이디나 비밀번호를 확인해주세요.");
            }
        }
    })
})