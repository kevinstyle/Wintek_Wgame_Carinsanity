<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Wgame | carInsanity</title>
<link rel="stylesheet" type="text/css" href="css/info.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.7.min.js"></script>
<script type="text/javascript" src="js/sildeshow.js"></script>
<script type="text/javascript" src="js/country.js"></script>
<script>
$(document).ready(function(e) {
	$("#car01").click(function(e) {
		$("html,body").animate({scrollTop: $("#car01area").offset().top}, 1000);
	});	
	$("#car02").click(function(e) {
		$("html,body").animate({scrollTop: $("#car02area").offset().top}, 1000);
	});	
	$("#car03").click(function(e) {
		$("html,body").animate({scrollTop: $("#car03area").offset().top}, 1000);
	});	
	$("#car04").click(function(e) {
		$("html,body").animate({scrollTop: $("#car04area").offset().top}, 1000);
	});	
	$("#car05").click(function(e) {
		$("html,body").animate({scrollTop: $("#car05area").offset().top}, 1000);
	});
	
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();	
		} else {
			$('#toTop').fadeOut();
		}
	});
 
	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});	
});
</script>
</head>

<body>

<a href="index-en.php">
	<div class="logo-area">
	</div>
</a>

<div class="qrcode-area shadowBox">
	<img src="images/qr-code.jpg"><br>
	QR-Code
</div>

<div class="container-02">

<?php
include_once("header-en.php");
?>
	
	<div class="content">
		
		<!--遊戲介紹-->
		<div class="gameinfo-area bg00">
			<div class="gameinfo-title">
				Game Description
			</div>
			<div class="gameinfo-content">
				Carinsanity<br><br>Fun, joy and unlimited Carinsanity is here! With never seen before car bodywork, and challenges extremely crazy tracks! Tracks are full of fun with extreme  corners, waiting to test your driving skill. Beautiful landscape with bizarre view, waiting to test your attention! However, when you used the method of run over the ditch cover to bypass the hairpin corners, please be careful that close behind is the truck, which has just been gearing up to try to violently knocked you out of the track ! Quickly  pick up special props on the track, use it to block your opponents to make time to maintained  your lead ! Wish you won the championship! !
			</div>
			<br>
			<br>
			
			<div class="gameinfo-title">
				Vehicle Description
			</div>
			<div class="gameinfo-content">
				<ul>
					<li><a id="car01" class="carlink" href="#">Police car</a> | <a id="car02" class="carlink" href="#">Ambulance</a> | <a id="car03" class="carlink" href="#">Fire truck</a> | <a id="car04" class="carlink" href="#">Highway truck</a> | <a id="car05" class="carlink" href="#">Garbage truck</a></li>
				</ul>
			</div>
		</div>
		
		
		<!--Police car介紹-->		
		<div id="car01area" class="gameinfo-area bg01">
			<div class="gameinfo-title">
				Police car
			</div>
			<div class="gameinfo-content">
				『 To maintain the law and order, to protect the people is our duty! 』<br><br>
				<span class="star">
				Car Handling：★★★★<br>
				Top Speed：★★★<br>
				Quickness：★★★★<br>
				Difficulty to start：★★<br><br></span>
				Police car is a messenger of justice against criminals, The cat like quickness and outbreaks force of  the Police car is used to against all crimes. The police car has quite excellent acceleration performance, Top speed can be achieved in a short period of time. The car can minimize the damage caused by your controlling errors in the game; if the cornering techniques can be smoothly operated, the police car is an absolute killer opponents.
			</div>
			<br>
			<br>
		</div>
		
		<!--Ambulance介紹-->		
		<div id="car02area" class="gameinfo-area bg02">
			<div class="gameinfo-title">
				Ambulance
			</div>
			<div class="gameinfo-content">
				『 Saving lives and be the first there, is our mission! 』<br><br>
				<span class="star">
				Car Handling：★★★★★<br>
				Top Speed：★★★<br>
				Quickness：★★★★★<br>
				Difficulty to start：★<br><br></span>
				When we are wounded, who is able to be quickly to the scene to help? It is the people's guardian angel, "ambulance", I believe that only she can do! Ambulance is the most easy to use for all kinds of vehicles, but for its competitiveness on the track has no reduction.  In rabbit-like petite body is most easy to shuttle in various narrow track and obstacles, the most suitable for entry level players.
			</div>
			<br>
			<br>
		</div>
		
		<!--Fire truck介紹-->		
		<div id="car03area" class="gameinfo-area bg03">
			<div class="gameinfo-title">
				Fire truck
			</div>
			<div class="gameinfo-content">
				『 Fire fighting, Who else!! 』<br><br>
				<span class="star">
				Car Handling：★★<br>
				Top Speed：★★★★★<br>
				Quickness：★<br>
				Difficulty to start：★★★★<br><br></span>
				A red blooded shape quickly appeared on the scene. Hero in the eyes of the people! Fire truck is like a bull , A muscle cars  more than just big. Fire truck has bigger horsepower and output than must cars can reach. Fire truck is fast, but in some narrow roads and corners the truck need to operated really carefully, it is a vehicles with all of challenge.
			</div>
			<br>
			<br>
		</div>
		
		<!--Highway Truck介紹-->		
		<div id="car04area" class="gameinfo-area bg04">
			<div class="gameinfo-title">
				Highway Truck
			</div>
			<div class="gameinfo-content">
				『 Highway Overlord ,get out of my way！ 』<br><br>
				<span class="star">
				Car Handling：★<br>
				Top Speed：★★★★★<br>
				Quickness：★★<br>
				Difficulty to start：★★★★★<br><br></span>
				"Tigers on the road" is the best description for the truck. The size of the vehicle has no comparison. That wild burst of speed, the truck is simply unstoppable. Operation difficulty is high because of its longer body, needs a greater distance to buffer to drifting the car smoothly. For the truck straight road is basically invincible. truck is recommended to have a certain degree of driving skill to have the best driving performance on the track.
			</div>
			<br>
			<br>
		</div>
		
		<!--Garbage truck介紹-->		
		<div id="car05area" class="gameinfo-area bg05">
			<div class="gameinfo-title">
				Garbage truck
			</div>
			<div class="gameinfo-content">
				『 Our responsibility to take care for the environment, defend the Earth！ 』<br><br>
				<span class="star">
				Car Handling：★★★<br>
				Top Speed：★★★★<br>
				Quickness：★★★<br>
				Difficulty to start：★★★<br><br></span>
				Although the garbage truck looks like a pudgy cute hippo, but it also has the hippo's outbreak absolutely. Don't underestimated the garbage truck! The corner drifting is no longer difficult to use, and dodging around obstacles is much easier than other large vehicles. players can use this car to train yourself to start driving large vehicles.
			</div>
			<br>
			<br>
		</div>									
		
				
		
		
		
		
		<!--  End info-area -->
		<div class="space">
		</div>
		
		<?php
		include_once("footer.php");
		?>
		<!--  End footer -->
		
		<div id="toTop">^Top</div>
		
	</div>
	<!--  End content -->
	
</div>
<!--  End container -->
</body>
</html>
