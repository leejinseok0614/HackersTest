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
                    <li class="on"><a href="/find/index.php?mode=find_id">아이디 찾기</a></li>
                    <li><a href="/find/index.php?mode=find_pw">비밀번호 찾기</a></li>
                </ul>

                <div class="tit-box-h4">
                    <h3 class="tit-h4">아이디 찾기 방법 선택</h3>
                </div>

                <dl class="find-box">
                    <dt>휴대폰 인증</dt>
                    <dd>
                        고객님이 회원 가입 시 등록한 휴대폰 번호와 입력하신 휴대폰 번호가 동일해야 합니다.
                        <label class="input-sp big">
                            <input name="radio" type="radio"/>
                            <span class="input-txt"></span>
                        </label>
                    </dd>
                </dl>

                <dl class="find-box">
                    <dt>이메일 인증</dt>
                    <dd>
                        고객님이 회원 가입 시 등록한 이메일 주소와 입력하신 이메일 주소가 동일해야 합니다.
                        <label class="input-sp big">
                            <input name="radio" checked="checked" type="radio"/>
                            <span class="input-txt"></span>
                        </label>
                    </dd>
                </dl>

                <div class="section-content mt30">
                    <table border="0" cellpadding="0" cellspacing="0" class="tbl-col-join">
                        <caption class="hidden">아이디 찾기 개인정보 입력</caption>
                        <colgroup>
                            <col style="width:15%"/>
                            <col style="*"/>
                        </colgroup>

                        <tbody>
                        <tr>
                            <th scope="col">성명</th>
                            <td><input class="input-text" id="name_input" style="width:302px" type="text"/></td>
                        </tr>
                        <tr>
                            <th scope="col">생년월일</th>
                            <td>
                                <select class="input-sel" style="width:148px">
                                    <option value="">선택</option>
                                    <?php
                                    for ($i = 1990; $i < 2024; $i++) {
                                        echo "<option value='$i'>$i</option>";
                                    }
                                    ?>
                                </select>
                                년
                                <select class="input-sel" id="month_input" style="width:147px">
                                    <option value="">선택</option>
                                    <?php
                                    for ($i = 1; $i < 13; $i++) {
                                        echo "<option value='$i'>$i</option>";
                                    }
                                    ?>
                                </select>
                                월
                                <select class="input-sel" style="width:147px">
                                    <option value="">선택</option>
                                    <?php
                                    for ($i = 1; $i < 32; $i++) {
                                        echo "<option value='$i'>$i</option>";
                                    }
                                    ?>
                                </select>
                                일
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">이메일주소</th>
                            <td>
                                <input class="input-text" id="email_input" style="width:138px" type="text"/> @
                                <input class="input-text" id="email_address_input"
                                       style="width:138px"
                                       type="text"/>
                                <select class="input-select_email" style="width:160px">
                                    <option value="">선택입력</option>
                                    <option value="gmail.com">구글</option>
                                    <option value="naver.com">네이버</option>
                                    <option value="kakao.com">카카오</option>
                                    <option value="github.com">Git</option>
                                </select>
                                <a class="btn-s-tin ml10" id="send_code_btn" href="#">인증번호 받기</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">인증번호</th>
                            <td><input class="input-text" id="email_code_check_input" style="width:478px"
                                       type="text"/><a class="btn-s-tin ml10" id="email_code_check_btn"
                                                       href="#">인증번호
                                    확인</a></td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <script src="/js/find/findAjax.js"></script>
<?php
include $_SERVER["DOCUMENT_ROOT"] . "/layout/footer.php";
