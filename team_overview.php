<!DOCTYPE html>
<html>

<head>
	<title>Team Overview - TAS Taipei iGEM Wiki</title>
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
							<h1 class='overview_header'>Team Overview</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2">
							<img src="photos/DSC01696.jpg" style='border-radius:10px;margin-bottom:10px;'>
						</div>
					</div>
					<div class="row">
						<div class='col-lg-8 col-lg-offset-2'>
							<p> We are the Taipei American School iGEM team, Taiwan's first high school team, one of 12 from Asia. Our team consists of 18 dedicated members, 10 of whom will be attending the jamboree in MIT. This is our first year participating in the iGEM competition, and we look forward to continuing for years to come!</p>
						</div>
					</div>


					<div class="row buttonrow">
						<div class="col-lg-3">
							<h3>Members</h3>
							<?php insertButtonWithoutCol("blue", "buttons/Team Biographies.png", "#", "Biographies", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt"); ?>	
						</div>
						<div class="col-lg-3">
							<h3>About Us</h3>
							<?php insertButtonWithoutCol("blue", "buttons/Taipei American School.png", "#", "Taipei American School", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt"); ?>	
						</div>
						<div class="col-lg-3">
							<h3>&nbsp;</h3>
							<?php insertButtonWithoutCol("blue", "buttons/research-lab.png", "#", "Research Lab", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt"); ?>	
						</div>
						<div class="col-lg-3">
							<h3>&nbsp;</h3>
							<?php insertButtonWithoutCol("blue", "buttons/Synthetic Bio Class.png", "#", "Synthetic Bio Class", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt"); ?>	
						</div>
					</div>


					<div class="row buttonrow">
						<div class="col-lg-3 col-lg-offset-1half">
							<h3>Videos</h3>
							<?php insertButtonWithoutCol("blue", "http://placehold.it/300x300", "#", "Research Videos", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt"); ?>	
						</div>
						<div class="col-lg-3">
							<h3>&nbsp;</h3>
							<?php insertButtonWithoutCol("blue", "buttons/Outreach Videos.png", "#", "Outreach Videos", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt"); ?>	
						</div>
						<div class="col-lg-3">
							<h3>&nbsp;</h3>
							<?php insertButtonWithoutCol("blue", "http://placehold.it/300x300", "#", "Entertainment Videos", "This oscillator would express c-Myc in doses, as it does the repressor proteins, through a series of promoter inductions and repressions. "); ?>	
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
