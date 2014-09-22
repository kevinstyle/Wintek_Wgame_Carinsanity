<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Wgame | carInsanity</title>
<script type="text/javascript" src="js/jquery-1.7.min.js"></script>
<script type="text/javascript" src="js/sildeshow.js"></script>
<script type="text/javascript" src="js/country.js"></script>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/slide.css">
</head>

<body>

<a href="http://www.wgame.com.tw/carinsanity/">
	<div class="logo-area">
	</div>
</a>
<!--
<div class="slogan"></div>
-->
<!--
<div class="qrcode-area shadowBox">
	<img src="images/qr-code.jpg"><br>
	快掃描下載
</div>
-->
<div class="container">

<?php
include_once("header.php");
?>




	<div class="content">
		
		<div id="slideshow">
			<div class="active">
				<img src="images/slide-01.jpg" alt="Slideshow Image 1" />
			</div>
			<div>
				<img src="images/slide-02.jpg" alt="Slideshow Image 2" />
			</div>
			<div>
				<img src="images/slide-03.jpg" alt="Slideshow Image 3" />
			</div>
			<div>
				<img src="images/slide-04.jpg" alt="Slideshow Image 4" />
			</div>
			<div>
				<img src="images/slide-05.jpg" alt="Slideshow Image 5" />
			</div>
		</div>
		<!--  End slideshow -->

	
		<div class="clear" style="margin-top:30px; margin-bottom:30px; margin-left:30px; float:left;">
			<div class="img">
				<img width="240" height="240" src="images/qr-code.jpg">
			</div>
			<div class="word" style="float:left; color:#FFFFFF; margin-top:50px; margin-left:20px; font-size:26px; font-family:'微軟正黑體';">
				車來瘋上線囉! 快拿起您的行動裝置掃描下載!!
				<br>
				<span style="color:#0099FF; font-size:14px">或者您可下載至您的電腦並使用第三方工具安裝至您的行動裝置</span>
				<a class="gaLink" href="http://ubuntuone.com/0lx79h1DtB6GZD3cImX9ee"><span style="color:#FFFFFF; font-size:14px; text-decoration:underline;">iOS</span></a>
				<a class="gaLink" href="http://ubuntuone.com/2tfKTjE57auM0WcPICo6I0"><span style="color:#FFFFFF; font-size:14px; text-decoration:underline;">Android</span></a>
			</div>
			<div class="word" style="float:left; color:#FFFFFF; margin-top:50px; margin-left:20px; font-size:24px; font-family:'微軟正黑體';">
				電腦版下載：
				<a class="gaLink" href="http://www.wgame.com.tw/carinsanity/download/carinsanity.zip"><span style="color:#FFFFFF; text-decoration:underline;">載點1</span></a>
				|<a class="gaLink" href="http://ubuntuone.com/0TvzeIJkwvgzebt1y37VHb"><span style="color:#FFFFFF; text-decoration:underline;">載點2</span></a>
			</div>					
		</div>
		<!--  End appstore -->
		
		<script> 
		  $("a.gaLink").click(function(e) {
			  _gaq.push(['_trackEvent', 'carInsanity', 'Download']);
		  });
		</script>
		
		<div class="info-area">
			<div class="info-news">
				<div class="title-area style-bg00">
					<div class="title">
						最新消息
					</div>
					<div class="more">
						<a href="news.php">
							more news
						</a>
					</div>
				</div>
				<!--  End title-area -->
				<ul>
					<a href="news.php">
						<li>
							<span class="title">
								車來瘋瘋狂上線摟~~適合親朋好友一起線上競速
							</span>
							<br>
							<span class="style02">
								 輕鬆有趣，歡樂無限的車來瘋來了，各種未見過的特製車體，將聚在一起挑戰驚險萬分的瘋狂賽道。
							</span>
						</li>
					</a>
					<a href="news.php">
						<li>
							<span class="title">
								Talking Duck 溫馨上線摟~請大家歡樂下載與牠一起互動
							</span>
							<br>
							<span class="style02">
								輕鬆溫馨，趣味十足的Talking Duck來了，各種逗趣的動作，模仿說話，陪伴孩子度過快樂的時光。
							</span>
						</li>
					</a>
					<a href="http://youtu.be/i_xwg7FMcmM">
						<li>
							<span class="title">
								車來瘋影片介紹，大家一同來欣賞車來瘋豪邁甩尾的畫面
							</span>
							<br>
							<span class="style02">
								Youtube影片位置： http://youtu.be/i_xwg7FMcmM
							</span>
						</li>
					</a>
					<a href="news.php">
						<li>
							<span class="title">
								Coming soon
							</span>
							<br>
							<span class="style02">
								Coming soon
							</span>
						</li>
					</a>
					<a href="news.php">
						<li>
							<span class="title">
								Coming soon
							</span>
							<br>
							<span class="style02">
								Coming soon
							</span>
						</li>
					</a>
					<a href="news.php">
						<li>
							<span class="title">
								Coming soon
							</span>
							<br>
							<span class="style02">
								Coming soon
							</span>
						</li>
					</a>
				</ul>
			</div>
			<!--  End info-news -->
			
			
			<div class="info-video">
				<div class="title-area style-bg00">
					<div class="title">
						官方影片
					</div>
					<!--
					<div class="more">
						<a href="#">
							more videos
						</a>
					</div>
					-->
				</div>
				<!--  End title-area -->
				<div class="show style-bg01">
					<iframe width="560" height="315" src="http://www.youtube.com/embed/i_xwg7FMcmM?rel=0" frameborder="0" allowfullscreen></iframe>
					<div class="title02">
						車來瘋瘋狂上線摟~~適合親朋好友一起線上競速。
					</div>
					<div class="describe">
						輕鬆有趣，歡樂無限的車來瘋來了，各種未見過的特製車體，將聚在一起挑戰驚險萬分的瘋狂賽道。
					</div>
				</div>
			</div>
			<!--  End info-video -->
		</div>
		<!--  End info-area -->
		
		
		<?php
		include_once("footer.php");
		?>
		<!--  End footer -->
		
	</div>
	<!--  End content -->
	
</div>
<!--  End container -->
</body>
</html>
