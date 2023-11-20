<?php
include $_SERVER["DOCUMENT_ROOT"] . "/layout/header.php";
?>

    <div class="container-full" id="container">
        <div class="content" id="content">
            <div class="inner">
                <div class="tit-box-h3">
                    <h3 class="tit-h3">회원가입</h3>
                    <div class="sub-depth">
                        <span><i class="icon-home"><span>홈</span></i></span>
                        <strong>회원가입 완료</strong>
                    </div>
                </div>

                <div class="join-step-bar">
                    <ul>
                        <li><i class="icon-join-agree"></i> 약관동의</li>
                        <li class="on"><i class="icon-join-chk"></i> 본인확인</li>
                        <li class="last"><i class="icon-join-inp"></i> 정보입력</li>
                    </ul>
                </div>

                <div class="tit-box-h4">
                    <h3 class="tit-h4">본인인증</h3>
                </div>

                <div class="section-content after">
                    <div class="identify-box" style="width:100%;height:190px;">
                        <div class="identify-inner">
                            <strong>휴대폰 인증</strong>
                            <p>주민번호 없이 메시지 수신가능한 휴대폰으로 1개 아이디만 회원가입이 가능합니다. </p>

                            <br/>
                            <input class="input-text phone_num" style="width:50px" type="text"/> -
                            <input class="input-text phone_num" style="width:50px" type="text"/> -
                            <input class="input-text phone_num" style="width:50px" type="text"/>
                            <a class="btn-s-line" id="send_session_code_btn" href="#">인증번호 받기</a>

                            <br/><br/>
                            <input class="input-text_sessionCode" id="text_sessionCode" style="width:200px"
                                   type="text"/>
                            <a class="btn-s-line" id="check_sessionCode_btn" href="#">인증번호 확인</a>
                        </div>
                        <i class="graphic-phon"><span>휴대폰 인증</span></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/member/memberAjax.js"></script>

<?php
include $_SERVER["DOCUMENT_ROOT"] . "/layout/footer.php";
?>