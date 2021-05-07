<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <title>linedot design</title>
  </head>
  <header>
    <div class="top">
      <div class="top_left">
        <div>
          <a href="#"><img src="./image/top/title.svg" id="title_top"></a>
          <h2 class="top_anchor">「したいこと」と<br>「できた」をつなげる</h2>
        </div>
        <table class="heading">
          <tr>
            <td><a href="#service">service</a></td>
          </tr>
          <tr>
            <td><a href="#works">works</a></td>
          </tr>
          <tr>
            <td><a href="#member">member</a></td>
          </tr>
          <tr>
            <td><a href="#plan">plan</a></td>
          </tr>
        </table>

        <div class="top_anime">
          <img src="./image/top/scroll-border.svg" id="top_border">
        </div>
        <p class="top_scroll">scroll</p>
      </div>

      <div class="top_right">
        <a href="https://twitter.com/linedotdesign" target="_blank" class="twitter" title="@linedotdesign"><img src="./image/top/bird.svg" id="twitter"></a>
        <a href="#" class="mail"><img src="./image/top/mail.svg" id="mail"></a>
        <div  class="service_menu">
          <a href="#service"><img src="./image/top/service.png" id="sr_logo"></a>
          <a href="#service"><img src="./image/top/service-hover.png" id="sr_logo" class="service_hover"></a>
        </div>

        <div class="works_menu">
          <a href="#works"><img src="./image/top/works.svg" id="wk_logo"></a>
          <a href="#works"><img src="./image/top/works-hover.png" id="wk_logo" class="works_hover"></a>
        </div>

        <div class="member_menu">
          <a href="#member"><img src="./image/top/member.svg" id="mm_logo"></a>
          <a href="#member"><img src="./image/top/member-hover.png" id="mm_logo" class="member_hover"></a>
        </div>

        <div class="plan_menu">
          <a href="#plan"><img src="./image/top/plan.png" id="pn_logo" ></a>
          <a href="#plan"><img src="./image/top/plan-hover.png" id="pn_logo" class="plan_hover"></a>
        </div>
      </div>
    </div>
  </header>

  <body>
    <div class="line_center" id="service">
      <h2>service</h2>
      <p>事業</p>
    </div>

    <div class="service">
      <div class="ser_cir">
        <img id="bt_img" class="dtp" src="./image/top/web-circle.svg">
      </div>

      <div class="service_text">
        <div class="web_tx" id="web_tx">
          <h3>WEB制作</h3>
          <p class="border"></p>
          <p class="text">linedotdesignでは企画から一貫して制作することにより、統一感のあるオリジナルデザインに仕上げることができます。また、貴社の魅力をより伝えるためにも文字だけでなく、心に訴えかけるようなデザインやサイト作成を行っています。</p>
          <a href="comingsoon.html" class="more">more</a>
        </div>
        <div class="il_tx" id="il_tx">
          <h3>イラスト</h3>
          <p class="border"></p>
          <p class="text">linedotdesignでは用途に応じたイラスト作成を行っています。イラスト風のサイトや名刺、似顔絵など、小規模のご依頼も可能です。</p>
          <a href="comingsoon.html" class="more">more</a>
        </div>
        <div class="mv_tx" id="mv_tx">
          <h3>動画</h3>
          <p class="border"></p>
          <p class="text">linedotdesignは常に顧客の目線に立ち動画の作成を行っています。</p>
          <a href="comingsoon.html" class="more">more</a>
        </div>
        <div class="dtp_tx" id="dtp_tx">
          <h3>DTP</h3>
          <p class="border"></p>
          <p class="text">一目で人の記憶にデザインを焼き付け、次の情報へ目線を誘導する。そのような作品をlinedotdesignは創り続けています。</p>
          <a href="comingsoon.html" class="more">more</a>
        </div>
      </div>


      <div class="cen_circles">
        <a class="web_cir" id="web_btn" value="WEB" onclick="show4();"/>WEB</a><br>
        <a class="mv_cir" id="mv_btn" value="映像" onclick="show3();"/>動画</a><br>
        <a class="il_cir" id="il_btn" value="イラスト" onclick="show2();"/>イラスト</a><br>
        <a class="dtp_cir" id="dtp_btn" value="DTP" onclick="show1();"/>DTP</a>
      </div>

      <style type="text/css">
      .dtp{
        animation: slideIn 1s cubic-bezier(0.25, 1, 0.5, 1) 1 forwards;
      }

      @keyframes slideIn {
        0% {
          transform: translateY(-64px);
          opacity: 0;
        }
        100% {
          transform: translateY(0,0);
        }
        40%,100% {
          opacity: 1;
        }
      }
      </style>

      <script type="text/javascript">
        function show1() {
          var a = document.getElementById("dtp_tx");
          var b = document.getElementById("il_tx");
          var c = document.getElementById("mv_tx");
          var d = document.getElementById("web_tx");



          document.getElementById("bt_img").src = './image/top/dtp-circle.svg';
          a.style.display = "block";
          b.style.display = "none";
          c.style.display = "none";
          d.style.display = "none";
        }

        function show2() {
          var a = document.getElementById("dtp_tx");
          var b = document.getElementById("il_tx");
          var c = document.getElementById("mv_tx");
          var d = document.getElementById("web_tx");

          document.getElementById("bt_img").src = './image/top/il-circle.svg';
          b.style.display = "block";
          a.style.display = "none";
          c.style.display = "none";
          d.style.display = "none";
        }
        function show3() {
          var a = document.getElementById("dtp_tx");
          var b = document.getElementById("il_tx");
          var c = document.getElementById("mv_tx");
          var d = document.getElementById("web_tx");

          document.getElementById("bt_img").src = './image/top/mv-circle.svg';
          c.style.display = "block";
          a.style.display = "none";
          b.style.display = "none";
          d.style.display = "none";
        }

        function show4() {
          var a = document.getElementById("dtp_tx");
          var b = document.getElementById("il_tx");
          var c = document.getElementById("mv_tx");
          var d = document.getElementById("web_tx");

          document.getElementById("bt_img").src = './image/top/web-circle.svg';
          d.style.display = "block";
          a.style.display = "none";
          c.style.display = "none";
          b.style.display = "none";
        }

      </script>
    </div>



    <div class="line_center" id="works">
      <h2>works</h2>
      <p>制作物一覧</p>
    </div>

    <div class="work_box">
      <ul class="work_tab">
        <li><a id="plan_table_c" class="web_plan" onclick="work1();"/>Web</a></li>
        <li><a id="plan_table_a" class="mv_plan" onclick="work2();"/>動画</a></li>
        <li><a id="plan_table_b" class="dtp_plan" onclick="work3();"/>DTP</a></li>
        <li><a id="plan_table_b" class="dtp_plan" onclick="work3();"/>イラスト</a></li>
      </ul>
        <div class="port">
          <img src="./image/top/work-box.svg" id="work_cen">

          <div class="product">
            <div class="article1">
              <img src="./image/top/works-sample1.jpg" class="sample1">
              <p class="article1_tx_1">linedot design WEBサイト</p>
              <p class="article1_tx_2">Web</p>
            </div>
            <div class="article2">
              <img src="./image/top/comingsoon.svg" class="sample1">
              <p class="article1_tx_1">comingsoon</p>
              <p class="article1_tx_2">comingsoon</p>
            </div>
            <div class="article3">
              <img src="./image/top/comingsoon.svg" class="sample1">
              <p class="article1_tx_1">comingsoon</p>
              <p class="article1_tx_2">comingsoon</p>
            </div>
          </div>
        </div>

        <p class="scroll">scroll</p>
        <div class="scroll_anime">
            <img src="./image/top/scroll-border.svg" id="scroll_border">
        </div>
      </div>

      <div class="member_box" id="member">
        <h2>member</h2>
        <p>担当者</p>
      </div>

      <div class="member_icon">
        <div class="icons">
          <div class="icon1">
            <img src="./image/top/icon-tsu.svg" id="icon1">
            <img src="./image/top/tsu-hover.svg" class="icon1-hover">
            <p class="mm_name">tsuchiya kyousuke</p>
            <p>デザイナー</p>
          </div>
          <div class="icon2">
            <img src="./image/top/icon-ma.svg" id="icon2">
            <img src="./image/top/ma-hover.svg" class="icon2-hover">
            <p class="mm_name">maruse nagi</p>
            <p>イラストレーター/デザイナー</p>
          </div>
          <div class="icon3">
            <img src="./image/top/icon-sa.svg" id="icon3">
            <img src="./image/top/sa-hover.svg" class="icon3-hover">
            <p class="mm_name">sara</p>
            <p>動画編集/デザイナー</p>
          </div>
          <div class="icon4">
            <img src="./image/top/icon-shi.svg" id="icon4">
            <img src="./image/top/sh-hover.svg" class="icon4-hover">
            <p class="mm_name">shiohi</p>
            <p>デザイナー</p>
          </div>
          <div class="icon5">
            <img src="./image/top/icon-an.svg" id="icon5">
            <img src="./image/top/an-hover.svg" class="icon5-hover">
            <p class="mm_name">aneko</p>
            <p>マークアップエンジニア</p>
          </div>

        </div>

      </div>

      <div class="member_btn">
        <a class="creator" id="creater" onclick="btn1();"/><img src="./image/top/creator-bk.png" id="crt_bk"></a>
        <a class="director" id="director" onclick="btn2();"/><img src="./image/top/director-wh.png" id="dir_wh"></a>
      </div>

      <script type="text/javascript">
        function btn1() {
          document.getElementById("crt_bk").src = './image/top/creator-bk.png';
          document.getElementById("dir_wh").src = './image/top/director-wh.png';
        }

        function btn2() {
          document.getElementById("crt_bk").src = './image/top/creator-wh.png';
          document.getElementById("dir_wh").src = './image/top/director-bk.png';
        }
      </script>

      <div class="plan_box" id="plan">
        <h2>plan</h2>
        <p>料金</p>
      </div>

      <div class="plan_pull">
        <ul class="plan_tab">
          <li><a id="plan_table_c" class="web_plan" onclick="plan1();"/>Web制作</a></li>
          <li><a id="plan_table_a" class="mv_plan" onclick="plan2();"/>動画制作</a></li>
          <li><a id="plan_table_b" class="dtp_plan" onclick="plan3();"/>DTP/イラスト制作</a></li>
        </ul>
      </div>

      <div>
        <div class="plan_box_a" id="plan_box_a">
          <table class="plan_table_mv">
            <tr class="tr">
              <td>オープニングムービー<br><a class="sample" href="https://youtu.be/0ApZUSbaUf0">サンプル：https://youtu.be/0ApZUSbaUf0</a></td>
              <th class="money">350,000円</th>
              <th class="notice">※テロップあり</th>
            </tr>

            <tr class="tr">
              <td>コンセプトムービー<br><a class="sample" href="https://youtu.be/547FAT2MMPs">サンプル：https://youtu.be/547FAT2MMPs</a></td>
              <th class="money">450,000円</th>
              <th class="notice">※カテロップあり<br>※ナレーターは弊社で選定いたします。<br>※収録の際のお立合いはご遠慮ください。</th>
            </tr>

            <tr class="tr">
              <td>仕事紹介ドキュメント<br><a class="sample" href="https://youtu.be/wVmwrRnrexg">サンプル：https://youtu.be/wVmwrRnrexg</a></td>
              <th class="money">150,000円</th>
              <th class="notice">※テロップあり</th>
            </tr>

            <tr class="tr">
              <td>仕事インタビュー<br><a class="sample" href="https://youtu.be/X350g_HB7Co">サンプル：https://youtu.be/X350g_HB7Co</a></td>
              <th class="money">150,000円</th>
              <th class="notice">※テロップあり</th>
            </tr>

            <tr class="tr">
              <td>会社説明会を映像化(テロップなし)<br><a class="sample" href="https://youtu.be/bHKGwi_nD5Q">サンプル：https://youtu.be/bHKGwi_nD5Q</a></td>
              <th class="money">100,000円</th>
              <th></th>
            </tr>

            <tr class="tr">
              <td>会社説明会を映像化(テロップあり)<br><a class="sample" href="https://youtu.be/tzjNecC_Iho">サンプル：https://youtu.be/tzjNecC_Iho</a></td>
              <th class="money">200,000円</th>
              <th></th>
            </tr>

            <tr class="tr">
              <td>WEB説明会用PPT—デザイン・設計</td>
              <th class="money">350,000円</th>
              <th class="notice">※ページ追加：1P@10,000円</th>
            </tr>

            <tr class="tr">
              <td>WEB説明会用PPT—リデザイン</td>
              <th class="money">150,000円</th>
              <th class="notice">※ページ追加：1P@5,000円</th>
            </tr>

            <tr class="tr">
              <td>座談会<br><a class="sample" href="https://youtu.be/OblKNw0OUmg">サンプル：https://youtu.be/OblKNw0OUmg</a></td>
              <th class="money">400,000円</th>
              <th class="notice">※テロップあり</th>
            </tr>

            <tr class="tr">
              <td>座談会<br><a class="sample" href="https://youtu.be/KAeK65Hl6jQ">サンプル：https://youtu.be/KAeK65Hl6jQ</a></td>
              <th class="money">300,000円</th>
              <th class="notice">※テロップあり</th>
            </tr>

            <tr>
              <td class="kome">※撮影ありの場合、別途出張費が必要となります。<br>※複数同時制作の場合、割引が適用されます。</td>
            </tr>
          </table>
          <a href="#" class="irai"><img src="./image/top/irai.svg"></a>
        </div>

        <div class="plan_box_b" id="plan_box_b">
          <img src="./image/top/dtp-plan.svg" class="dtp_plan">
          <a href="#" class="irai"><img src="./image/top/irai.svg"></a>
        </div>

        <div class="plan_box_c" id="plan_box_c">
          <img src="./image/top/web-plan.png" class="web_plan">
          <a href="#" class="irai"><img src="./image/top/irai.svg"></a>
        </div>


        <script type="text/javascript">
        function plan1() {
          var p1 = document.getElementById("plan_box_a");
          var p2 = document.getElementById("plan_box_b");
          var p3 = document.getElementById("plan_box_c");

          p1.style.display = "block";
          p2.style.display = "none";
          p3.style.display = "none";
        }

        function plan2() {
          var p1 = document.getElementById("plan_box_a");
          var p2 = document.getElementById("plan_box_b");
          var p3 = document.getElementById("plan_box_c");

          p2.style.display = "block";
          p1.style.display = "none";
          p3.style.display = "none";
        }

        function plan3() {
          var p1 = document.getElementById("plan_box_a");
          var p2 = document.getElementById("plan_box_b");
          var p3 = document.getElementById("plan_box_c");

          p3.style.display = "block";
          p1.style.display = "none";
          p2.style.display = "none";
        }
        </script>
      </div>

      <div class="right_menu" id="right_menu">
        <a href="#service">service /</a>
        <a href="#works"> works / </a>
        <a href="#member"> member /</a>
        <a href="#plan"> plan /</a>
        <a href="#contact"> contact</a>
      </div>

      <script type="text/javascript">
      function PageTopAnime() {
        var scroll = $(window).scrollTop();
        if (scroll >= 200){
          $('#right_menu').removeClass('RightMove');
          $('#right_menu').addClass('LeftMove');
        }else{
          if(
            $('#right_menu').hasClass('LeftMove')){
            $('#right_menu').removeClass('LeftMove');
            $('#right_menu').addClass('RightMove');
          }
        }
      }


      $(window).scroll(function () {
      PageTopAnime();
      });


      $(window).on('load', function () {
      PageTopAnime();
      });


      $('#right_menu').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
      });
      </script>



  </body>
  <?php include_once("footer.php") ?>
</html>
