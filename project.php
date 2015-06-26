<html>

<head>
	<title>Project Abstract - TAS Taipei iGEM Wiki</title>
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
						    <li><a href="#summary">Summary</a></li>
						    <li><a href="#background">Background</a></li>
						    <!--<ul>
						    	<li><a href="#abstract">Abstract</a></li>
						    	<li><a href="#overview">Overview</a></li>
						    </ul>-->
						</ul>
					</div>


				</div>

				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-12">
							<h1>Project</h1>
						</div>
					</div>
					<div class="row" id='research'>
						<div class="col-lg-12">
							<h3 id='summary'>Summary</h3>
						</div>
					</div>
					<p>
Elevated Granzyme B levels are associated with many conditions, including vascular, autoimmune and skin diseases. As a serine protease that induces apoptosis, Granzyme B is an essential part of the immune system. In response to inflammation or tumors, Granzyme B is often overexpressed and enters target cells to induce apoptosis. However, high levels of Granzyme B also result in the random cleavage of extracellular matrix (ECM) proteins, such as elastin and decorin. This is problematic because ECM proteins maintain tissue structure, stability and elasticity. ECM destruction can lead to advanced arthritis and prolonged wound healing -- two conditions that we are focusing on.
<br><br>
Our project goal is to limit Granzyme B activity in the ECM without affecting its intracellular functions. In humans, Antichymotrypsin (ACT) is an extracellular protease inhibitor, which does not bind to Granzyme B. Through literature research, we learned that making three point mutations on ACT allows it to bind and inhibit extracellular Granzyme B, which in turn preserves ECM proteins. This will slow the progression of arthritis and accelerate the wound healing process. Ideally, we want to deliver the inhibitor into arthritic or wound sites without bacteria (E.coli containing our circuit) entering the body. To achieve this, we designed a bandage prototype with a semi-permeable membrane that keeps bacteria from passing, but allows smaller proteins to go through. We use a temperature-sensitive promoter in our construct to control when expression of the inhibitor turns on, so the bandage can be activated easily with a heat pack.
					</p>
					<div class="row" id='research'>
						<div class="col-lg-12">
							<h3 id='background'>Background</h3>

							<!--<figure style='float:left;width:500px;padding:10px;'>
								<img src="http://2014hs.igem.org/wiki/images/d/d6/Plasmids.png">
								<figcaption class='darkblue'>SAMPLE</figcaption>
							</figure>-->
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