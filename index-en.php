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

<a href="index-en.php">
	<div class="logo-area">
	</div>
</a>
<!--
<div class="slogan"></div>
-->
<!--
<div class="qrcode-area shadowBox">
	<img src="images/qr-code.jpg"><br>
	QR-Code
</div>
-->
<div class="container">

<?php
include_once("header-en.php");
?>

<script type="text/javascript">
$('a.gaLink').click(function(){
	_gaq.push(['_trackEvent', 'carInsanity', 'Download']);
});
</script>

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
				Launch for FREE in Appstore and Google Play<br><br>AVAILABLE NOW! Scan to Download!
			</div>
			<div class="word" style="float:left; color:#FFFFFF; margin-top:50px; margin-left:20px; font-size:24px; font-family:'微軟正黑體';">
				<span style="color:#0099FF; ">PC Download：</span><a class="gaLink" target="_blank" href="http://ubuntuone.com/0TvzeIJkwvgzebt1y37VHb"><span style="color:#FFFFFF; text-decoration:underline;">PC</span></a>
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
						Latest News
					</div>
					<div class="more">
						<a href="news-en.php">
							more
						</a>
					</div>
				</div>
				<!--  End title-area -->
				<ul>
					<a href="news-en.php">
						<li>
							<span class="title">
								Carinsanity is now online~
							</span>
							<br>
							<span class="style02">
								 Fun, joy and infinite drive for Carinsanity, never have seen special bodywork, together challenge the crazy track.
							</span>
						</li>
					</a>
					<a href="news-en.php">
						<li>
							<span class="title">
								Talking Duck is online now~
							</span>
							<br>
							<span class="style02">
								The Talking Duck relaxed, warm and fun Game. With All kinds of funny action, imitate your talking, and having an exciting time with your children.
							</span>
						</li>
					</a>
					<a href="http://youtu.be/i_xwg7FMcmM">
						<li>
							<span class="title">
								Carinsanity movie introduction. 
							</span>
							<br>
							<span class="style02">
								welcome everyone to enjoy the Carinsanity with drifting game play.
							</span>
						</li>
					</a>
					<a href="news-en.php">
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
					<a href="news-en.php">
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
					<a href="news-en.php">
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
						Official Intro
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
						Carinsanity is now online~~Suitable for family and friends play together for online racing.
					</div>
					<div class="describe">
						Fun, joy and infinite drive for Carinsanity, never have seen special bodywork, together challenge the crazy track.
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
