<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png"/>
    <title>HITE 진로:인사말</title>
   <!-- 공통css파일 -->
    <? include("include/common-css.html") ?>

    <link rel="stylesheet" href="css/greeting.css">

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        // 공통 html 코드 불러오기
        $("#top").load("header.html");  // 원하는 파일 경로를 삽입하면 된다
        $("footer").load("footer.html");
        $(document).ready(function(){

           // 목록항목의 p와 a를 둘러싸시오
            $("#product ul.list li").each(function(){// each()는 앞요소갯수만큼 순차적으로 실행하시오; 
                $(this).children("p,a").wrapAll("<div class='wtext'></div>"); 
                // wrapAll('<태그></태그'); 앞요소를 둘러싸시오(괄호안의 태그로)
                $(".wtext").hide();
            }); 
           // 프로덕트 제품오버시 설명글 표시
                //목록항목에 마우스 올리면 실행하시오
            $("#product ul.list li").hover(
                        function(){ //mouseenter
                            // 마우스 올린 li의 자식인 wtext를 fadeIn();하시오
                            $(this).children(".wtext").stop().fadeIn();//fadeIn() 서서히 나타나게 하시오
                            // 마우스 올린 li의 자식인 wtext에 클래스를 붙여라(scaleX100)
                            $(this).children(".wtext").addClass("scaleX100");
                            // 마우스 올린 li가 아닌 다른 형제요소들의 자식 wtext에 클래스를 없애라(scaleX100)
                            $(this).siblings().children("wtext").removeClass("scaleX100");
                        },
                        function(){ //mouseleave
                            $(this).children(".wtext").stop().fadeOut();//서서히 사라지게 하시오
                            // 마우스 올린 li의 자식인 wtext에 클래스를 없애라(scaleX100)
                            $(this).children(".wtext").removeClass("scaleX100");
                        }
                    );
                /* 반응형에 따른 요소제어(보이기) */
                if($(window).width()<=1200){ // $(window).width() 윈도우의 크기 값을 가져와라
                    // 모바일시 brand제목을 헤더로 옮기기
                        $("aside .wrap h2").appendTo("header .wrap nav"); 
                        /* 타이틀 이미지 모바일용으로 교체 */
                        //타이틀 영역의 img태그의 속성 값을 변경하시오
                        /* $("div#subtitle .wrap img[src='img/i1.jpg']").attr("src","img/m/m-title1.jpg");
                        $("div#subtitle .wrap img[src='img/i2.jpg']").attr("src","img/m/m-title2.jpg");
                        $("div#subtitle .wrap img[src='img/i3.jpg']").attr("src","img/m/m-title3.jpg");
                        $("div#subtitle .wrap img[src='img/i4.jpg']").attr("src","img/m/m-title4.jpg");
                        $("div#subtitle .wrap img[src='img/i5.jpg']").attr("src","img/m/m-title5.png");
                        $("div#subtitle .wrap img[src='img/i6.jpg']").attr("src","img/m/m-title6.png");
                        $("div#subtitle .wrap img[src='img/i7.jpg']").attr("src","img/m/m-title7.png");
                        $("div#subtitle .wrap img[src='img/i8.jpg']").attr("src","img/m/m-title8.jpg");
                        $("div#subtitle .wrap img[src='img/i9.jpg']").attr("src","img/m/m-title9.jpg");
                        $("div#subtitle .wrap img[src='img/i10.jpg']").attr("src","img/m/m-title10.png"); */

                        var n=1; //변수선언과 초기화
                        // 변수 키워드 변수명=데이터, 변수수 키워드 var(변수: 데이터를 담는 그릇)
                        // 변수명 n , = 넣어라(대입연산자, 부호) 1은 숫자데이터
                        // 해석: 변수 n에 1을 넣어라
                        $("div#subtitle .wrap img").each(function(){
                            $("div#subtitle .wrap img:nth-child("+n+")").attr("src","img/m/m-title"+n+".jpg");
                            // 문자열과 변수를 연결 "문자열"+변수
                            n++; //n에 들어있는 값을 1씩 증가시키시오
                        });

                        // 어사이드의 img를 모바일용 이미지로 교체하기
                        /* $("aside .wrap ul.list > li ul.listsub li:nth-child(1) a img").attr("src","img/aside/1-1-m.png");
                        $("aside .wrap ul.list > li ul.listsub li:nth-child(2) a img").attr("src","img/aside/1-2-m.png");
                        $("aside .wrap ul.list > li ul.listsub li:nth-child(3) a img").attr("src","img/aside/1-3-m.png");
                        $("aside .wrap ul.list > li ul.listsub li:nth-child(4) a img").attr("src","img/aside/1-4-m.png");
                        $("aside .wrap ul.list > li ul.listsub li:nth-child(5) a img").attr("src","img/aside/1-5-m.png"); */

                        var i=1; // 알파벳은 주기 나름
                        var m=1;

                        $("aside .wrap ul.list > li").each(function(){
                            $("aside .wrap ul.list > li:nth-child("+i+") ul.listsub li a img").each(function(){
                                $("aside .wrap ul.list > li:nth-child("+i+") ul.listsub li:nth-child("+m+") a img").attr("src","img/aside/"+i+"-"+m+"-m.png");
                                m++;
                            });
                            i++;
                            m=1; // 1세트 끝나면 초기화 된다
                        });
                }

            //윈도우창 사이즈가 바뀌면 실행하시오
            $(window).resize(function(){
                    //윈도우창이 1200보다 작거나 같을 때
                    if($(window).width()<=1200){
                        $("aside .wrap h2").appendTo("header .wrap nav"); 
                    /* 타이틀 이미지 모바일용으로 교체 */
                        //타이틀 영역의 img태그의 속성값을 변경하시오
                        /* 
                        $("div#subtitle .wrap img[src='img/i1.jpg']").attr("src","img/m/m-title1.jpg");
                        $("div#subtitle .wrap img[src='img/i2.jpg']").attr("src","img/m/m-title2.jpg");
                        $("div#subtitle .wrap img[src='img/i3.jpg']").attr("src","img/m/m-title3.jpg");
                        $("div#subtitle .wrap img[src='img/i4.jpg']").attr("src","img/m/m-title4.jpg");
                        $("div#subtitle .wrap img[src='img/i5.jpg']").attr("src","img/m/m-title5.png");
                        $("div#subtitle .wrap img[src='img/i6.jpg']").attr("src","img/m/m-title6.png");
                        $("div#subtitle .wrap img[src='img/i7.jpg']").attr("src","img/m/m-title7.png");
                        $("div#subtitle .wrap img[src='img/i8.jpg']").attr("src","img/m/m-title8.jpg");
                        $("div#subtitle .wrap img[src='img/i9.jpg']").attr("src","img/m/m-title9.jpg");
                        $("div#subtitle .wrap img[src='img/i10.jpg']").attr("src","img/m/m-title10.png"); 
                        */
                        var n = 1; // 변수선언과 초기화
                        $("div#subtitle .wrap img").each(function(){ // 반복회수를 지정
                            //subtitle wrap 안에 있는 img를 src 안에 있는 이미지로 바꿔라
                            $("div#subtitle .wrap img:nth-child("+n+")").attr("src","img/m/m-title"+n+".jpg");
                            n++; // n에 들어간 값이 실행할 때마다 바뀌어야 하기 떄문이다 / 안쓰면 1만 반복이 된다
                        });
                    }
                    
                    //윈도우창이 1200보다 클 때
                    if($(window).width()>1200){
                        $("header .wrap nav>h2").prependTo("aside .wrap");
                        /* 타이틀 이미지 pc용으로 교체 */
                        /*
                        $("div#subtitle .wrap img[src='img/m/m-title1.jpg']").attr("src","img/i1.jpg");
                        $("div#subtitle .wrap img[src='img/m/m-title2.jpg']").attr("src","img/i2.jpg");
                        $("div#subtitle .wrap img[src='img/m/m-title3.jpg']").attr("src","img/i3.jpg");
                        $("div#subtitle .wrap img[src='img/m/m-title4.jpg']").attr("src","img/i4.jpg");
                        $("div#subtitle .wrap img[src='img/m/m-title5.png']").attr("src","img/i5.jpg");
                        $("div#subtitle .wrap img[src='img/m/m-title6.png']").attr("src","img/i6.jpg");
                        $("div#subtitle .wrap img[src='img/m/m-title7.png']").attr("src","img/i7.jpg");
                        $("div#subtitle .wrap img[src='img/m/m-title8.jpg']").attr("src","img/i8.jpg");
                        $("div#subtitle .wrap img[src='img/m/m-title9.jpg']").attr("src","img/i9.jpg");
                        $("div#subtitle .wrap img[src='img/m/m-title10.png']").attr("src","img/i10.jpg");
                        */
                        var n = 1; // 변수 (그릇) n에 1을 넣으시오
                        $("div#subtitle .wrap img").each(function(){ 
                            $("div#subtitle .wrap img:nth-child("+n+")").attr("src","img/i"+n+".jpg");  
                            n++;
                        });
                    }
            });
            /* 햄버거 버튼 클릭 - 대메뉴 보이기 */
            //햄버거를 클릭하면 실행하시오()
            $(".ham").click(function(){
                    //w대메뉴에 클래스를 붙이시오
                    $("header .wrap nav .wgnb").addClass("wgnbShow");
                    // close를 지우기
                    $(".close").remove();
                    // x표시용으로 쓸 태그를 추가하시오
                    $("header .wrap nav .wgnb").prepend('<a href="" class="close block"></a>');
                    //대메뉴 닫기
                    $(".close").click(function(){
                        $("header .wrap nav .wgnb").removeClass("wgnbShow");
                        return false;
                    });
                    // aside를 닫기
                    $("aside").removeClass("asideSliding");
                    return false;
                });
            // (모바일ver) 대메뉴 클릭하면 서브메뉴 펼치기
            $("header .wrap nav .wgnb h2").click(function(){
                    $(this).toggleClass("currenH2");
                    $(this).parent().siblings().children("h2").removeClass("currenH2");
                    $(this).next().slideToggle();
                    //h2 다음으로 오는 대상을 클릭하면 올렸다 내렸다 하기
                    $(this).parent().siblings().children("ul.sub1").slideUp();
                });

            var headerH=$("header").height();
            // 스크롤 이벤트
            $(window).scroll(function(){
                    //헤더 애니
                    if($(window).scrollTop()>$("header").height()){// 윈도우의 scrollTop 위치 값이 헤더의 높이보다 크다면
                        // body에 스타일을 지정하시오(padding-top값에 haeder 높이 값을 지정)
                        $("body").css("padding-top",headerH);
                        // $("body").css("padding-top",$("header").height());
                        // header에 클래스를 붙이시오
                        $("header").addClass("headerFix");
                    }else{ // 위에 조건이 맞지 않을 경우
                        $("body").css("padding-top",0);
                        // header에 클래스를 붙이시오
                        $("header").removeClass("headerFix");   
                    }
                    // 사이드 애니
                    if($(window).scrollTop()>$("#subtitle").height()+40){
                        // aside에 클래스를 붙이시오(slideHide)
                        $("aside").addClass("slideHide");
                        // 탑 애니
                        // 탑요소에 클래스를 붙이시오(topFix)
                        $("footer .btop").addClass("topFix");
                    }else{ // 위 조건이 안 맞으면 (그렇지 않으면) - 위의 조건과 반대
                        $("aside").removeClass("slideHide"); // aside태그에 클래스를 없애시오
                        $("footer .btop").removeClass("topFix"); // 탑 버튼에 클래스를 없애시오
                    }
                    // 하단 탑버튼 페이지와 같이 이동
                    if($(window).scrollTop()>$("footer").offset().top-$(window).height()){ // 푸터 위에서 떨어진 거리
                        $("footer .btop").removeClass("topFix").css("opacity",1);
                    }
                });
            console.log($("footer").offset());
            // 대메뉴 오버시 서브를 슬라이드 다운
            var wsubN; // 변수선언
            $("header .wrap nav ul.gnb li a").hover(
                function(){
                    // 제이쿼리 slideDown시 css 속성에 transition이 있으면 제대로 펼쳐지지 않는다.
                    $("header .wrap nav .wgnb").stop().slideDown();
                    // wsub를 보이게 하시오
                    wsubN=$(this).parent().index()+1; // 마우스 올린 대상의 부모의  순번을 가져와서 +1더해서 넣어라
                    $("header .wrap nav .wgnb .wsub:nth-child("+wsubN+")").fadeIn();
                    $("header .wrap nav .wgnb .wsub:not(:nth-child("+wsubN+"))").fadeOut();
                }
            );
            // 서브 wgnb 영역을 벗어나면 실행하시오
            $("header .wrap nav .wgnb").mouseleave(function(){
                $(this).slideUp();
            });
            //h1요소에 마우스 진입하면 wgnb가 슬라이드업
            $("header .wrap nav h1").mouseenter(function(){
                $("header .wrap nav .wgnb").slideUp();
            });
            // top버튼 클릭하면 실행하시오 (문서를 애니메이트 하시오)
            $("footer .btop").click(function(){
                // 탑버튼을 클릭하면 상단으로 감
                $("html,body").animate({scrollTop:0},1000); //문서스크롤 애니
            });
        });
    </script> 
</head>
<body>
    <!-- 상단영역 -->
   <? include("include/header.html"); ?>
   <!-- 메인영역 -->
   <? include("include/greeting.html"); ?>
   <!-- 어사이드 브랜드 -->
   <? include("include/aside.html"); ?>
   <!-- 하단영역 -->
   <? include("include/footer.html"); ?>
</body>
</html>
</html>