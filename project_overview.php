<!DOCTYPE html>
<html>

<head>
	<title>Project Overview - TAS Taipei iGEM Wiki</title>
	<?php include("./head.php"); ?>
	<?php include("./_templating_functions.php"); ?>

</head>


<body>
	<div class="container" style='z-index:10;position:relative;'>
		<?php include("./navigation.php"); ?>

			<div id='bodycontainer' class='row'>
				<div class="col-lg-12">
					<div class="row">
						<div class='col-lg-12'>
							<h1 class='overview_header'>Project Overview</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3">
							<img src="http://2014hs.igem.org/wiki/images/1/1f/Background_%28for_extension%29.png" style='float:right;width:200px;border-radius:10px;'>
						</div>
						<div class='col-lg-8'>
							<p>Telomeres are repeating sequences of TTAGGG nucleotides at the ends of somatic cell chromosomes. These sequences protect cellular genomes from harmful effects associated with chromosome shortening during cell replication. Due to the finite length of telomeres, telomere shortening is known to be a primary contributor to cellular senescence and cell death. To allow human somatic cells to replicate indefinitely, we have engineered a biological circuit with three primary components to regulate telomere length. (1) Expression of the reverse transcriptase enzyme telomerase to extend telomeres (2) Regulation of the amount of telomerase expressed using an oscillatory mechanism (3) Operation of a safety device to prevent possible cancerogenesis. Through the cooperation of these three mechanisms, and the tools of synthetic biology, lifespan extension is possible.</p>
						</div>
					</div>


					<div class="row buttonrow">
						<div class="col-lg-3 col-lg-offset-3">
							<h3>Extension</h3>
							<?php insertButtonWithoutCol("blue", "http://2014hs.igem.org/wiki/images/1/1f/Background_%28for_extension%29.png", "#", "Background", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt"); ?>	
						</div>
						<div class="col-lg-3">
							<h3>&nbsp;</h3>
							<?php insertButtonWithoutCol("blue", "http://2014hs.igem.org/wiki/images/b/b0/Telomere_Induction.png", "#", "Telomere Extension", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt"); ?>	
						</div>
					</div>


					<div class="row buttonrow">
						<div class="col-lg-3 col-lg-offset-1half">
							<h3>Regulation</h3>
							<?php insertButtonWithoutCol("blue", "http://2014hs.igem.org/wiki/images/3/32/Background_%28for_Regulation%29.png", "#", "Background", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt"); ?>	
						</div>
						<div class="col-lg-3">
							<h3>&nbsp;</h3>
							<?php insertButtonWithoutCol("blue", "http://2014hs.igem.org/wiki/images/8/8e/3_Component_Repressilator.png", "#", "3 Component Repressilator", "This oscillator would express c-Myc in doses, as it does the repressor proteins, through a series of promoter inductions and repressions. "); ?>	

						</div>
						<div class="col-lg-3">
							<h3>&nbsp;</h3>
							<?php insertButtonWithoutCol("blue", "http://2014hs.igem.org/wiki/images/0/07/2_Component_Repressilator.png", "#", "2 Component Oscillator", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt"); ?>	

						</div>
					</div>

					<div class="row buttonrow">
						<div class="col-lg-3 col-lg-offset-3">
							<h3>Termination</h3>
							<?php insertButtonWithoutCol("blue", "http://2014hs.igem.org/wiki/images/4/46/Background_%28for_Terminator%29.png", "#", "Background", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt"); ?>	
						</div>
						<div class="col-lg-3">
							<h3>&nbsp;</h3>
							<?php insertButtonWithoutCol("blue", "http://2014hs.igem.org/wiki/images/b/b1/Cancerogenesis.png", "#", "Safety Mechanism", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt"); ?>	
						</div>
					</div>

				</div>
			</div>	








		<?php include("./footer.php"); ?>
	</div>



	<div class="canvas-container"></div>

	<script src='http://rawgit.com/xyk2/tas_igem2014/master/static/libs.min.js'></script>
	<script>NUM_PARTICLES = 1000;</script>
	<script src='http://2014hs.igem.org/Team:TAS_Taipei/js/field_homepage.js?action=raw&ctype=text/javascript'></script>
	<script>
		sketchItem.start();
	</script>
</body>

</html>
