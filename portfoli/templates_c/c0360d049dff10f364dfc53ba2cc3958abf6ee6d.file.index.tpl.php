<?php /* Smarty version Smarty-3.1.18, created on 2017-08-03 22:16:59
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53653555596d9d13a85ce0-55261684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1501766216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53653555596d9d13a85ce0-55261684',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_596d9d13b91536_79659463',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596d9d13b91536_79659463')) {function content_596d9d13b91536_79659463($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>ポートファリオ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/notosansjapanese.css">
	<link rel="stylesheet" href="./css/my-bootstrap.css">
	<link rel="stylesheet" href="./css/style.css">

	<!-- Meta -->
	<meta name="description" content="概要">
	<meta name="keywords" content="キーワード">
	<meta name="robot" content="index,follow,noarchive">
	<meta name="author" content="Yusk">
	<meta name="language" content="ja">

	<!-- Favicon -->
	<link rel="shortcut icon" href="http://example.com/imgs/favicon.ico">
</head>
<body class = "side-open">
<!-- サイドオープン時メインコンテンツを覆う -->
  <div class="overlay" id="js__overlay"></div>

  <!-- サイドメニュー -->
  <nav class="side-menu">
    <ul>
      <li>profile</li>
      <li>Skil</li>
      <li>Work</li>
    </ul>
  </nav>

  <!-- 開閉用ボタン -->
  <div class="side-menu-btn" id="js__sideMenuBtn"></div>

  <!-- メインコンテンツ -->
  <div class="wrapper">
    <header class="header">
      <img src="./img/port1.png" alt="">
    </header>
    <main class="contents">
      <section class="contents__inner">
				<div class="top_profile">Profile</div>
        <h1>佐藤 宏樹  |  satou hiroki</h1>
        <p>このサイトは日本総合ビジネス専門学校に通うエンジニアを目指している学生のポートフォーリオサイトです。<br>
					<span class="skill">IOSアプリ開発 Webサイト Arduino </span>勉強している途中です
				</p>
      </section>
      <section class="contents__inner">
				<div class="top_profile">Skil</div>
        <h1><span class="skill">html,css,javascript,Arduino,swift……</span></h1>
      </section>
      <section class="contents__inner">
				<div class="top_profile">WORK</div>
        <h1>↓</h1>
      </section>
			<div class="grid">
		    <div class="grid-item">
		        <div class="grid-item_image"><img src="./img/RPG.png" width="300" height="100%"></div>
		        <p class="grid-item_text">RPG><br>scrarchで作ったRPG風ゲームです。</p>
		    </div>
		    <div class="grid-item">
		        <div class="grid-item_image"><img src="./img/IMG_6657.png" width="300" height="100%"></div>
		        <p class="grid-item_text">寄りポ<br>寄りみちポイントを通って目的地までのルートを表示します</p>
		    </div>
		    <div class="grid-item">
		        <div class="grid-item_image"><img src="./img/IMG_6629.jpg" width="300" height="100%"></div>
		        <p class="grid-item_text">Arduinoと傾斜スイッチで作ったデバイスです</p>
		    </div>
				<div class="grid-item">
		        <div class="grid-item_image"><video src="./img/IMG_3976.MOV"  width="300" height="200" controls></video></div>
						<p　class="grid-item_text">ArduinoをPS3のコントローラで制御</p>
		    </div>
				<div class="grid-item">
		        <div class="grid-item_image"><video src="./img/IMG_6628.MOV"  width="300" height="200" controls></video></div>
		        <p class="grid-item_text">傾きを感知するとファンが動き出しているところです</p>
		    </div>

			</div>
    </main>
</div>

<script src="jquery-2.1.3.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!-- <script src="bigSlide.js-.master/dist/jquery.big-slide.js"></script> -->
<script src="./bootstrap/js/bootstrap.min.js"></script>
<script src="./masonry.pkgd.min.js"></script>
<script src="./main.js"></script>

</body>

</html>
<?php }} ?>