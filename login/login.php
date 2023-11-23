<?php
include $_SERVER["DOCUMENT_ROOT"] . "/layout/login_header.php";
//include $_SERVER["DOCUMENT_ROOT"] . "/layout/session.php";
?>

<div class="login-section">
    <div class="bg"></div>
    <div class="login-inner">
        <h1><a href="/"><img alt="해커스 HRD LOGO" height="31" src="http://img.hackershrd.com/common/logo.png"
                             width="142"/></a></h1>
        <div class="box-login">

            <div class="login-input">
                <form name="login" id="login" method="post">
                    <div class="input-text-box">
                        <input class="input-text mb5" placeholder="아이디" style="width:190px" type="text" name="id_input"
                               id="id_input"/>
                        <input class="input-text" placeholder="비밀번호" style="width:190px" type="text"
                               name="password_input" id="password_input"/>
                    </div>
                    <button class="btn-login" type="submit">로그인</button>
                </form>
            </div>

            <div class="login-chk">
                <label class="input-sp">
                    <input type="checkbox"/>
                    <span class="input-txt">아이디 저장</span>
                </label>
                <label class="input-privacy on">보안접속 ON <input title="IP 보안이 켜져 있습니다. IP보안을 사용하지 않으시려면 선택을 해제해주세요."
                                                               type="checkbox"/></label>
                <!-- <label class="input-privacy">보안접속 OFF <input type="checkbox" title="보안이 꺼져 있습니다. 보안을 사용하려면 선택해주세요." /></label> -->
            </div>

            <div class="box-btn">
                <a class="btn-m-gray" href="/member/index.php?mode=step_01">회원가입</a>
                <a class="btn-m-gray" href="/find/index.php?mode=find_id">ID/PW 찾기</a>
            </div>
        </div>
        <div class="login-guide">
            <strong><i class="icon-guide"></i>로그인에 문제가 있으신가요?</strong>
            <ol>
                <li>① 인터넷 창 상단 [도구] - [인터넷 옵션] - [보안] - [사용자 지정 수준] - [보통] 으로 설정해주세요.</li>
                <li>② 인터넷 창을 껐다 다시 켜주세요. 그래도 로그인에 문제가 있으시다면 <a href="#"><strong class="tc-brand">[고객센터]</strong></a>를 통해
                    문의해주세요.
                </li>
            </ol>
        </div>

        <div class="link-box">
            <a href="#">환급과정안내</a>
            <a href="#">기업교육문의</a>
            <a href="#">상담/고객센터</a>
        </div>

        <div class="login-banner">
            <div class="bxslider-default" data-auto="true" data-controls="true" data-mode="fade" data-pager="true"
                 style="height:182px">
                <ul class="bxslider">
                    <li><img
                                alt=""
                                height="182"
                                src="http://www.champstudy.com/files/banner/imglib_files/banner/imglib/300freepass_620x400.jpg"
                                width="262"/></li>
                    <li><img
                                alt=""
                                height="182"
                                src="http://www.champstudy.com/files/banner/imglib_files/banner/imglib/champstudy_first_toeic_class_620x400.jpg"
                                width="262"/></li>
                    <li><img
                                alt=""
                                height="182"
                                src="http://www.champstudy.com/files/banner/imglib_files/banner/imglib/teps0freepass_620x400.jpg"
                                width="262"/></li>
                    <li><img
                                alt=""
                                height="182"
                                src="http://www.champstudy.com/files/banner/imglib_files/banner/imglib/2nd_foreign_620x400.jpg"
                                width="262"/></li>
                </ul>
            </div>
        </div>
    </div>
    <span class="login-close"><button class="icon-layer-close" type="button"><span
                    class="hidden">닫기</span></button></span>
</div>
</body>
</html>

<script src="/js/login/loginAjax.js"></script>
