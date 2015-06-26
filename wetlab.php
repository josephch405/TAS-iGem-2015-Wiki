<html>

<head>
	<title>Wetlab - TAS Taipei iGEM Wiki</title>
	<?php include("./head.php"); ?>
</head>

<body data-spy="scroll" data-target="#category_navbar">
	<div class="container" style='z-index:10;position:relative;'>
		<?php include("./navigation.php"); ?>
<br><br>
			<div id='bodycontainer' class='row card'>
				<div class="col-lg-2" style='padding-left:8;'>
					<div id="category_navbar">
						<ul class="nav nav-list" data-spy="affix" data-offset-top="150" style='-webkit-transform: translateZ(0);width:168px' >
						    <li><a href="#inhibitor">Granzyme Inhibitor Construct</a></li>
						    <!--<ul>
						    	<li><a href="#abstract">Abstract</a></li>
						    	<li><a href="#overview">Overview</a></li>
						    </ul>-->
						    <li><a href="#prototype">Prototype Work</a></li>
						    <li><a href="#safety">Safety Switch</a></li>
						</ul>
					</div>


				</div>

				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-12">
							<h1>Wetlab</h1>
						</div>
					</div>

					<div class="row" id='research'>
						<div class="col-lg-12">
							<h3 id='inhibitor'>Granzyme Inhibitor Construct</h3>

							<!--<figure style='float:left;width:500px;padding:10px;'>
								<img src="http://2014hs.igem.org/wiki/images/d/d6/Plasmids.png">
								<figcaption class='darkblue'>SAMPLE</figcaption>
							</figure>-->
						</div>
					</div>

					<div class="row" id='research'>
						<div class="col-lg-12">
							<h3 id='prototype'>Prototype Work</h3>
						</div>
					</div>

					<div class="row" id='research'>
						<div class="col-lg-12">
							<h3 id='safety'>Safety Switch</h3>
						</div>
					</div>

					<div class="row" id='research'>
						<div class="col-lg-12">
							<h3 id='citations'>Citations</h3>
						</div>
					</div>
				</div>
			</div>	
		<?php include("./footer.php"); ?>
	</div>
	<canvas id="canvas-container"></canvas>
	<script type="text/javascript" src='http://2015.igem.org/Template:TAS_Taipei/js/field.js?action=raw&ctype=text/javascript'></script>
</body>
</html>