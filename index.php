<?php
session_start();

#include "member/header.php";
#echo, print_r(), var_dump()$_SERVER['DOCUMENT_ROOT']."/header.php";
#print_r($_SERVER);

//inclue로 절대 경로 이용
//header
//include $_SERVER["DOCUMENT_ROOT"] . "/layout/session.php";
include $_SERVER["DOCUMENT_ROOT"] . "/layout/header.php";
//print_r("ererer");
//print_r($_SESSION); exit();
?>

<div id="container">
    <div class="main-slider-applyclass">
        <div class="slider-applyclass col4" id="applyclass"><!-- 갯수 1개 class="col1" / 갯수 2개 class="col2"  -->
            <ul class="bxslider">
                <li style="background-color:#f00"><a href="#" target="_blank"><img
                                alt=""
                                height="350"
                                src="http://prep.champstudy.com/files/banner/f5de95619de01ed9517dbdea717f5f34.jpg"
                                width="1000"/></a></li>
                <li style="background-color:#0f0"><a href="#" target="_blank"><img
                                alt=""
                                height="350"
                                src="http://prep.champstudy.com/files/banner/af3751c41a59265cd6f7a7f0845cfd06.jpg"
                                width="1000"/></a></li>
                <li style="background-color:#00f"><a href="#" target="_blank"><img
                                alt=""
                                height="350"
                                src="http://prep.champstudy.com/files/banner/63fe4d746b676398f6371de4f6b4c015.jpg"
                                width="1000"/></a></li>
                <li style="background-color:#e7e7e7"><a href="#" target="_blank"><img
                                alt=""
                                height="350"
                                src="http://prep.champstudy.com/files/banner/a8a7dd7a6709de9439a1ab17f5779646.jpg"
                                width="1000"/></a></li>
            </ul>
            <div class="page-applyclass" id="bx-pager-apply">
                <a data-slide-index="0" href="#">오픈이벤트</a>
                <a data-slide-index="1" href="#">보험과 세금케이스</a>
                <a data-slide-index="2" href="#">경제기사 들여다보기</a>
                <a data-slide-index="3" href="#">크리에이티브 마케팅</a>
            </div>
        </div>
    </div>

    <div class="content" id="content">

        <div class="content-section after">
            <div class="inner">
                <div class="f-l">
                    <div class="main-tit-box-h3">
                        <h3 class="main-tit-h3">인기강의</h3>
                    </div>

                    <div class="tab-box">
                        <ul class="tab-best">
                            <li class="on"><a href="#">일반직무</a></li><!-- class="on" 활성화 -->
                            <li><a href="#">산업직무</a></li>
                            <li><a href="#">공통역량</a></li>
                            <li><a href="#">어학 및 자격증</a></li>
                        </ul>
                        <div class="tab-best-con">
                            <ul class="tab-category">
                                <li class="on"><a href="#">근로자카드</a></li><!-- class="on" 활성화 -->
                                <li><a href="#">사업주지원</a></li>
                                <li><a href="#">일반</a></li>
                            </ul>
                            <div class="tab-category-con">
                                <ul class="list-best">
                                    <li>
                                        <a href="#">
                                            <img alt=""
                                                 height="138"
                                                 src="http://www.champstudy.com/files/banner/imglib_files/banner/imglib/main_toeic_review.jpg"
                                                 width="198"/>
                                            <span class="txt">부자들이 모르는 35가지 보험과<br/>세금 케이스</span>
                                            <!-- 두줄 말줄임 개발처리 -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img alt=""
                                                 height="138"
                                                 src="http://www.champstudy.com/files/banner/imglib_files/banner/imglib/main_toeic_review.jpg"
                                                 width="198"/>
                                            <span class="txt">부자들이 모르는 35가지 보험과<br/>세금 케이스</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img alt=""
                                                 height="138"
                                                 src="http://www.champstudy.com/files/banner/imglib_files/banner/imglib/main_toeic_review.jpg"
                                                 width="198"/>
                                            <span class="txt">부자들이 모르는 35가지 보험과<br/>세금 케이스</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img alt=""
                                                 height="138"
                                                 src="http://www.champstudy.com/files/banner/imglib_files/banner/imglib/main_toeic_review.jpg"
                                                 width="198"/>
                                            <span class="txt">부자들이 모르는 35가지 보험과<br/>세금 케이스</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img alt=""
                                                 height="138"
                                                 src="http://www.champstudy.com/files/banner/imglib_files/banner/imglib/main_toeic_review.jpg"
                                                 width="198"/>
                                            <span class="txt">부자들이 모르는 35가지 보험과<br/>세금 케이스</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img alt=""
                                                 height="138"
                                                 src="http://www.champstudy.com/files/banner/imglib_files/banner/imglib/main_toeic_review.jpg"
                                                 width="198"/>
                                            <span class="txt">부자들이 모르는 35가지 보험과<br/>세금 케이스</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="f-r">

                    <div class="new-schedule">
                        <div class="main-tit-box-h3">
                            <h3 class="main-tit-h3">근로자카드 학사일정</h3>
                        </div>
                        <dl>
                            <dt><strong><em>D-07</em></strong> 2017년 7월 1기 모집</dt>
                            <dd>
                                <p>
                                    <strong><i class="icon-receipt"></i>접수기간</strong>
                                    <span>09/07(목)까지</span>
                                </p>
                                <p>
                                    <strong><i class="icon-learning"></i>학습기간</strong>
                                    <span>09/07(목)~09/08(금)</span>
                                </p>
                            </dd>
                        </dl>
                    </div>

                    <div class="new-lecture">
                        <div class="main-tit-box-h3">
                            <h3 class="main-tit-h3">신규강의</h3>
                        </div>

                        <ul class="tab-category2">
                            <li class="on"><a href="#"><span>근로자카드</span></a></li><!-- class="on" 활성화 -->
                            <li><a href="#"><span>사업주지원</span></a></li>
                            <li><a href="#"><span>일반</span></a></li>
                        </ul>
                        <div class="tab-category2-con">
                            <ul class="list-bbs">
                                <li>
                                    <a href="#">
                                        <span class="tc-brand"><strong>일반직무</strong></span>
                                        <span class="sbj ellipsis_line">부자들이 모르는 35가지 보험 부자들이 모르는 35가지 보험</span>
                                        <em><i class="icon-new"><span class="hidden">new</span></i></em>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="tc-brand"><strong>일반직무</strong></span>
                                        <span class="sbj ellipsis_line">부자들이 모르는 35가지 보험 부자들이 모르는 35가지 보험</span>
                                        <em><i class="icon-new"><span class="hidden">new</span></i></em>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="tc-brand"><strong>일반직무</strong></span>
                                        <span class="sbj ellipsis_line">부자들이 모르는 35가지 보험 부자들이 모르는 35가지 보험</span>
                                        <em><i class="icon-new"><span class="hidden">new</span></i></em>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="tc-brand"><strong>일반직무</strong></span>
                                        <span class="sbj ellipsis_line">부자들이 모르는 35가지 보험 부자들이 모르는 35가지 보험</span>
                                        <em><i class="icon-new"><span class="hidden">new</span></i></em>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="tc-brand"><strong>일반직무</strong></span>
                                        <span class="sbj ellipsis_line">부자들이 모르는 35가지 보험 부자들이 모르는 35가지 보험</span>
                                        <em><i class="icon-new"><span class="hidden">new</span></i></em>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="tc-brand"><strong>일반직무</strong></span>
                                        <span class="sbj ellipsis_line">부자들이 모르는 35가지 보험 부자들이 모르는 35가지 보험</span>
                                        <em><i class="icon-new"><span class="hidden">new</span></i></em>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section2">
            <div class="inner">
                <span class="tit">직장인 자기개발 교육! <strong>해커스와 정부가 수강료를 지원</strong>합니다.</span>
                <ul>
                    <li><a href="#"><img alt="" height="214" src="http://img.hackershrd.com/main/bnr01.png"
                                         width="324"/></a></li>
                    <li><a href="#"><img alt="" height="214" src="http://img.hackershrd.com/main/bnr02.png"
                                         width="324"/></a></li>
                    <li><a href="#"><img alt="" height="214" src="http://img.hackershrd.com/main/bnr03.png"
                                         width="324"/></a></li>
                </ul>
            </div>
        </div>

        <div class="content-section3 after">
            <div class="inner after">

                <div class="f-l">
                    <div class=" main-tit-box-h3">
                        <h3 class="main-tit-h3">BEST 수강후기</h3>
                    </div>
                    <ul class="list-bbs">
                        <li>
                            <a href="#">
                                <span class="tc-brand"><strong>일반직무</strong></span>
                                <span class="sbj ellipsis_line">부자들이 모르는 35가지 보험 부자들이 부자들이 부자들이 모르는 35가지 보험</span>
                                <em>아이디</em>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="tc-brand"><strong>일반직무</strong></span>
                                <span class="sbj ellipsis_line">부자들이 모르는 35가지 보험 부자들이 부자들이 부자들이 모르는 35가지 보험</span>
                                <em>아이디</em>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="tc-brand"><strong>일반직무</strong></span>
                                <span class="sbj ellipsis_line">부자들이 모르는 35가지 보험 부자들이 부자들이 부자들이 모르는 35가지 보험</span>
                                <em>아이디</em>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="tc-brand"><strong>일반직무</strong></span>
                                <span class="sbj ellipsis_line">부자들이 모르는 35가지 보험 부자들이 부자들이 부자들이 모르는 35가지 보험</span>
                                <em>아이디</em>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="tc-brand"><strong>일반직무</strong></span>
                                <span class="sbj ellipsis_line">부자들이 모르는 35가지 보험 부자들이 부자들이 부자들이 모르는 35가지 보험</span>
                                <em>아이디</em>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="f-r banner-box">
                    <div class="bxslider-default" data-auto="true" data-controls="true" data-mode="fade"
                         data-pager="true" style="height:254px">
                        <ul class="bxslider">
                            <li><a href="#"><img
                                            alt=""
                                            height="254"
                                            src="http://www.champstudy.com/files/banner/imglib_files/banner/imglib/300freepass_620x400.jpg"
                                            width="478"/></a></li>
                            <li><a href="#"><img
                                            alt=""
                                            height="254"
                                            src="http://www.champstudy.com/files/banner/imglib_files/banner/imglib/champ_zero_freepass_top_mainbn_620x400.jpg"
                                            width="478"/></a></li>
                            <li><a href="#"><img
                                            alt=""
                                            height="254"
                                            src="http://www.champstudy.com/files/banner/imglib_files/banner/imglib/2nd_foreign_620x400.jpg"
                                            width="478"/></a></li>
                            <li><a href="#"><img
                                            alt=""
                                            height="254"
                                            src="http://www.champstudy.com/files/banner/imglib_files/banner/imglib/grammargateway_0_blank_620x400.jpg"
                                            width="478"/></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="content-section4 after">
            <div class="inner after">

                <div class="f-l mr30">
                    <div class=" main-tit-box-h3 after">
                        <h3 class="main-tit-h3 f-l">공지사항</h3>
                        <a class="f-r mt5" href="#">더보기 +</a>
                    </div>
                    <ul class="list-bbs">
                        <li>
                            <a href="#">
                                <span class="sbj ellipsis_line">부자들이 모르는 35가지 보험 부자들이 부자들이 부자들이 모르는 35가지 보험</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sbj ellipsis_line">부자들이 모르는 35가지 보험 부자들이 부자들이 부자들이 모르는 35가지 보험</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sbj ellipsis_line">부자들이 모르는 35가지 보험 부자들이 부자들이 부자들이 모르는 35가지 보험</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sbj ellipsis_line">부자들이 모르는 35가지 보험 부자들이 부자들이 부자들이 모르는 35가지 보험</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sbj ellipsis_line">부자들이 모르는 35가지 보험 부자들이 부자들이 부자들이 모르는 35가지 보험</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="f-l">
                    <div class=" main-tit-box-h3 after">
                        <h3 class="main-tit-h3 f-l">FAQ</h3>
                        <a class="f-r mt5" href="#">더보기 +</a>
                    </div>
                    <ul class="list-bbs">
                        <li>
                            <a href="#">
                                <span class="sbj ellipsis_line">부자들이 모르는 35가지 보험 부자들이 부자들이 부자들이 모르는 35가지 보험</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sbj ellipsis_line">부자들이 모르는 35가지 보험 부자들이 부자들이 부자들이 모르는 35가지 보험</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sbj ellipsis_line">부자들이 모르는 35가지 보험 부자들이 부자들이 부자들이 모르는 35가지 보험</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sbj ellipsis_line">부자들이 모르는 35가지 보험 부자들이 부자들이 부자들이 모르는 35가지 보험</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sbj ellipsis_line">부자들이 모르는 35가지 보험 부자들이 부자들이 부자들이 모르는 35가지 보험</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="f-r cs-box">
                    <div class="cs-info">
                        <h3>고객센터</h3>
                        <strong class="tc-brand">02-566-3700</strong>
                        <p><i class="icon-time"><span class="hidden">운영시간</span></i>평일 9:00 – 23:00/ 주말 9:00 –18:00
                        </p>
                        <p><i class="icon-email"><span class="hidden">메일</span></i>help@champstudy.com</p>
                    </div>
                    <div class="after">
                        <a class="cs-btn f-l" href="#">1:1 상담게시판</a>
                        <a class="cs-btn f-r" href="#">기업교육 상담게시판</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="quick-bar">
            <div class="inner p-r">
                <ul class="list-link">
                    <li><a class="txt" href='/login/index.php?mode=login'>로그인</a></li>
                    <li><a class="txt" href="#">상담신청</a></li>
                    <li><a class="txt" href="#">장바구니</a></li>
                </ul>

                <dl>
                    <dt class="txt">오늘 본 과정 <em class="tc-brand">3</em>건</dt>
                    <dd>
                        <ul>
                            <li><a href="#"><img alt="" height="29"
                                                 src="http://www.hackershrd.com/html/images/sub/thum.gif"
                                                 width="41"/></a></li>
                            <li><a href="#"><img alt="" height="29"
                                                 src="http://www.hackershrd.com/html/images/sub/thum.gif"
                                                 width="41"/></a></li>
                            <li><a href="#"><img alt="" height="29"
                                                 src="http://www.hackershrd.com/html/images/sub/thum.gif"
                                                 width="41"/></a></li>
                            <li><a href="#"><img alt="" height="29"
                                                 src="http://www.hackershrd.com/html/images/sub/thum.gif"
                                                 width="41"/></a></li>
                        </ul>
                    </dd>
                </dl>
                <button class="js_top_scroll" type="button"><span class="hidden">최상단으로</span></button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        //main_slider_applyclass
        var bnrWrap = $('.slider-applyclass')
        var bnr_slider = bnrWrap.find('.bxslider');

        slider = bnr_slider.bxSlider({
            auto: true,
            mode: 'fade',
            cutLimit: 4,
            speed: 500,
            autoStart: true,
            pagerCustom: '#bx-pager-apply',
            onSliderLoad: function (selector) {
                bnrWrap.css("overflow", "visible");
            }
        });
        $('.page-applyclass').mouseover(function () {
            slider.startAuto();
        });
    });
</script>

<?php
//inclue로 절대 경로 이용
//footer
include $_SERVER["DOCUMENT_ROOT"] . "/layout/footer.php";
?>
<!-- footer -->
