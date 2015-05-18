<!DOCTYPE html>
<html>

<head>
	<title>Telomere Extension - TAS Taipei iGEM Wiki</title>
	<?php include("./head.php"); ?>

</head>


<body data-spy="scroll" data-target="#category_navbar">
	<div class="container" style='z-index:10;position:relative;'>
		<?php include("./navigation.php"); ?>

			<div id='bodycontainer' class='row'>
				<div class="col-lg-3" style='padding-right:0;'>
					<div id="category_navbar">
						<ul class="nav nav-list" data-spy="affix" data-offset-top="150" style='-webkit-transform: translateZ(0);width:260px;' >				    
							<li><a href="#aim_and_motivation">Aim and Motivation</a></li>
							<li><a href="#construct_design">Construct Design</a></li>
						    <li><a href="#testing_cmyc">Experiment: Testing of C-Myc Induction of hTERT</a></li>
						    <ul>
						    	<li><a href="#purpose">Aim and Motivation</a></li>
						    	<li><a href="#experimental_design">Experimental Design</a></li>
						    	<li><a href="#results">Results</a></li>
						    	<li><a href="#discussion">Discussion</a></li>
						    	<li><a href="#modeling_specifics">Modeling Specifics</a></li>
						    </ul>							    
						    <li><a href="#conclusion">Conclusion</a></li>
						    <li><a href="#future_work">Future Work</a></li>

						</ul>
					</div>


				</div>

				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-12">
							<h1>Telomere Extension</h1>
						</div>
					</div>

					<div class="row" id='research'>
						<div class="col-lg-12">
							<h3 id='aim_and_motivation'>Aim and Motivation of Telomere Extension</h3>
							<p>The aim of the "telomere extension" aspect of E-mortality is to engineer the method by which chromosome telomeres can be replenished.</p>
							<p>In order to extend cellular replicative lifespan and hence reduce rate of aging, we must first extend the telomeres, since telomere length determines how quickly self-induced cellular apoptosis is triggered.</p>
							<p>As described in the background, the reverse transcriptase enzyme telomerase is capable of extending telomeres through adding TTAGGG telomeric DNA repeats to the single stranded leading strand.</p>
							<p>The genes necessary to code for the telomerase enzyme are present in the human genome. However, in a healthy human somatic cell the transcription factors necessary to activate the promoters that transcribe telomerase are not present, and hence the telomerase genes are silenced.</p>

							<h3 id='construct_design'>Construct Design</h3>
							<p>To increase telomerase activity in order to extend telomeres, we express the c-Myc protein in a healthy cell, which induces the hTERT promoter which transcribes the hTERT protein, the rate-determining unit of telomerase catalytic activity. Hence, by expressing c-Myc we induce telomerase activity. This design is demonstrated in figure 1.</p>
							<figure style='width:50%;margin-left:25%;'>
								<img src="http://2014hs.igem.org/wiki/images/a/a7/Control-cell.png">
								<figcaption class='darkblue'>Figure 1: Representation of the expression of c-Myc in a normal human lung fibroblast cell. We include expression by pCMV temporarily until the circuit regulation aspect of the project. The important point is that c-Myc is expressed in a human cell to induce the hTERT promoter to transcribe telomerase.</figcaption>
							</figure>

						</div>
					</div>

					<div class="row" id='research'>
						<div class="col-lg-12">
							<h3 id='testing_cmyc'>Testing of c-Myc induction of hTERT</h3>
						</div>
					</div>
					<div class="row" id='research'>
						<div class="col-lg-12">
							<h4 id='purpose'>Purpose</h4>
							<p>Our purposes in the telomere extension aspect of E-Mortality are:</p>
							<ol>
								<li>To test whether c-Myc expression is capable of inducing hTERT promoter expression.</li>
								<li>To test the concentration of c-Myc to the transcription efficiency of the hTERT promoter.</li>
								<li>Use the above data to determine what concentration of c-Myc we need to express in order to induce the translation of enough telomerase to maintain the length of telomeres.</li>
							</ol>
						</div>
					</div>

					<div class="row" id='research'>
						<div class="col-lg-12">
							<h4 id='experimental_design'>Experimental Design</h4>
							<p>We design two plasmids for this experiment. The first is c-Myc constitutively expressed by CMV promoter, on the pcDNA6C plasmid (figure 1). The second is the hTERT promoter upstream of a green fluorescent protein (GFP) gene tagged with SV40, on the pUC plasmid (figure 2).</p>
							<p>We use normal human fetal lung fibroblast cells (MRC-5) for transfection to see whether c-Myc expression does induce hTERT promoter transcription. In our experimental cell, we transfect both plasmids.  In our control cell, we transfect only the plasmid with hTERT and GFP (figure 3.)</p>
							<p>Our expected result was to see that the MRC-5 cell with both plasmids transfected expresses GFP, while the MRC-5 cell with only the hTERT-GFP plasmid does not express GFP (figure 4.) This is because only the MRC-5 cell transfected with the constitutively expressed c-Myc plasmid should induce the hTERT promoter to express GFP.</p>
						</div>
					</div>
					<div class="row" id='research'>
						<div class="col-lg-6">
							<figure>
								<img src="http://2014hs.igem.org/wiki/images/a/a7/Control-cell.png">								
								<figcaption class='darkblue'> Figure 2: Representation of the control cell for testing c-Myc induction of hTERT. We only transfect hTERT upstream of GFP. The expected result is that no GFP is expressed because no c-Myc is present to induce the hTERT promoter.</figcaption>								
							</figure>						
						</div>
						<div class="col-lg-6">
							<figure>
								<img src="http://2014hs.igem.org/wiki/images/5/5c/Cmyc-htert-green.png" alt="">								
								<figcaption class='darkblue'> Figure 3: Representation of the experimental design of the MRC-5 cell transformed with both the plasmid constitutively expressing c-Myc and the plasmid with hTERT and GFP. This plasmid is expected to glow green due to c-Myc induction of hTERT.</figcaption>								
							</figure>						
						</div>
					</div>



					<div class="row" id='research'>
						<div class="col-lg-12">
							<h4 id='results'>Results</h4>
						</div>
					</div>
					<div class="row" id='research'>
						<div class="col-lg-11 col-lg-offset-1">
							<h4 id='cmyc_cloning'>c-Myc Cloning</h4>
							<p>We successfully cloned the c-Myc gene from the HeLa cell.</p>
							<p>During c-Myc sequence examination, we found a PstI site embedded in the middle of the c-Myc gene. However, we knew we had to transfer the construct into both the pcDNA6C and biobrick plasmids for further use, and that required EcoR1 and PstI overhangs. However, for time efficiency, instead of site directed mutagenesis of the middle, we instead used the sticky end PCR method to generate these overhangs. See <a href="http://rnai.genmed.sinica.edu.tw/file/protocol/12_Sticky_end_PCRV2.pdf">Protocols</a> for further information.</p>
							<p>We have transferred this gene to the pcDNA6C plasmid, ligated downstream of the CMV promoter. Figure 3 is the PCR colony check demonstrating that our cloned c-Myc on pcDNA6C is at the correct length of 1.2 kb using T7 and c-Myc reverse primer 1 (Table 1.) </p>
							<p>We have also prepared the c-Myc coding site on pSB1C3 and submitted it as a BioBrick.</p>
							<table class="table table-bordered" style='width: 80%;margin-left:10%;'>
								<caption><b>Table 1.</b> Primers used to clone the c-Myc gene using the sticky end PCR method.</caption>
								<thead>
									<tr>
										<th>Primer</th>
										<th>Primer Sequence</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>c-Myc Forward Primer (FP) 1</td>
										<td>5'-ttaaaatgcccctcaacgttagc-3'</td>
									</tr>
									<tr>
										<td>c-Myc Forward Primer (FP) 2</td>
										<td>5'-aatgcccctcaacgttagc-3'</td>
									</tr>
									<tr>
										<td>c-Myc Reverse Primer (RP) 1</td>
										<td>5'-ctagccgcacaagagttccgtag-3'</td>
									</tr>
									<tr>
										<td>c-Myc Reverse Primer (RP) 2</td>
										<td>5'-ccgcacaagagttccgtag-3'</td>
									</tr>
								</tbody>
							</table>
							<figure style='width:70%;margin-left:15%;'>
								<img src="http://2014hs.igem.org/wiki/images/5/53/K1253500.png" alt="">
								<figcaption class='darkblue'>Figure 4. Gel check of the colony PCR of c-Myc open reading frame on pcDNA6C plasmid, cloned using T7 primer and c-Myc reverse primer 1. (A) This figure demonstrates that we successfully cloned c-Myc on the pcDNA6C plasmid.</figcaption>
							</figure>								
						</div>
					</div>


					<div class="row" id='research'>
						<div class="col-lg-11 col-lg-offset-1">
							<h4 id='htert_promoter_cloning'>hTERT Promoter Cloning</h4>
						</div>
					</div>
					<div class="row" id='research'>
						<div class="col-lg-5 col-lg-offset-1">
							<figure style='float:right;'>
								<img src="http://2014hs.igem.org/wiki/images/8/89/Htert.png" style='width:50%;' >
								<figcaption class='darkblue'>Figure 5. Gel check of the colony PCR of c-Myc open reading frame on pcDNA6C plasmid, cloned using T7 primer and c-Myc reverse primer 1. (A) This figure demonstrates that we successfully cloned c-Myc on the pcDNA6C plasmid.</figcaption>
							</figure>									
						</div>
						<div class="col-lg-6">
							<p>Though our final construct does not need the hTERT promoter, we wanted to clone it to be able to test the concentration of c-Myc to transcription efficiency of the hTERT promoter. However, during the hTERT promoter sequence analysis, we discovered that the promoter had a 76% GC content, meaning the primers would have easily annealed to undesired genome fragments during PCR. Therefore, we attempted to clone the hTERT promoter using three different PCR protocols. However, none of the sequence analysis results showed the correct fragment for the hTERT promoter.</p>							
							<p>Since we could not clone the hTERT promoter, we were not able to carry out our experiment to determine c-Myc protein concentration to hTERT promoter efficiency. Therefore, we chose instead to focus these efforts on using past research on c-Myc and the hTERT promoter to model the protein to promoter interaction.</p>
						</div>
					</div>

					<div class="row" id='research'>
						<div class="col-lg-12">
							<h3 id='discussion'>Discussion</h3>
						</div>
					</div>
					<div class="row" id='research'>
						<div class="col-lg-12">
							<p>We were able to clone c-Myc for further use, but because we could not PCR out hTERT promoter, we instead used modeling to suggest the relationship between c-Myc concentration and hTERT promoter transcription. The results are as follows:</p>
						</div>
					</div>
					<div class="row" id='research'>
						<div class="col-lg-6">
							<figure style=''>
								<img src="http://2014hs.igem.org/wiki/images/3/36/C-Myc_induction_of_hTERT.jpg" style=''>
								<figcaption class='darkblue'>Figure 6: Graph that shows the relationship between the molecules of c-Myc and the transcription of hTERT.  The curve was obtained through the curve-fitting function in Mathematica.  This model is necessary to determine the molecules of c-Myc necessary to induce hTERT so that enough telomerase can maintain telomere length.</figcaption>
							</figure>
							<p>This graph is significant because it gives us an exact relationship between c-Myc and the hTERT promoters.  This gives us a baseline towards evaluating how much c-Myc we need to express.  Using Mathematica, we used the equation depicted in this graph to determine how much c-Myc to express by solving for the differential equations for hTERT. </p>
						</div>
						<div class="col-lg-6">
							<figure style=''>
								<img src="http://2014hs.igem.org/wiki/images/c/cd/Finding_c-Myc.jpg" style=''>
								<figcaption class='darkblue'>Figure 7: Graph that shows the relationship between time and telomerase expression with a c-Myc concentration of 616 molecules/cell.  The horizontal line has a value of  920, indicating the minimum amount of hTERT that we aim to express through our construct.</figcaption>
							</figure>
							<p>The result is that we have determined that an absolute minimum of 616 c-Myc proteins has to be expressed at any time to produce enough telomerase to maintain telomeres. Using this value, we are able to determine what construct to engineer for regulation of c-Myc.</p>
						</div>
					</div>


					<div class="row" id='research'>
						<div class="col-lg-12">
							<h3 id='modeling_specifics'>Modeling Specifics</h3>
						</div>
					</div>
					<div class="row" id='research'>
						<div class="col-lg-12">
							<p>We consulted a paper on c-Myc and hTERT(Zou et al.) and curve-fitted it using the form of the Hill equation that describes the kinetics of the reaction.  However, before doing this, we made the conversions shown below to convert the concentration of c-Myc from ug/well to proteins/cell to simplify comparisons:</p>
							<img src="http://2014hs.igem.org/wiki/images/0/0e/Modeling_specifics.png" style='margin-left: 13%;'>
							<p>The molecular weight of c-Myc was listed at 67kDa.  We multiplied by 0.8 because the Zou et. al. paper cited that cells grew to about 70 or 80% confluence.  We took the average volume of a mammalian cell, which can be anywhere from 500 to 5000 um3.  The Zou et. al. paper cited that they used a standard 6-well plate, which is usually 5 mL in volume, so we used that to calculate the number of cells at 2750 um3 that would add up to 5 mL in volume. </p>
							<table class="table table-bordered" style='width: 70%;margin-left:15%;'>
								<caption style='caption-side:bottom;'>Table :This table shows the conversions that were made from the paper put forth by Zou et al.</caption>
								<thead>
									<tr>
										<th>ug/well</th>
										<th>0.5</th>
										<th>1</th>
										<th>1.5</th>
										<th>2</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Molecules/cell</td>
										<td>3088.619402</td>
										<td>6177.238804</td>
										<td>9265.858206</td>
										<td>12354.47761.</td>
									</tr>
								</tbody>
							</table>

							<p>The translation of hTERT depends on the amount of hTERT mRNA, which is in turn governed by the activity of the hTERT promoter.  hTERT is induced by c-Myc, so the following equation was used: B*x<sup>n</sup>/(K<sub>d</sub>+x<sup>n</sup>).  B stands for the maximum promoter activity, in transcripts/min; n represents the cooperativity, meaning the amount that binding of c-Myc increases binding affinity; K<sub>d</sub> is the dissociation constant, which describes how readily a substance separates into components; x stands for the amount of c-Myc at a certain point in time.  However, since the y-axis of the graph given in the Zou et. al. paper measured relative fluorescence, the value of B actually did not mean a lot.  Without information on absolute promoter strength in transcripts/min after sifting through literature and failing to acquire the hTERT promoter, we just assumed that it had the same value as the promoters given in the Elowitz paper at 29.97 transcripts/min.  The curve-fit from Mathematica provided the values for n and K<sub>d</sub>, which are 3.4126249382894613 and 7.754249698478112*10<sup>13</sup>, respectively.</p>
						</div>
					</div>


					<div class="row" id='research'>
						<div class="col-lg-12">
							<h3 id='conclusion'>Conclusion</h3>
						</div>
					</div>
					<div class="row" id='research'>
						<div class="col-lg-12">
							<p>We were able to quantify how much c-Myc induces the hTERT promoter to express enough telomerase to maintain the length of telomeres, and successfully cloned the c-Myc gene.  Then, using literature and models, we determined that a minimum of 616 c-Myc proteins have to be expressed to sustain the minimum 920 molecules of telomerase that are necessary to maintain telomeres.</p>
							<p>Now that we determined the mechanism by which to induce telomerase to necessary levels to maintain telomere levels and hence extend cell life-span, we must now address what construct we should build to regulate c-Myc to the necessary levels. This is second part of our project: circuit regulation.</p>
						</div>
					</div>


					<div class="row" id='research'>
						<div class="col-lg-12">
							<h3 id='future_work'>Future Work</h3>
						</div>
					</div>
					<div class="row" id='research'>
						<div class="col-lg-12">
							<p>In the future, we hope to successfully clone the hTERT promoter in order to carry out our experiment for determining c-Myc concentration to hTERT promoter efficiency in MRC-5 cells.</p>
							<p>We will carry out the experiment determining the relationship between c-Myc concentration and hTERT induction in different human somatic cells, since different cell environments will cause different induction efficiencies of the hTERT promoter, and thus the concentration of c-Myc needed to induce the amount of telomerase required to maintain the length of telomeres will vary as well.</p>
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
