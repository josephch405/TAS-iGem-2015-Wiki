<html>

<head>
	<title>TAS Taipei iGEM Wiki</title>
	<?php include("./head.php"); ?>
</head>


<body style = "text-align:center">
	<div class="container" style='z-index:10;position:relative;padding:0px'>
		<?php include("./navigation.php"); ?>


		<br>
		<div id="myCarousel" class="carousel slide card_pic" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="first-slide" src="http://2015.igem.org/wiki/images/0/00/Tas_frontpage_1.png" alt="First slide">
				</div>
				<div class="item">
					<img class="second-slide" src="http://2015.igem.org/wiki/images/0/00/Tas_frontpage_1.png" alt="Second slide">
				</div>
				<div class="item">
					<img class="third-slide" src="http://2015.igem.org/wiki/images/0/00/Tas_frontpage_1.png" alt="Third slide">
				</div>
			</div>
		</div>
		<br>
		<br>

		<div class = "card" id = "bodycontainer" style = "overflow:hidden;font-family:Lato; text-align:left;">
			<div class = "col-sm-12">
				<h1 style = "padding:10px;background-color: rgb(33,150,243);color:white">
					Granzyme B
				</h1>
				<div style = "font-size:20px">
					Granzyme B is a serine protease that is an essential part of the immune system. In response to inflammation or tumors, Granzyme B is overexpressed and enters target cells to induce apoptosis. However, high levels of Granzyme B also result in <b>random cleavage</b> of extracellular matrix (ECM) proteins, such as elastin and decorin, which help to maintain tissue structure and elasticity. Our team has constructed a system that <b>inhibits Granzyme B activity</b> in the ECM without affecting its intracellular functions. In humans, Antichymotrypsin (ACT) is an extracellular protease inhibitor, which we have modified to allow for Granzyme B inhibition. Of the many diseases associated with ECM degradation, we focus on preventing damage from both arthritis and prolonged wound healing. We've engineered a semipermeable bandage to deliver the Granzyme B inhibitor topically without bacterial contamination. Our system is capable of maintaining a healthy immune system response while protecting ECM proteins.
					<br>
					<div class = "col-sm-2"></div>
					<div class = "col-sm-8">
						<img src = "http://2015.igem.org/wiki/images/1/15/Tas_home_1.png">
					</div>
					<div class = "col-sm-2"></div>
					<br>
				</div>
			</div>
			
		</div>
	</div>

	<?php include("./footer.php"); ?>
</body>

<!--?action=raw&ctype=text/javascript-->

</html>
