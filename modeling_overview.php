<!DOCTYPE html>
<html>

<head>
	<title>Research - TAS Taipei iGEM Wiki</title>
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
							<h1 class='overview_header'>Modeling Overview</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3">
							<img src="buttons/Background (for extension).png" style='float:right;width:200px;border-radius:10px;'>
						</div>
						<div class='col-lg-8'>
							<p>Telomeres are repeating sequences of TTAGGG nucleotides at the ends of somatic cell chromosomes. These sequences protect cellular genomes from harmful effects associated with chromosome shortening during cell replication. Due to the finite length of telomeres, telomere shortening is known to be a primary contributor to cellular senescence and cell death. To allow human somatic cells to replicate indefinitely, we have engineered a biological circuit with three primary components to regulate telomere length. (1) Expression of the reverse transcriptase enzyme telomerase to extend telomeres (2) Regulation of the amount of telomerase expressed using an oscillatory mechanism (3) Operation of a safety device to prevent possible cancerogenesis. Through the cooperation of these three mechanisms, and the tools of synthetic biology, lifespan extension is possible.</p>
						</div>
					</div>


					<div class="row buttonrow">
						<div class="col-lg-3 col-lg-offset-3">
							<h3>Extension</h3>
							<?php insertButtonWithoutCol("blue", "buttons/Background (for extension).png", "#", "Background", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt"); ?>	
						</div>
						<div class="col-lg-3">
							<h3>&nbsp;</h3>
							<?php insertButtonWithoutCol("blue", "buttons/Telomere Induction.png", "#", "Telomere Induction", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt"); ?>	
						</div>
					</div>


					<div class="row buttonrow">
						<div class="col-lg-3 col-lg-offset-1half">
							<h3>Regulation</h3>
							<?php insertButtonWithoutCol("blue", "buttons/Background (for Regulation).png", "#", "Background", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt"); ?>	
						</div>
						<div class="col-lg-3">
							<h3>&nbsp;</h3>
							<?php insertButtonWithoutCol("blue", "buttons/2 Component Repressilator.png", "#", "2 Component Repressilator", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt"); ?>	
						</div>
						<div class="col-lg-3">
							<h3>&nbsp;</h3>
							<?php insertButtonWithoutCol("blue", "buttons/3 Component Repressilator.png", "#", "3 Component Repressilator", "This oscillator would express c-Myc in doses, as it does the repressor proteins, through a series of promoter inductions and repressions. "); ?>	
						</div>
					</div>

					<div class="row buttonrow">
						<div class="col-lg-3 col-lg-offset-1half">
							<h3>Termination</h3>
							<?php insertButtonWithoutCol("blue", "buttons/Background (for Terminator).png", "#", "Background", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt"); ?>	
						</div>
						<div class="col-lg-3">
							<h3>&nbsp;</h3>
							<?php insertButtonWithoutCol("blue", "buttons/Manual Terminator.png", "#", "Manual Termination", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt"); ?>	
						</div>
						<div class="col-lg-3">
							<h3>&nbsp;</h3>
							<?php insertButtonWithoutCol("blue", "buttons/Cancerogenesis.png", "#", "Cancerogenesis", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt"); ?>	
						</div>
					</div>


					<div class="row buttonrow">
						<div class="col-lg-3 col-lg-offset-3">
							<h3>Safety</h3>
							<?php insertButtonWithoutCol("blue", "buttons/Senior Citizen Interviews.png", "#", "E. coli", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt"); ?>	
						</div>
						<div class="col-lg-3">
							<h3>&nbsp;</h3>
							<?php insertButtonWithoutCol("blue", "buttons/Senior Citizen Interviews.png", "#", "Mammillian Cell", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt"); ?>	
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
