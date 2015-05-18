<!DOCTYPE html>
<html>

<head>
	<title>Safety - TAS Taipei iGEM Wiki</title>
	<?php include("./head.php"); ?>

</head>


<body data-spy="scroll" data-target="#category_navbar">
	<div class="container" style='z-index:10;position:relative;'>
		<?php include("./navigation.php"); ?>

			<div id='bodycontainer' class='row'>
				<div class="col-lg-3" style='padding-right:0;'>
					<div id="category_navbar">
						<ul class="nav nav-list" data-spy="affix" data-offset-top="150" style='-webkit-transform: translateZ(0);width:260px;' >
						    <li><a href="#background">Background</a></li>
						    <ul>
						    </ul>							    
						    <li><a href="#project_safety">Project</a></li>
						    <ul>
						    	<li><a href="#researcher_safety">Researcher Safety</a></li>
						    	<li><a href="#public_safety">Public Safety</a></li>
						    	<li><a href="#environmental_safety">Environmental Safety</a></li>
						    </ul>							    
						    <li><a href="#biobrick_safety">Biobrick Safety</a></li>
						    <ul>
						    </ul>
						    <li><a href="#local_safety">Local Safety</a></li>
						    <ul>
						    </ul>	
						    <li><a href="#other_ideas">Other Ideas</a></li>
						    <ul>
						    </ul>	
						</ul>
					</div>


				</div>

				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-12" id='background'>
							<h1>Safety</h1>
							<p>Safety comes first. Indubitably, that statement holds true even more so in regards to research. We must first make all aspects of our project and lab completely safe before proceeding. The dangers to safety present themselves as a Cerberus, whose three horrific heads snap at biosafety, biosecurity, and lab safety.</p>
							<p>To have complete biosafety, we must protect ourselves, others, and the environment from any potential harm. We keep everything within the TAS and NYMU labs, where the flow of substances can be tightly controlled. The TAS lab is classified as biosafety level 1, according to the WHO Laboratory Biosafety Manual, which means it involves nothing that is potentially harmful to researchers if they take general precautionary measures (just E. coli). Obviously, no pathogenic organisms are used. The NYMU labs are biosafety level 2, which allows us to work on mammalian plasmids there. Thus, we are able to safely work with organisms in well-equipped labs. This helps ensure the researchers' safety, as well as that of the public and environment.</p>
						</div>
					</div>

					<div class="row" id='project_safety'>
						<div class="col-lg-12">
							<h4 class='block_header belize'>Would any of your project ideas raise safety issues in terms of:</h4>
						</div>
					</div>

					<div class="row" id='researcher_safety'>
						<div class="col-lg-10 col-lg-offset-1">
							<h4 class='block_header red'>Researcher safety:</h4>
							<p>Very few hazardous chemicals and solutions are used in the TAS research lab. For instance, we don't use EtBr for gel electrophoresis. Instead, we use a safer nucleic acid stain called Seeing Safe DNA Dye. Nevertheless, all chemicals and solutions are still treated with all due respect care and caution.  MSDS are stored on our lab computers and in a folder on the lab technician's desk.  All members of our iGEM team were trained for lab safety in all aspects for months before starting our project, and we have many capable instructors to guide us as well.</p>
							<p>All of the parts that are used in our oscillator are standard biological parts that were received from the kit of parts.  This aspect of our project poses no threat to the researcher safety.  For the regulation and termination aspect of our project, mammalian plasmids were used in a biosafety level 2 laboratory.  DNA that was extracted from these cells was then transformed into DH5 e.coli cells.</p>					
						</div>
					</div>

					<div class="row" id='public_safety'>
						<div class="col-lg-10 col-lg-offset-1">
							<h4 class='block_header red'>Public Safety:</h4>
							<p>Theoretically, our plasmid and materials at TAS should cause no damage to the public if they are released by accident. This is due to the extreme low probability of E. coli strains to survive outside of the lab; therefore, they cannot pose any risk to the safety and health of the general public. As for our mammalian plasmids and parts at NYMU, they are handled with strict care and under professional guidance.</p>
						</div>
					</div>

					<div class="row" id='environmental_safety'>
						<div class="col-lg-10 col-lg-offset-1">
							<h4 class='block_header red'>Environment:</h4>
							<p>E. coli strains that are used have very limited abilities of survival outside the lab. Hence, they are highly unlikely to survive or disseminate. Therefore, there is no specific environmental risk associated with the E. coli strains. Nevertheless, we still regulate the trash disposal, assiduously sorting waste into the correct bins, neutralizing liquid waste with bleach before disposal, and autoclaving for sterilization.</p>
						</div>
					</div>


					<div class="row" id='biobrick_safety'>
						<div class="col-lg-12">
							<h4 class='block_header green'>Do any of the new BioBrick parts that you made this year raise any safety issues?</h4>
						</div>
					</div>

					<div class="row" id=''>
						<div class="col-lg-11">
							<p>Most of our new biobricks pertain to our oscillator system, with the main product being expressed as GFP or RFP.  One biobrick does contain the ORF, C-Myc which will activate the promoter h-TERT and thus express telomerase.  However, out biobrick just contains the C-myc ORF, and there is no promoter or RBS before it.  So there is no chance for C-myc to be expressed without a promoter. Telomerase may alert some, due to its ties with cancer. However, telomerase is already present in our cells-it is merely silent. In addition, telomeres and telomeres are being extensively researched these days. We have also devised a triggered kill switch, which detects if the cell becomes cancerous, which stops telomerase production and induces apoptosis. More can be read about our kill switch at our circuit page. Other parts that were used don't raise any safety issues, such as Plac, LacI, GFP and RFP.</p>
						</div>
					</div>


					<div class="row" id='local_safety'>
						<div class="col-lg-12">
							<h4 class='block_header orange'>Is there a local biosafety group, committee, or review board at your institution?</h4>
						</div>
					</div>

					<div class="row" id=''>
						<div class="col-lg-11">
							<p>TAS does not specifically have its own local biosafety committee, but it has regular biohazard pickups for nurses, PE, and science departments. However, there is a biosafety committee at NYMU (<a href="http://ces-e.web.ym.edu.tw/front/bin/home.phtml">NYMU Center of Environmental Protection and Safety and Health</a>). Before starting our project, our advisor trained us on biosafety and lab safety. In fact, general safety rules of laboratory use are taught in every science class at TAS.</p>
							<p>Taiwan has national biosafety regulations, which can be examined at:</p>
							<p><a href="http://www.nsc.gov.tw/bio/public/Attachment/691415403671.doc">National Science Council</a> and <a href="http://www.absa.org/abj/abj/091401Wu.pdf">Centers for Disease Control of Taiwan</a></p>
						</div>
					</div>


					<div class="row" id='other_ideas'>
						<div class="col-lg-11">
							<h4 class='block_header purple'>Do you have any other ideas how to deal with safety issues that could be useful for future iGEM competitions? How could parts, devices and systems be made even safer through biosafety engineering?</h4>
						</div>
					</div>

					<div class="row" id=''>
						<div class="col-lg-11">
							<p>For TAS, we should definitely set up a local biosafety group, committee, or review board. For the public, people fear the unknown, which is why there have been some opposition to synthetic biology. Thus, an effective way to deal with safety issues is to spread public awareness on the specifics of lab work. In this, we would explain how we keep research safe for us, the public, and the environment. With this, iGEM is presented to the public in a reassuring light. Safety in biological engineering is analogous to safety in mechanical engineering. As iGEM and synthetic biology develop and grow, they have the knowledge of the growth and establishment of the industrial revolution. We can learn from this, and hopefully solve, not create, pollution.</p>
						</div>
					</div>


				</div>

			</div>	








		<?php include("./footer.php"); ?>
	</div>



	<div class="canvas-container"></div>
	<script>NUM_PARTICLES = 1000;</script>
	<script src='http://2014hs.igem.org/Team:TAS_Taipei/js/field_homepage.js?action=raw&ctype=text/javascript'></script>
	<script>sketchItem.start();</script>
</body>

</html>
