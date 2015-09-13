<html>

<head>
	<title>Experimental - TAS Taipei iGEM Wiki</title>
	<?php include("./head.php"); ?>
</head>

<body data-spy="scroll" data-target="#category_navbar">
	<div class="container" style='z-index:10;position:relative;'>
		<?php include("./navigation.php"); ?>
		<br><br>
		<div id='bodycontainer' class='row card'>
			<div class="col-sm-2" style='padding-left:8px;'>
				<div id="category_navbar">
					<ul class="nav nav-list" data-spy="affix" data-offset-top="150" style='-webkit-transform: translateZ(0);width:168px;margin-left:0px' >
						<li><a href="#construct">Granzyme Inhibitor Construct</a></li>
						<ul>
							<li><a href="#act">MAIN INHIBITOR</a></li>
							<li><a href="#yebf">YEBF</a></li>
							<li><a href="#temp">TEMPERATURE SENSITIVE PROMOTER</a></li>
						</ul>
						<li><a href="#prototype">Prototype</a></li>
						<li><a href="#safety">Safety</a></li>
						    <!--<ul>
						    	<li><a href="#abstract">Abstract</a></li>
						    	<li><a href="#overview">Overview</a></li>
						    </ul>-->
						</ul>
					</div>


				</div>

				<div class="col-sm-9">
					<div class="row">
						<div class="col-sm-12">
							<h1>Experimental</h1>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<h2 id='construct'>Main Construct</h2>
							<figure class = "col-sm-12">
								<img src="http://2015.igem.org/wiki/images/8/89/Exp_fig1.png">
								<figcaption class='darkblue'>Figure 1. Main Construct: We designed a main construct containing a temperature sensitive promoter, a motor protein, and the extracellular Granzyme B inhibitor.</figcaption>
							</figure>
							<p class = "col-sm-12">Our circuit design consists of Temperature Sensitive Promoter  (Bba_K608351 ) designed by iGEM11_Freiburg. This promoter is the primary regulator and does so by activating at or above 37 degrees Celsius. We use a strong ribosome binding site (RBS) (Bba_B0034 ) based on the Elowitz repressilator. In our open reading frame (ORF), we have selected yebF  (can’t find this yet), a motor protein that secretes proteins fused to it through the E. Coli membrane. Fused to yebF, we have our Granzyme B inhibitor, ACT with mutations that result in 3 amino acid mutations when translated into a protein . Finally, to stop transcription, we have a double terminator (Bba_B0015 ). </p>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<h2 id='act'>Granzyme B Inhibitor</h2>

							<h3>Overview</h3>
							<p>Since the goal of our project is to inhibit Granzyme B in humans, we knew we had to find an inhibitor that would work well in humans. However, through literature research, we found that mice naturally have extracellular Granzyme B inhibitors, but humans do not. For our project, we needed to find a Granzyme B inhibitor that would function extracellularly in humans. Finally, we found a paper that performed amino acid mutations on an extracellular human protein, Antichymotrypsin (ACT), which allowed it to bind to and inhibit Granzyme B.</p>

							<h3>Mutations - Removing Pstl cutting sites</h3>
							<p>After reading the paper, we ordered ACT cDNA from Sino Biological. Upon receiving our gene and analyzing the provided sequence, we learned that there are two PstI cutting sites that would interfere with cloning. In order to be able to clone this part in future uses, we needed to remove these sites. The part was sent to Mission Biotech for mutagenesis. After mutagenesis we sequenced the part to confirm the PstI sites were removed. </p>

							<h3>Mutations - 3 Amino Acid Mutations</h3>
							<p>After the PstI sites were removed, we needed to then conduct the 3 amino acid mutations. It is important to note that naturally, ACT is an extracellular protein found in humans. This makes it a good candidate because it is site specific, however it lacks the ability to inhibit Granzyme B. Therefore, the paper introduced the reaction center loop (RCL) from a mouse Granzyme B inhibitor, Serpina3n, into ACT. The authors found that the mutations successfully retain the extracellular nature of ACT while allowing it to bind and inhibit Granzyme B. We decided to follow the paper’s design and conduct the same mutations. Once again, we sent the part out to Mission Biotech for several nucleotide mutations resulting in the altering of 3 amino acids. Figure 8 shows the three amino acid mutations selected by the paper.</p>
							<figure class = "col-sm-10">
								<img src="http://2015.igem.org/wiki/images/0/09/Exp_fig8.png">
								<figcaption class='darkblue'>Figure 8. ACT amino acid mutations: The paper selected three amino acid mutations from mouse Granzyme B inhibitor, serpin3n.</figcaption>
							</figure>
							<p class = "col-sm-5">After receiving our mutated ACT from Mission Biotech, we sequenced the part again and found that the mutated ACT was correct and ready to be cloned into our full construct.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<h3>Cloning – Attaching iGEM Prefix and Suffix</h3>
							<p>In order for us to clone the ACT into our full construct, we needed to attach restriction enzyme sites for the 10A assembly standard. We designed appropriate primers that would attach EcorI and XbaI sites before ACT and SpeI and PstI sites behind ACT. These primer designs were then sent to Tri-I Biotech for oligo synthesis. Upon receiving our primers, PCR reactions were set up with Pfu as DNA polymerase.</p>
							
							<h3>Testing – ACT Protein Assay</h3>
							<p>Upon completing our full circuit, we decided to test the function of ACT. Since our lab is only compliant to biosafety level 1, we decided to run a protein gel to ensure that ACT was at the correct size. We prepared a GFP positive control (temp-sens promoter + GFP generator) and a terminator only negative control. </p>
							<figure class = "col-sm-12">
								<img src="http://2014hs.igem.org/wiki/images/d/d6/Plasmids.png">
								<figcaption class='darkblue'>Figure 9. ACT test construct: We decided to clone ACT with the temperature sensitive promoter to confirm ACT’s</figcaption>
							</figure>
							<p>The circuit in Figure 9 was successfully expressed in E. coli as confirmed by Figure 10 and Figure 11. Now that we had the test construct successfully cloned, we needed a method to test for the amount of inhibitor produced. We choose to run a protein gel with staining to check whether there was a protein at the right size. Based on the intensity of the band compared to a standard curve of amylase, we are then able to approximate the protein concentration giving an idea as to what the strength of the temperature sensitive promoter is.</p>
							<figure class = "col-sm-12">
								<img src="http://2014hs.igem.org/wiki/images/d/d6/Plasmids.png">
								<figcaption class='darkblue'>Figure 10. Gel picture of temperature sensitive promoter and ACT construct: This gel picture shows the PCR results of the temperature sensitive promoter and ACT construct with the correct length.</figcaption>
							</figure>
							<figure class = "col-sm-12">
								<img src="http://2014hs.igem.org/wiki/images/d/d6/Plasmids.png">
								<figcaption class='darkblue'>Figure 11 – Sequencing results of temperature sensitive promoter and ACT construct: We sent the temperature sensitive promoter and ACT construct to be sequence, and the results verify that the construct was successfully cloned.</figcaption>
							</figure>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<h2 id = 'yebf'>Yebf</h2>
							<h3>Overview</h3>
							<p>In order for our Granzyme B inhibitor to function properly, it needs to be able to come in contact with Granzyme B. For that reason, we inserted yebF in front of ACT. Yebf is a motor protein that will secrete proteins outside of the E. coli membrane. Thus, when ACT is fused to yebF, it will be secreted outside of the bacterial cell and able to inhibit Granzyme B locally.</p>

							<h3>Cloning</h3>
							<p>We asked NYMU for yebF and received the part promptly. Since yebF was given to us on a composite part plasmid, we also needed to design primers to insert restrictive enzyme cutting sites. Following the same method used for ACT, we had our primers synthesized by Tri-I Biotech and performed PCR. Figure # shows yebF successfully cloned into...</p>
							
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<h2 id='temp'>Temperature Sensitive Promoter</h2>

							<h3>Overview</h3>
							<p>For our project, our team decided to look for a promoter that can be induced manually such as a UV promoter. While searching through the iGEM parts registry, we found a temperature sensitive promoter, a composite part designed by iGEM11_Freiburg. We ordered this part from the iGEM parts registry and immediately began cloning and testing. </p>
							
							<h3>Cloning</h3>
							<p>The first goal with the temperature sensitive promoter was to confirm that it was functional. In order to test the promoter’s activity, we designed a test circuit with green fluorescent protein (GFP) as the reporter (Figure 2). We hypothesized that at lower temperatures the promoter should not initiate transcription; therefore no GFP would be present. When exposed to higher temperatures, the promoter would then begin transcription and express the downstream GFP. As seen in Figure 3 and Figure 4, we have successfully cloned in a GFP reporter behind the temperature sensitive promoter. </p>
							<figure class = "col-sm-12">
								<img src="http://2014hs.igem.org/wiki/images/d/d6/Plasmids.png">
								<figcaption class='darkblue'>Figure 2. Test circuit for temperature sensitive promoter. We attached a downstream GFP generator as a reporter for promoter activity.</figcaption>
							</figure>
							<figure class = "col-sm-12">
								<img src="http://2014hs.igem.org/wiki/images/d/d6/Plasmids.png">
								<figcaption class='darkblue'>Figure 3. PCR results of temperature sensitive promoter and GFP generator: this picture shows that a GFP generator has successfully been cloned behind the temp-sens promoter.</figcaption>
							</figure>
							<figure class = "col-sm-12">
								<img src="http://2014hs.igem.org/wiki/images/d/d6/Plasmids.png">
								<figcaption class='darkblue'>Figure 4. Transformation plate of temperature sensitive promoter and GFP generator: this picture shows the GFP being produced after the construct was transformed and incubated at 37c.</figcaption>
							</figure>

							<h3>Testing - Activation Temperature</h3>
							<p>After successfully cloning in the temperature sensitive promoter, we realized one immediate problem: the exact temperature of activation is unknown. In order to test this, we restreaked the promoter and GFP generator construct on to several plates and incubated at different temperatures: 30C, 32C, 35C, 36 (not shown) and 37C. In figure 5, under normal light, it is shown that all four plates successfully grew; however, in figure 6, under blue light conditions, it can be seen that only the 37C plate actually glowed. This is evidence that the temperature sensitive promoter is only active at and above 37C. </p>
							<figure class = "col-sm-6">
								<img src="http://2015.igem.org/wiki/images/8/80/Exp_fig5.jpg">
								<figcaption class='darkblue'>Figure 5. Temperature sensitive promoter and GFP generator construct under normal light: All four plates have colony growth.</figcaption>
							</figure>
							<figure class = "col-sm-6">
								<img src="http://2015.igem.org/wiki/images/d/de/Exp_fig6.jpg">
								<figcaption class='darkblue'>Figure 6. Temperature sensitive promoter and GFP generator construct under blue light conditions: Only bacteria incubated at 37C actually produced GFP and glowed. This is evidence that the promoter is only active at or above 37C.</figcaption>
							</figure>

							<h3>Testing - Activation Time</h3>
							<p>After determining the activation temperature of the promoter, we realized we also need to find out how long it takes before the promoter is activated. In order to test for the time until activation, we needed to streak and grow the temperature sensitive promoter and GFP generator construct in a lower temperature (35C) to ensure that the promoter was not already active. After the cells were incubated and grown to maturity, the plates would then be transferred into a higher temperature (37C) and checked hourly until activation. </p>
							<figure class = "col-sm-10">
								<img src="http://2015.igem.org/wiki/images/f/f9/Exp_fig7.png">
								<figcaption class='darkblue'>Figure 7. Temperature sensitive promoter and GFP generator construct activation time: From this test, we determine that visible GFP protein concentrations can be seen after 3 hours of the temp-sens promoter activation. </figcaption>
							</figure>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<h3 id='prototype'>Prototype</h3>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<h3 id='safety'>Safety Switch</h3>
						</div>
					</div>

					<div class="row" id='research'>
						<div class="col-sm-12">
							<h3 id='citations'>Citations</h3>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<?php include("./footer.php"); ?>
	</body>
	</html>