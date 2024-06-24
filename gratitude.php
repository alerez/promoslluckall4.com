<?php

$data = array(
  'table_id' => '1ZQsY0RQ4-uLzFKUSZDwrQOvz51_WFPFIYFYnc9ZA1KY',
  'name' => $_POST['name'],
  'email' => $_POST['email'],
  'message' => $_POST['message']
);

$url = 'https://script.google.com/macros/s/AKfycbw-ME92uG0EXfskj_6ZyXyGBY8bwze0b1fnkrNQfpJ_RENx7Lz3CARCFWGnDMdTugKiTw/exec'; // Замените 'SCRIPT_ID' на фактический ID вашего скрипта Google Apps Script

$options = array(
  'http' => array(
    'header'  => 'Content-type: application/x-www-form-urlencoded',
    'method'  => 'POST',
    'content' => http_build_query($data)
  )
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

file_put_contents('log_submit_data.txt', date("Y-m-d H:i:s") . PHP_EOL . 'REQUEST: ' . print_r($array, true) . PHP_EOL . PHP_EOL, FILE_APPEND);


if ($result !== false) {
  // Успешно отправлено
} else {
  // Ошибка отправки
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <title> | Request accepted!</title>
    <meta property="og:title" content=" | Request accepted!" />
    <meta property="og:image" content="{page-images-1}" />

    <meta property="og:description" content=" | Request accepted!" />
    <meta name="description" content=" | Request accepted!" />
    <link rel="stylesheet" href="assets/style/bootstrap-icons.css" />
    <link rel="stylesheet" href="assets/style/button.css" />
    <link rel="stylesheet" href="assets/style/reset.css" />
    <link rel="stylesheet" href="assets/style/normalize.css" />
    <link rel="stylesheet" href="assets/style/animate.css" />
    <link rel="stylesheet" href="assets/style/bootstrap.css" />
    <link rel="stylesheet" href="assets/style/bootstrap.min.css.map" />

    <script src="assets/js/script.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <meta name="author" content=" | Request accepted!" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script>
      new WOW().init();
    </script>



    <link rel="stylesheet" href="assets/style/universal.css" />
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon" />

    <style>




    </style>

  </head>

  <body>
    <header class="header_du" id="header">
      <div class="container">
        <div class="header23 flex-row">
          <div class="logotip44 container__0hAAd__div" >
            <a class="logotip-links23" id="logo" href="./">
              <img class="logotip" src="assets/images/logo.png" alt="" />Free Casino Buddies
            </a>
          </div>

          <div class="menu-btn navbar-toggle" id="menu-btn">
            <span class="span-btn"></span>
            <span class="span-btn"></span>
            <span class="span-btn"></span>
          </div>
          <div id="menu" class="menu bg-menu_sgdhyt"></div>
          <div id="nav-menu" class="nav"></div>
        </div>
      </div>
    </header>
    <section class="section-hero-main flex-row">
      <div class="section-hero">
        <img class="hero-money_img hero-money_pos1" src=" assets/images/other-dir/chips-06668631fe9e24.png" alt="" />
        <img class="hero-money_img hero-money_pos2" src=" assets/images/other-dir/chips-16668631fe9e8b.png" alt="" />
        <img class="hero-money_img hero-money_pos3" src=" assets/images/other-dir/chips-26668631fe9edd.png" alt="" />
        <img class="hero-money_img hero-money_pos4" src=" assets/images/other-dir/chips-36668631fe9f30.png" alt="" />
        <img class="hero-money_img hero-money_pos5" src="assets/images/vector-assets/bones-06668631fea25a.svg" alt="" />
        <img class="hero-money_img hero-money_pos6" src="assets/images/vector-assets/bones-06668631fea25a.svg" alt="" />
        <div class="container">
          <div class="hero-thumb">
            <div class="hero-thumb__box">
              <h2 class="hero-title">Start your social casino adventure at Free Casino Buddies! Free slots and exciting games are waiting for you!</h2>

              <a class="hero-btn custom-btn button-4" href="games.html">
                Start playing<span></span>
                <span></span>
                <span></span>
                <span></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>



<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-header--Mw1tL--element{
		margin: 0px;
		padding: 0px;
		font-family: 'Barlow Condensed', sans-serif;
		width: 100%;
		font-size: 16px;
		padding: 260px 0px;
	}
	.bodyClass1-header--Mw1tL--element{
		background: #ffffff;
		color: #ffffff;
	}
	.bodyClass2-header--Mw1tL--element{
		background: #f8efd4;
		color: #fff;
	}
	.bodyClass3-header--Mw1tL--element{
		background: #fff;
		color: #111;
	}
	.wrapage-block-header--Mw1tL--element{
		background-size: 100%;
		width: 100%;
	}
	.box_main-header--Mw1tL--element{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-header--Mw1tL--element h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-header--Mw1tL--element p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-header--Mw1tL--element{
		text-align: start;
	}
	.mainBlock-header--Mw1tL--element ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-header--Mw1tL--element ul>li span{
		font-weight: bold;
	}
	.mainBlock-header--Mw1tL--element{
		max-width: 915px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 10px;
	}
	.mainBlock-header--Mw1tL--element .cBlock-header--Mw1tL--element{
		text-align: start;
	}

	.bodyClass3-header--Mw1tL--element .mainBlock-header--Mw1tL--element{
		background: none;
		border-top: 2px dashed #f8efd4;
		border-bottom: 2px dashed #f8efd4;
	}
	.bodyClass2-header--Mw1tL--element .mainBlock-header--Mw1tL--element{
		background: #03051E;
		color: #fff !important;
		box-shadow: 0px 0px 10px #03051E;
	}
	.bodyClass2-header--Mw1tL--element .mainBlock-header--Mw1tL--element p{
		color: #fff !important;
	}
	.bodyClass1-header--Mw1tL--element .mainBlock-header--Mw1tL--element{
		background: #044E55;
		color: #ffffff;
		border-left: 2px solid #9D0B28;
	}
	.bodyClass1-header--Mw1tL--element .mainBlock-header--Mw1tL--element p{
		color: #ffffff !important;
	}
	.order-header--Mw1tL--element{
		font-size: 21px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-header--Mw1tL--element p{
			padding: 0px 15px;
		  }
		  .box_main-header--Mw1tL--element h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-header--Mw1tL--element{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-header--Mw1tL--element{
			height: 100%;
		}
	}
</style>
<div class="bodyClass1-header--Mw1tL--element" id="mainWrapp-header--Mw1tL--element">


	<div class="wrapage-block-header--Mw1tL--element">
		<div class="box_main-header--Mw1tL--element">
			<div class="mainBlock-header--Mw1tL--element">
				<p>We're truly grateful for your outreach and the confidence you've placed in us. Your support empowers our dedicated team to enhance the caliber of our offerings continually.</p>
<p>Remember, your insights, feedback, and suggestions are invaluable to our growth and evolution. If there's anything on your mind or if you require assistance, please feel free to reach out. Our commitment is to be readily available to assist you.</p>
<p class="cBlock-header--Mw1tL--element">With heartfelt thanks and warm wishes!</p>
			</div>
		</div>
	</div>


</div>



    <footer class="footer-07dvghfu">
      <img class="footer-bones footer-bones-pos1" src="assets/images/vector-assets/bones-06668631fea25a.svg" alt="" />
      <img class="footer-bones footer-bones-pos2" src="assets/images/vector-assets/bones-06668631fea25a.svg" alt="" />
      <img class="footer-bones footer-bones-pos3" src="assets/images/vector-assets/bones-46668631fea2c7.svg" alt="" />
      <img class="footer-bones footer-bones-pos4" src="assets/images/vector-assets/bones-46668631fea2c7.svg" alt="" />
      <img class="footer-bones footer-bones-pos5" src="assets/images/vector-assets/bones-46668631fea2c7.svg" alt="" />

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 text-center">
            <h2 class="footer-heading"><a href="#" class="logo">Free Casino Buddies</a></h2>

            <div id="footer-menu"></div>

            <section class="section section-disclaimer_gyt">
              <div class="container">
                <h2 style="text-align: center; color: #fff; text-shadow: 2px 2px; background-color: var(--Gold);">
                  Disclaimer
                </h2>
                <div class="disclaimer-thumb">
                  <img class="disclaimer-img" src="assets/images/777.png" alt="" />
                  <p>Disclaimer. Dive into the world of gaming without financial commitment! On our social gaming site, you only use virtual credits, which makes the game completely free and safe. We guarantee that it is impossible to play for "real money", receive prizes or gifts, which means that you can enjoy the game without any risks. Everyone over the age of 18 is welcome! Success in social gaming does not guarantee a prosperous future in real money gambling!</p>
                  <img class="disclaimer-img" src="assets/images/777.png" alt="" />
                </div>
              </div>
            </section>

            <ul class="ftco-footer-social p-0">
              <div class="main-privacy__img">

                <div style="width: 75px; height: 75px"><img src="assets/images/img-18.svg" alt="" /></div>

              </div>
            </ul>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12 text-center">
            <p class="copyright_sji">
              copyright © 2024

              <i class="ion-ios-heart" aria-hidden="true"></i>
              Free Casino Buddies
            </p>
          </div>
        </div>
      </div>

    </footer>
    <div class="scroll-to-top" onclick="scrollToTop()">&#8593;</div>
    <script>
			function toggleDisplay() {
				const block1 = document.querySelectorAll(".block1");
				const block2 = document.querySelectorAll(".block2");
				const isBlock1Displayed = Array.from(block1).some(
					(el) => getComputedStyle(el).display === "block"
				);
				block2.forEach((el) => {
					el.style.display = isBlock1Displayed ? "none" : "block";
				});
			}
			window.addEventListener("DOMContentLoaded", toggleDisplay);
		</script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var scrollBtn = document.querySelector('.scroll-to-top');

        window.addEventListener('scroll', function () {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollBtn.style.display = 'block';
          } else {
            scrollBtn.style.display = 'none';
          }
        });

        scrollBtn.addEventListener('click', function () {
          scrollToTop();
        });
      });

      function scrollToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <script>
      $('.menu-box-mobile a').on('click', function () {
        if ($('.navbar-toggle').css('display') != 'none') {
          $('.navbar-toggle').trigger('click');
        }
      });
      let menuBtn = document.querySelector('.menu-btn');
      let menu = document.querySelector('.menu');

      menuBtn.addEventListener('click', function () {
        menuBtn.classList.toggle('active');
        menu.classList.toggle('active');
      });
    </script>



</body>
</html>
