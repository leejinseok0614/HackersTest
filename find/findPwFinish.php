<?php
include $_SERVER["DOCUMENT_ROOT"] . "/layout/header.php";
//include $_SERVER["DOCUMENT_ROOT"] . "/layout/session.php";
?>
    <div class="container-full" id="container">
        <div class="content" id="content">
            <div class="inner">
                <div class="tit-box-h3">
                    <h3 class="tit-h3">아이디/비밀번호 찾기</h3>
                    <div class="sub-depth">
                        <span><i class="icon-home"><span>홈</span></i></span>
                        <strong>아이디/비밀번호 찾기</strong>
                    </div>
                </div>

                <ul class="tab-list">
                    <li><a href="/find/index.php?mode=find_id">아이디 찾기</a></li>
                    <li class="on"><a href="/find/index.php?mode=find_pw">비밀번호 찾기</a></li>
                </ul>

                <div class="tit-box-h4">
                    <h3 class="tit-h4">비밀번호 재설정</h3>
                </div>

                <div class="section-content mt30">
                    <table border="0" cellpadding="0" cellspacing="0" class="tbl-col-join">
                        <caption class="hidden">비밀번호 재설정</caption>
                        <colgroup>
                            <col style="width:17%"/>
                            <col style="*"/>
                        </colgroup>

                        <tbody>
                        <tr>
                            <th scope="col">신규 비밀번호 입력</th>
                            <td><input id="input_password" class="input-text" placeholder="영문자로 시작하는 4~15자의 영문소문자,숫자"
                                       style="width:302px"
                                       type="text"/></td>
                        </tr>
                        <tr>
                            <th scope="col">신규 비밀번호 재확인</th>
                            <td><input id="input_password_check" class="input-text" style="width:302px" type="text"/>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="box-btn">
                        <a class="btn-l" id="reset_pw_btn" href="#">확인</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/find/findAjax.js"></script>

<?php
include $_SERVER["DOCUMENT_ROOT"] . "/layout/footer.php";
?>