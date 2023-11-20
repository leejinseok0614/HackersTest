<?php
include $_SERVER["DOCUMENT_ROOT"] . "/layout/header.php";
?>
<div class="container-full" id="container">
    <div class="content" id="content">
        <div class="inner">
            <div class="tit-box-h3">
                <h3 class="tit-h3">내정보수정</h3>
                <div class="sub-depth">
                    <span><i class="icon-home"><span>홈</span></i></span>
                    <strong>내정보수정</strong>
                </div>
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
                        <td>해커스</td>
                    </tr>
                    <tr>
                        <th scope="col"><span class="icons">*</span>아이디</th>
                        <td><input class="input-text" placeholder="영문자로 시작하는 4~15자의 영문소문자, 숫자" style="width:302px"
                                   type="text"/><a class="btn-s-tin ml10"
                                                   href="#">중복확인</a></td>
                    </tr>
                    <tr>
                        <th scope="col"><span class="icons">*</span>비밀번호</th>
                        <td><input class="input-text" placeholder="8-15자의 영문자/숫자 혼합" style="width:302px"
                                   type="password"/></td>
                    </tr>
                    <tr>
                        <th scope="col"><span class="icons">*</span>비밀번호 확인</th>
                        <td><input class="input-text" style="width:302px" type="password"/></td>
                    </tr>
                    <tr>
                        <th scope="col"><span class="icons">*</span>이메일주소</th>
                        <td>
                            <input class="input-text" style="width:138px" type="text"/> @ <input class="input-text"
                                                                                                 style="width:138px"
                                                                                                 type="text"/>
                            <select class="input-sel" style="width:160px">
                                <option value="">선택입력</option>
                                <option value="">선택입력</option>
                                <option value="">선택입력</option>
                                <option value="">선택입력</option>
                                <option value="">선택입력</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="col"><span class="icons">*</span>휴대폰 번호</th>
                        <td>010-9999-9999</td>
                    </tr>
                    <tr>
                        <th scope="col"><span class="icons"></span>일반전화 번호</th>
                        <td><input class="input-text" style="width:88px" type="text"/> - <input class="input-text"
                                                                                                style="width:88px"
                                                                                                type="text"/>
                            - <input class="input-text" style="width:88px" type="text"/></td>
                    </tr>
                    <tr>
                        <th scope="col"><span class="icons">*</span>주소</th>
                        <td>
                            <p>
                                <label>우편번호 <input class="input-text ml5" disabled style="width:242px"
                                                   type="text"/></label><a
                                        class="btn-s-tin ml10" href="#">주소찾기</a>
                            </p>
                            <p class="mt10">
                                <label>기본주소 <input class="input-text ml5" style="width:719px" type="text"/></label>
                            </p>
                            <p class="mt10">
                                <label>상세주소 <input class="input-text ml5" style="width:719px" type="text"/></label>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="col"><span class="icons">*</span>SMS수신</th>
                        <td>
                            <div class="box-input">
                                <label class="input-sp">
                                    <input checked="checked" id="" name="radio" type="radio"/>
                                    <span class="input-txt">수신함</span>
                                </label>
                                <label class="input-sp">
                                    <input id="" name="radio" type="radio"/>
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
                                    <input checked="checked" id="" name="radio2" type="radio"/>
                                    <span class="input-txt">수신함</span>
                                </label>
                                <label class="input-sp">
                                    <input id="" name="radio2" type="radio"/>
                                    <span class="input-txt">미수신</span>
                                </label>
                            </div>
                            <p>메일수신 시, 해커스의 혜택 및 이벤트 정보를 받아보실 수 있습니다.</p>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <div class="box-btn">
                    <a class="btn-l" href="#">정보수정</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include $_SERVER["DOCUMENT_ROOT"] . "/layout/footer.php";
?>
</div>
</body>
</html>
