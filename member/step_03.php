<?php
include $_SERVER["DOCUMENT_ROOT"] . "/layout/header.php";
include $_SERVER["DOCUMENT_ROOT"] . "/layout/session.php";
//
//$hostname = "localhost";
//#$hostname = "192.168.1.0";
//$username = "root";
//$password = "root";
//$dbname = "test";
//#$dbname = "";
//$port = "3306";
//
//$conn = mysqli_connect($hostname, $username, $password);
//#or die("html>script language='JavaScript'>alert('Unable to connect to Database! Please try again later!.')/history.go(-1_/script>html>");
//
//if ($conn->connect_error) {
//    echo "error";
//} else {
//    echo "야호";
//}
//
//?>

    <div class="container-full" id="container">
        <div class="content" id="content">
            <div class="inner">
                <div class="tit-box-h3">
                    <h3 class="tit-h3">회원가입</h3>
                    <div class="sub-depth">
                        <span><i class="icon-home"><span>홈</span></i></span>
                        <strong>회원가입</strong>
                    </div>
                </div>

                <div class="join-step-bar">
                    <ul>
                        <li><i class="icon-join-agree"></i> 약관동의</li>
                        <li><i class="icon-join-chk"></i> 본인확인</li>
                        <li class="last on"><i class="icon-join-inp"></i> 정보입력</li>
                    </ul>
                </div>

                <div class="section-content">
                    <table border="0" cellpadding="0" cellspacing="0" class="tbl-col-join">
                        <caption class="hidden">강의정보</caption>
                        <colgroup>
                            <col style="width:15%"/>
                            <col style="*"/>
                        </colgroup>

                        <tbody>
                        <tr>
                            <th scope="col"><span class="icons">*</span>이름</th>
                            <td><input class="input-text" id="name_input" style="width:302px" type="text"/></td>
                        </tr>
                        <tr>
                            <th scope="col"><span class="icons">*</span>아이디</th>
                            <td><input class="input-text" id="id_input" placeholder="영문자로 시작하는 4~15자의 영문소문자, 숫자"
                                       style="width:302px"
                                       type="text"/><a class="btn-s-tin ml10" id="id_check_btn"
                                                       href="#">중복확인</a></td>
                        </tr>
                        <tr>
                            <th scope="col"><span class="icons">*</span>비밀번호</th>
                            <td><input class="input-text" id="pw_input" placeholder="8-15자의 영문자/숫자 혼합"
                                       style="width:302px"
                                       type="password"/></td>
                        </tr>
                        <tr>
                            <th scope="col"><span class="icons">*</span>비밀번호 확인</th>
                            <td><input class="input-text" id="pw_input_check" style="width:302px" type="password"/></td>
                        </tr>
                        <tr>
                            <th scope="col"><span class="icons">*</span>이메일주소</th>
                            <td>
                                <input class="input-text" id="email_input1" style="width:138px" type="text"/> @ <input
                                        class="input-text" id="email_input2"
                                        style="width:138px"
                                        type="text"/>
                                <select class="input-sel select_email" style="width:160px">
                                    <option value="">선택입력</option>
                                    <option value="gmail.com">구글</option>
                                    <option value="naver.com">네이버</option>
                                    <option value="kakao.com">카카오</option>
                                    <option value="github.com">Git</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col"><span class="icons">*</span>휴대폰 번호</th>
                            <td>
                                <input class="input-text phone" value="<?php
                                echo substr($row['phoneNum'], 0, 3)
                                ?>" style="width:50px" type="text"/> -
                                <input class="input-text phone" value="<?php
                                echo substr($row['phoneNum'], 3, 4)
                                ?>" style="width:50px" type="text"/> -
                                <input class="input-text phone" value="<?php
                                echo substr($row['phoneNum'], 7, 4)
                                ?>" style="width:50px" type="text"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col"><span class="icons"></span>일반전화 번호</th>
                            <td><input class="input-text normal" style="width:88px" type="text"/> - <input
                                        class="input-text normal"
                                        style="width:88px"
                                        type="text"/>
                                - <input class="input-text normal" style="width:88px" type="text"/></td>
                        </tr>
                        <tr>
                            <th scope="col"><span class="icons">*</span>주소</th>
                            <td>
                                <p>
                                    <label>우편번호 <input class="input-text ml5" id="addressNum_input"
                                                       style="width:242px" type="text"/></label><a
                                            class="btn-s-tin ml10" id="address_btn" href="#">주소찾기</a>
                                </p>
                                <p class="mt10">
                                    <label>기본주소 <input class="input-text ml5" id="address_input" style="width:719px"
                                                       type="text"/ ></label>
                                </p>
                                <p class="mt10">
                                    <label>상세주소 <input class="input-text ml5" id="addressExtra_input"
                                                       style="width:719px"
                                                       type="text"/></label>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col"><span class="icons">*</span>SMS수신</th>
                            <td>
                                <div class="box-input">
                                    <label class="input-sp">
                                        <input class="sms" checked="checked" name="sendSMS" type="radio" value=1>
                                        <span class="input-txt">수신함</span>
                                    </label>
                                    <label class="input-sp">
                                        <input class="sms" name="sendSMS" type="radio" value=0>
                                        <span class="input-txt">미수신</span>
                                    </label>
                                </div>
                                <p>SMS수신 시, 해커스의 혜택 및 이벤트 정보를 받아보실 수 있습니다.</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col"><span class="icons">*</span>메일수신</th>
                            <td>
                                <div class="box-input">
                                    <label class="input-sp">
                                        <input class="email" checked="checked" name="sendEmail" type="radio" value=1>
                                        <span class="input-txt">수신함</span>
                                    </label>
                                    <label class="input-sp">
                                        <input class="email" name="sendEmail" type="radio" value=0>
                                        <span class="input-txt">미수신</span>
                                    </label>
                                </div>
                                <p>메일수신 시, 해커스의 혜택 및 이벤트 정보를 받아보실 수 있습니다.</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="box-btn">
                        <a class="btn-l" id="join_btn" href="#"> 회원가입</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/member/memberAjax.js"></script>
    <!--    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>-->
<?php
include $_SERVER["DOCUMENT_ROOT"] . "/layout/footer.php";
