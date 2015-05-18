<!DOCTYPE html>
<html>

<head>
	<title>TAS Taipei iGEM Wiki</title>
	<?php include("./head.php"); ?>

	<script>
		$(function () {
	        $("#slides").slidesjs({
	        width: 940,
	        height: 500,
	            play: {
	                active: false,
	                effect: "slide",
	                interval: 5000,
	                auto: true,
	                swap: false,
	                pauseOnHover: false,
	                restartDelay: 2500
	            },
	            navigation: false
	        })
		});
	</script>
</head>


<body>
	<div class="container" style='z-index:10;position:relative;'>
		<?php include("./navigation.php"); ?>


	<br>

		<div id='bodycontainer' class='row' style='padding-top:0px;'>
				<div id="slides" class='col-lg-12 full'>
					<div class="heroImageContainer slidesjs-slide" style="background-image: url(http://2014hs.igem.org/wiki/images/d/da/DSC01696.jpg);">
						<h3 class="bottomleft red">TAS iGEM<span></span></h3>
					</div>
					<div class="heroImageContainer slidesjs-slide" style="background-image: url(http://2014hs.igem.org/wiki/images/a/a0/IMG_2112.jpg);">
						<h3 class="bottomright green">Dean Huang<span>"In Biology we learn about PCR and plasmid extraction, etc., but we never get to actually do it.  With iGEM we get to practice what we learn in the classroom."</span></h3>
					</div>
					<div class="heroImageContainer slidesjs-slide" style="background-image: url(http://2014hs.igem.org/wiki/images/e/ec/IMG_2130.jpg);">
						<h3 class="bottomright blue">Rachel Kwak<span>"Through iGEM I can apply biology and chemistry concepts that I learned in class into real-world applications"</span></h3>
					</div>
					<div class="heroImageContainer slidesjs-slide" style="">
						<iframe width="1077" height="606" src="//www.youtube.com/embed/smai4njKY-M" frameborder="0" allowfullscreen style='margin-top:-606px;margin-left:30px;'></iframe>
					</div>
				</div>

		</div>	
		
	</div>



	<canvas id="canvas-container"></canvas>
	<script src='/static/field_homepage_squares.js'></script>
</body>

<!--?action=raw&ctype=text/javascript-->

</html>
