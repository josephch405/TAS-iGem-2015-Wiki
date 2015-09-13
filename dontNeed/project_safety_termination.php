<!DOCTYPE html>
<html>

<head>
	<title>Safety Termination - TAS Taipei iGEM Wiki</title>
	<?php include("./head.php"); ?>

</head>


<body data-spy="scroll" data-target="#category_navbar">
	<div class="container" style='z-index:10;position:relative;'>
		<?php include("./navigation.php"); ?>

			<div id='bodycontainer' class='row'>
				<div class="col-lg-3" style='padding-right:0;'>
					<div id="category_navbar">
						<ul class="nav nav-list" data-spy="affix" data-offset-top="150" style='-webkit-transform: translateZ(0);width:260px;' >
						    <li><a href="#">Safety Termination</a></li>
						    <ul>
						    	<li><a href="#aim_and_motivation">Aim and Motivation</a></li>
						    	<li><a href="#explanation">Explanation of the Construct</a></li>
						    	<li><a href="#experimental_design">Experimental Design</a></li>
						    	<li><a href="#results">Results</a></li>
						    	<li><a href="#conclusion">Conclusion</a></li>
						    	<li><a href="#future_work">Future Work</a></li>
						    </ul>	
						</ul>
					</div>


				</div>

				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-12">
							<h1>Safety Termination</h1>
							<h3 id='aim_and_motivation'>Aim and Motivation</h3>
							<p>Cancer cells have been associated with high levels of telomerase, which is expected as they are able to replicate indefinitely. However, telomerase has not been shown to be a cause of cancer, only an effect of it.</p>
							<p>To be safe, however, since we are upregulating levels of telomerase, we chose to engineer a system that would counter the possibility of our plasmid inducing cancerogenesis in cells that our plasmids are transfected into.</p>
							<h3 id='explanation'>Explanation of the construct</h3>
							<p>If the cell into which our plasmids were transfected becomes cancerous, the pSurvivin promoter, which is only induced in cancerous cells, is activated. In a cancerous cell, the promoter thus produces two proteins: BRCA1 and the apoptin gene. BRCA1 represses the hTERT promoter, thereby terminating telomerase induction and telomere extension. The apoptin gene induces apoptosis in only cancerous cells, and not normal cells, which reduces cancerous cell metastasis possibilities.</p>
							<p>We have hence created a system that is only activated in cancer cells, and would both terminate the expression of telomerase and induce apoptosis in the cancerous cell. The system design is as shown below:</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<figure style=''>
								<img src="http://2014hs.igem.org/wiki/images/c/c9/Termination.png">
								<figcaption class='darkblue'>Figure 1: Safety construct. pSurvivin promoter that is only activated in cancerous cells induces the expression of BRCA1 and apoptin. BRCA1 shuts down the hTERT promoter, thereby shutting down telomerase expression and telomere extension. Apoptin induces cell death in cancerous cells to reduce metastasis possibilities.</figcaption>
							</figure>
						</div>
						<div class="col-lg-6">
							<figure style=''>
								<img src="http://2014hs.igem.org/wiki/images/6/65/Modeling-combo.jpg">
								<figcaption class='darkblue'>Figure 2: Inhibition of the hTERT promoter by the BRCA1 protein. Without expression of BRCA1, c-Myc induces the hTERT promoter to produce telomerase(a).  However, when BRCA1 is expressed, it binds to c-Myc, inhibiting its activation of hTERT(b).  It is also able to inhibit hTERT activity.modeling-one (1).pngmodeling-two (1).png</figcaption>
							</figure>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<figure style='width:70%;margin-left:15%;'>
								<img src="http://2014hs.igem.org/wiki/images/3/32/Termination-1.png">
								<figcaption class='darkblue'>Figure 3: Diagrammatic representation of the safety mechanism. The pSurvivin promoter induces both the "stopping" of the telomere extension due to BRCA1, as well as cell apoptosis in cancerous cells due to apoptin.</figcaption>
							</figure>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<h3 id='experimental_design'>Experimental Design to test that pSurvivin is not activated in normal cells</h3>
							<p>We chose to first test the pSurvivin activation, so that it is only activated in a cancerous cell and not a healthy one. To do this, we designed a plasmid with pSurvivin followed by GFP, as shown in figure 1 below. We then transfect this plasmid into one healthy cell and one cancerous cell. If the pSurvivin is only cancer cell activated, GFP should only be expressed in cancerous and not healthy cells.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<figure style=''>
								<img src="http://2014hs.igem.org/wiki/images/3/32/Safety-circuit-testing.png">
								<figcaption class='darkblue'>Figure : Diagrammatic representation of the transfection of the pSurvivin plasmid into a cancerous cell. The expected result is that the cell will glow green due to cancer cell activation of the pSurvivin promoter.</figcaption>
							</figure>
						</div>
						<div class="col-lg-6">
							<figure style=''>
								<img src="http://2014hs.igem.org/wiki/images/3/3d/Modeling-one_%281%29.png">
								<figcaption class='darkblue'>Figure : Diagrammatic representation of the transfection of the pSurvivin plasmid into a healthy cell. The expected result is that the cell will not glow since the pSurvivin promoter is not activated in healthy cells, only cancerous ones.</figcaption>
							</figure>
						</div>
					</div>					


					<div class="row">
						<div class="col-lg-12">
							<h3 id='results'>Results</h3>
							<p>We successfully PCR cloned the pSurvivin promoter, as shown in figure 1. We also successfully ligated the pSurvivin promoter to GFP, and put it on pcDNA6C plasmid, as shown in figure 2.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-offset-2 col-lg-4">
							<figure style=''>
								<img src="http://2014hs.igem.org/wiki/images/a/a8/K1253800.png">
								<figcaption class='darkblue'>Figure 1. Gel check results of PCR colony check of the pSurvivin promoter, cloned from HeLa cells.</figcaption>
							</figure>
						</div>
						<div class="col-lg-4">
							<figure style=''>
								<img src="http://2014hs.igem.org/wiki/images/1/19/K1253801.png">
								<figcaption class='darkblue'>Figure 2. pSurvivin+GFP. This gels demonstrates that we successfully cloned pSurvivin with the GFP reporter for testing.</figcaption>
							</figure>
						</div>
					</div>	
					<div class="row">
						<div class="col-lg-offset-2 col-lg-8">
							<figure style=''>
								<img src="http://2014hs.igem.org/wiki/images/0/0b/MRC5_W_combi.jpg">
								<figcaption class='darkblue'>Figure 3: Left, MRC-5 non cancerous cells transformed with the pSurvivin+GFP plasmid. As expected, the cells do not glow green since the pSurvivin promtoer is only activated in cancerous cells.</figcaption>
							</figure>
						</div>
					</div>		

					<div class="row">
						<div class="col-lg-12">
							<h3 id='conclusion'>Conclusion</h3>
							<p>We have designed safety plasmid that is activated only by the pSurvivin promoter in cancerous cells. This promoter will induce the expression of the BRCA1 protein, that inhibits the hTERT promoter and hence telomerase expression, and will induce the apoptin gene that will cause cell apoptosis only in cancerous cells.</p>
							<p>We have tested the pSurvivin promoter in healthy cells and confirmed that it does not activate.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<h3 id='future_work'>Future Work</h3>
							<ul class='ulstyled'>
								<li>Test pSurvivin+GFP in cancerous cells to see if it is induced.</li>
								<li>Test BRCA1 inhibition of HTERT.</li>
								<li>Test apoptin in inducing apoptosis only in cancerous cells.</li>
							</ul>
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
