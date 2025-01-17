<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
<link rel="icon" type="image/svg+xml" href="img/icon.svg">
<link rel="icon" type="image/svg+xml" sizes="144x144" href="img/icon.svg">
<link rel="apple-touch-icon" type="image/svg+xml" href="img/icon.svg">
<title><?php echo $_POST["title"]; ?></title>
<meta name=keywords content="">
<meta name=description content="">
<style>
@font-face {
  font-family: 'Pixel';
 
  font-weight: normal;
  font-style: normal;
}
html,body {
	margin: 0;
	width: 100%;
	height: 100%;
	background-color: #eff3f6;
	position: relative;
	overflow: hidden;
}
html {
	--frame-width: 380px;
	--frame-height: 550px;
}

body {
	font-family: -apple-system,sans-serif;
	background-image: url(img/bg.jpg);
	background-size: cover;
	background-position: 50% 50%;
	background-repeat: no-repeat;
	color: #03081a;
	-webkit-user-select: none;
	user-select: none;
}
h1,h2,h3,h4,p {
	margin: 0;
}

.wrap {
	position: relative;
	width: var(--frame-width);
	margin: 0 auto;
	top: 20%;
	/* transform: translate(-50%,-50%); */
}
.hand-back,
.hand-front {
	position: absolute;
	left: 78%;
	top: calc(100% - 210px);
	width: calc( var(--frame-width) * 2.8);
	height: calc( var(--frame-width) * 2.8 * .925 );
	background-size: cover;
}
.hand-back {
	z-index: 1;
	background-image: url(img/hand-back.png);
	
}
.hand-front {
	z-index: 3;
	background-image: url(img/hand-front.png);
}
.menu-frame {
	position: relative;
	z-index: 2;
	height: var(--frame-height);
	background-color: #fff;
	transform: rotate(-15deg);
}
.menu-frame::after,
.menu-frame::before {
	content: '';
	position: absolute;
	left: 0;right: 0;
	padding-top: 4.2%;
	-webkit-mask-size: 100% auto;
	-webkit-mask-repeat: no-repeat;
	background-color: #fff;
}
.menu-frame::before {
	bottom: 99.5%;
	-webkit-mask-image: url(img/border-t-mask.png);
}
.menu-frame::after {
	top: 99.5%;
	-webkit-mask-image: url(img/border-b-mask.png);
	-webkit-mask-position: 0 100%;
}
.menu-frame.mask,
.menu-frame.mask::after,
.menu-frame.mask::before {
	background-color: #000;
}
.menu-frame.mask {
	z-index: 0;
	position: absolute;
	left: 0;top: 0;
	width: 100%;
	filter: opacity(.05) blur(2px);
	transform: rotate(-15deg) translate(-12%,12%);
}
.menu {
	filter: drop-shadow(0 0 10px rgba(135,135,145,.18));
}
.menu .inner {
	display: flex;
	flex-direction: column;
	height: 100%;
}
.menu-head {
	padding: 15px 20px 20px;
	position: relative;
}
.menu-title {
	position: relative;
	z-index: 1;
	display: inline-block;
}
.menu-title::before {
	content: '';
	position: absolute;
	left: -2px;
	right: -2px;
	bottom: 5px;
	height: 10px;
	background-color: #ffa3bc;
	z-index: -1;
}
.menu-info {
	color: #878b99;
}
.menu-list {
	padding:10px 20px;
}
.menu-item {
	display: flex;
	align-items: center;
	font-family: "Pixel";
	padding: 10px 0;
}
.menu-item::after {
	content: '';
	display: block;
	flex: 1;
	border-top: 1px dotted #d5d6de;
	order: 2;
	margin: 0 20px;
}
.menu-item .menu-name {
	font-weight: normal;
	order: 1;
	letter-spacing: 1px;
}
.menu-item .menu-price {
	order: 3;
}
.menu-price .num {
	font-weight: 600;
	font-size: 20px;
}
.store-img {
	width:80px;
	height:80px;
	margin-right: 20px;
}
.store {
	display: flex;
	align-items: center;
	margin-top:auto;
	padding: 20px;
	position: relative;
}
.store::before {
	content: '';
	position: absolute;
	left: 20px;
	right: 20px;
	top: 0;
	height: 4px;
	background-color: #d5d6de;
}
.store-info p {
	margin: 5px 0 0;
	font-size: 12px;
	color: #878b99;
}
footer {
	padding:20px 0;
	text-align: center;
	font-size: 12px;
	color: rgba(0,0,0,.25);
	letter-spacing: 1px;
	position: absolute;
	left: 0;right: 0;bottom: 0;
	text-align: center;
}
@media screen and (max-width: 480px) {
	html {
		--frame-width: 90%;
		--frame-height: 550px;
	}
	.wrap {
		top: 50%;
		transform: translateY(-50%);
	}
	.menu-frame {
		transform: rotate(0);
	}
	.menu-frame.mask {
		display: none;
	}
	.hand-back,
	.hand-front {
		display: none;
	}
}
a {
    color: rgba(0,0,0,.25);
    text-decoration: none;
}
}
</style>
</head>
<body>
<div class="wrap">
	<div class="menu-frame menu">
		<div class="inner">
			<div class="menu-head">
				<h1 class="menu-title">陌生</h1>
				<p class="menu-info"><?php echo $_POST["tab-1"]; ?></p>
			</div>
			<div class="menu-list">
				<div class="menu-item">
					<h3 class="menu-name"><?php echo $_POST["fname-1"]; ?></h3>
					<p class="menu-price">
						<span class="num"><?php echo $_POST["eell-1"]; ?></span>
					</p>
				</div>
				<div class="menu-item">
					<h3 class="menu-name"><?php echo $_POST["fname-2"]; ?></h3>
					<p class="menu-price">
						<span class="num"><?php echo $_POST["eell-2"]; ?></span>
					</p>
				</div>
				<div class="menu-item">
					<h3 class="menu-name"><?php echo $_POST["fname-3"]; ?></h3>
					<p class="menu-price">
						<span class="num"><?php echo $_POST["eell-3"]; ?></span>
					</p>
				</div>
				<div class="menu-item">
					<h3 class="menu-name"><?php echo $_POST["fname-4"]; ?></h3>
					<p class="menu-price">
						<span class="num"><?php echo $_POST["eell-4"]; ?></span>
						<!--<span class="unit">&yen;</span>-->
					</p>
				</div>
				<div class="menu-item">
					<h3 class="menu-name"><?php echo $_POST["fname-5"]; ?></h3>
					<p class="menu-price">
						<span class="num"><?php echo $_POST["eell-5"]; ?></span>
						<!--<span class="unit">&yen;</span>-->
					</p>
				</div>
				<div class="menu-item">
					<h3 class="menu-name"><?php echo $_POST["fname-6"]; ?></h3>
					<p class="menu-price">
						<span class="num"><?php echo $_POST["eell-6"]; ?></span>
						<!--<span class="unit">&yen;</span>-->
					</p>
				</div>
				<div class="menu-item">
					<h3 class="menu-name"><?php echo $_POST["fname-7"]; ?></h3>
					<p class="menu-price">
						<span class="num"><?php echo $_POST["eell-7"]; ?></span>
						<!--<span class="unit">&yen;</span>-->
					</p>
				</div>
			</div><!-- / menu-list -->
			<div class="store">
				<img class="store-img" style="border-radius:50%;" src="<?php echo $_POST["eell-8"]; ?>">
				<div class="store-info">
					<h3><?php echo $_POST["eell-9"]; ?></h3>
					<p><?php echo $_POST["tab-2"]; ?></p>
				</div>
			</div><!-- / store -->
		</div><!-- / inner -->
	</div>
	<div class="menu-frame mask"></div>
	<div class="hand-back"></div>
	<div class="hand-front"></div>
</div>
<footer>&copy; 2022 eell的卡片 | Powered by <a href="https://sc.chinaz.com/">chinaz</a></footer>
</body>
</html>