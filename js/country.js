/*** 
    Simple jQuery Slideshow Script
    Released by Jon Raasch (jonraasch.com) under FreeBSD license: free to use or modify, not responsible for anything, etc.  Please link out to me if you like it :)
***/

$(document).ready(function(){
    $(".country-box").hide();
	$(".country-now").toggle(
		function(){
    		$(".country-now img").attr("src","images/arrow02.png");
			$(".country-box").fadeIn();
		},
    	function(){
    		$(".country-now img").attr("src","images/arrow01.png");
			$(".country-box").fadeOut();
		}
  	);
});
