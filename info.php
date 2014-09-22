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

<a href="http://www.wgame.com.tw/carinsanity/">
	<div class="logo-area">
	</div>
</a>

<div class="qrcode-area shadowBox">
	<img src="images/qr-code.jpg"><br>
	快掃描下載
</div>

<div class="container-02">

<?php
include_once("header.php");
?>
	
	<div class="content">
		
		<!--遊戲介紹-->
		<div class="gameinfo-area bg00">
			<div class="gameinfo-title">
				遊戲介紹
			</div>
			<div class="gameinfo-content">
				Carinsanity/車來瘋<br><br>輕鬆有趣、歡樂無限的車來瘋來了！各種未曾見過的特製車體，將聚在一起挑戰驚險萬分的瘋狂賽道！競賽路線九拐十八彎，考驗您的技術力；賽道風景稀奇古怪，考驗您的注意力！但是，當您用漂亮的水溝蓋跑法繞過髮夾彎時，請務必小心那緊追在後的卡車，他已摩拳擦掌準備將您猛力地撞出賽道啊！快拾取賽道上的特殊道具，只有適時的阻撓對手才能讓您始終保持領先，來瘋吧！祝您勇奪冠軍！！
			</div>
			<br>
			<br>
			
			<div class="gameinfo-title">
				角色介紹
			</div>
			<div class="gameinfo-content">
				<ul>
					<li><a id="car01" class="carlink" href="#">警車</a></li>
					<li><a id="car02" class="carlink" href="#">救護車</a></li>
					<li><a id="car03" class="carlink" href="#">消防車</a></li>
					<li><a id="car04" class="carlink" href="#">卡車</a></li>
					<li><a id="car05" class="carlink" href="#">垃圾車</a></li>
				</ul>
			</div>
		</div>
		
		
		<!--警車介紹-->		
		<div id="car01area" class="gameinfo-area bg01">
			<div class="gameinfo-title">
				警車
			</div>
			<div class="gameinfo-content">
				『維護治安、保護人民是我們的職責！』<br><br>
				操作性：★★★★<br>
				極速：★★★<br>
				靈活度：★★★★<br>
				上手難度：★★<br><br>
				警車是為打擊罪犯而存在的正義使者，其如貓一般的迅速和暴發力讓所有罪犯無所遁逃。警車擁有相當優異加速表現，可以在短時間內達到極速進行追擊，可以將比賽中操作失誤所造成的傷害減至最低；若是能將過彎技巧操作順暢的話，警車絕對是殺手級的對手。
			</div>
			<br>
			<br>
		</div>
		
		<!--救護車介紹-->		
		<div id="car02area" class="gameinfo-area bg02">
			<div class="gameinfo-title">
				救護車
			</div>
			<div class="gameinfo-content">
				『搶救生命搶第一，是我們的使命！』<br><br>
				操作性：★★★★★<br>
				極速：★★★<br>
				靈活度：★★★★★<br>
				上手難度：★<br><br>
				是誰能夠在我們受傷的時候，能夠快速到現場幫忙？那就是人們的守護天使『救護車』，相信只有她才能辦的到！救護車雖然是所有車種內最容易上手的，但對於其在賽道上的競爭力卻絲毫不減，其如兔子般嬌小的身軀是最容易穿梭在各種狹小賽道和障礙物中，最適合入門玩家選擇。
			</div>
			<br>
			<br>
		</div>
		
		<!--消防車介紹-->		
		<div id="car03area" class="gameinfo-area bg03">
			<div class="gameinfo-title">
				消防車
			</div>
			<div class="gameinfo-content">
				『火場衝鋒，捨我其誰!!』<br><br>
				操作性：★★<br>
				極速：★★★★★<br>
				靈活度：★<br>
				上手難度：★★★★<br><br>
				以一身紅色熱血造形快速現身於火場的消防車，是人民心目中的打火英雄！消防車有如蠻牛一般的肌肉車型不止是大而已，大馬力的輸出POWER更是小車無法達到的境界，只能遠望其車尾燈遠去。對於駕駛者來說消防車因為車型較大極速快，在一些狹小處更需要用心操作才不至於操作失誤，是台具有挑戰性的車種。
			</div>
			<br>
			<br>
		</div>
		
		<!--卡車介紹-->		
		<div id="car04area" class="gameinfo-area bg04">
			<div class="gameinfo-title">
				卡車
			</div>
			<div class="gameinfo-content">
				『看到公路霸王還不速速讓道！』<br><br>
				操作性：★<br>
				極速：★★★★★<br>
				靈活度：★★<br>
				上手難度：★★★★★<br><br>
				”公路上的猛虎”絕對是卡車最貼切的形容，因為那龐大又有霸氣的車驅可不是一般車輛所能披敵的，加上那狂爆的速度可說是無人可擋。卡車操作上的難度在於其身軀較長，需要較大距離的緩衝才能順利甩尾過彎，一般來說會較小型車來的困難，但是來到了直線賽道基本上是無人能敵。卡車建議具有一定駕駛技術程度的駕駛者使用才會有最佳的賽道表現。
			</div>
			<br>
			<br>
		</div>
		
		<!--垃圾車介紹-->		
		<div id="car05area" class="gameinfo-area bg05">
			<div class="gameinfo-title">
				垃圾車
			</div>
			<div class="gameinfo-content">
				『愛護環境，保衛地球是我們的責任！』<br><br>
				操作性：★★★<br>
				極速：★★★★<br>
				靈活度：★★★<br>
				上手難度：★★★<br><br>
				雖然垃圾車有如河馬一般圓滾滾的可愛，但跑起來的時候也像河馬暴發一樣的具有魄力，是絕對不容小覷的對手！其圓滾滾的車型提供了大型車種在彎道上弱點的補償，讓大車甩尾過彎不再是件難事，並且在閃避障礙物上也比其它大型車種更容易上手。垃圾車適合剛嘗試使用大型車輛的駕駛者，駕駛者可以從中慢慢熟悉大型車輛的操作訓練。
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
