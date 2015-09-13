<!DOCTYPE html>
<html>

<head>
	<title>Circuit Regulation - TAS Taipei iGEM Wiki</title>
	<?php include("./head.php"); ?>

</head>


<body data-spy="scroll" data-target="#category_navbar">
	<div class="container" style='z-index:10;position:relative;'>
		<?php include("./navigation.php"); ?>

			<div id='bodycontainer' class='row'>
				<div class="col-lg-3" style='padding-right:0;'>
					<div id="category_navbar">
						<ul class="nav nav-list" data-spy="affix" data-offset-top="150" style='-webkit-transform: translateZ(0);width:260px;' >
						    <li><a href="#motivation">Aim and Motivation</a></li>
						    <li><a href="#three_component_oscillator">Three Component Oscillator</a></li>
						    <ul>
								<li><a href="#aim_and_motivation_3co">Aim and Motivation</a></li>						    	
						    	<li><a href="#repressor_efficacy_testing">Experiments: Testing Repressor Efficacy</a></li>
						    	<ul>
						    		<li><a href="#repressor_efficacy_aim">Aim and Motivation</a></li>
						    		<li><a href="#repressor_efficacy_design">Exp. Design</a></li>
						    		<li><a href="#repressor_efficacy_results">Results and Discussion</a></li>
						    	</ul>
						    	<li><a href="#modeling_specifics">Limitations of 3-Comp Osc.</a></li>
						    	<li><a href="#promoter_strength_experimentation">Exp: Testing Promoter Strength</a></li>
						    	<ul>
						    		<li><a href="#promoter_strength_aim">Aim and Motivation</a></li>
						    		<li><a href="#promoter_strength_design">Exp. Design</a></li>
						    		<li><a href="#promoter_strength_results">Results and Discussion</a></li>
						    	</ul>
						    	<li><a href="#">Conclusion</a></li>						    	
						    </ul>
						    <li><a href="#two_component_repressilator">Two Component Repressilator</a></li>
						    <ul>
						    	<li><a href="#aim_and_motivation">Aim and Motivation</a></li>
						    	<li><a href="#construct_design">Construct Design</a></li>
						    	<li><a href="#table_of_comparison">Benefits</a></li>
						    </ul>
						    <li><a href="#conclusion">Conclusion</a></li>
						</ul>
					</div>


				</div>

				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-12">
							<h1>Circuit Regulation</h1>
							<h3 id='motivation'>Aim and Motivation</h3>
							<p>The aim of the circuit regulation aspect of E-Mortality is to regulate the amount of telomerase produced in a cell through controlling the expression of c-Myc, which induces the upregulation of telomerase through the hTERT promoter.</p>
							<p>However, we only want to induce so much c-Myc so that enough telomerase is produced to maintain the length of telomeres. This is because we do not want the telomeres to continuously extend, for that might lead to unlimited cell replication, nor do we want the telomeres to reduce in size, for that would induce apoptosis. Rather, we hope to regulate the levels of telomerase so that at a certain point in time, there is always the amount of telomerase necessary only to maintain telomere length.</p>
							<p>Therefore, our circuit cannot constitutively express c-Myc, for that would mean that the hTERT promoter would constantly express TERT and increase levels of telomerase. This constitutive expression would lead to uncontrolled telomere extension.</p>
							<p>Instead, rather, we choose to use an oscillator to express doses of c-Myc, and thus induce doses of telomerase production. To accomplish expressing these doses of c-Myc in order to maintain a constant amount of telomerase, we employ the genetic oscillator.</p>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<h3 id='three_component_oscillator'>The Three Component Oscillator</h3>
							<figure style='float:right;width:50%;padding:10px;'>
								<img src="http://2014hs.igem.org/wiki/images/5/50/Regulationnn.png">
								<figcaption class='darkblue'>Figure 1: Circuit design of the three component repressilator we initially were going to use to regulate expression of c-Myc. The repressilator expresses c-Myc in an oscillatory fashion, so that there is not constant expression of c-Myc, and hence not constant induction of telomerase.</figcaption>
							</figure>
							<h4>Aim and Motivation</h4>
							<p>Initially, we chose to use the three component repressilator to express c-Myc. This oscillator consists of three different promoters and repressors, of which c-Myc could be put behind any one repressor coding region.</p>							
							<p>The goal of the 3 component oscillator is to create a way to regulate the amount of c-myc expressed. By using a repressilator mechanism to regulate the amount of c-myc expressed we can control the expression of hTERT and therefore the mount of telomerase expressed. The amount of telomerase will then determine the length of the telomeres at the end of the chromosomes.</p>
							<p>This oscillator would express c-Myc in doses, as it does the repressor proteins, through a series of promoter inductions and repressions.</p>
							<p>However, we were not sure if the genetic oscillator would be successful. Therefore, while building the oscillator we made sure to test each part of the oscillator. The first was the efficacy of repressor repression.</p>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<h4 id='repressor_efficacy_testing'>Experiments: Testing Repressor Efficacy</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-11 col-lg-offset-1">
							<h4 id='repressor_efficacy_aim'>Aim and Motivation</h4>
							<p>The repressor efficacy testing was done to prove that the promoters used in the 3 component repressilator will be effectively repressed.</p>
							<h4 id='repressor_efficacy_design'>Experimental Design</h4>
							<p>With the purpose in mind, the first logical step is to prove that components used can repress their respective promoters. So for the design, we replaced the following open reading frames with GFP. This way, we could observe the effects of gene expression and determine if the repression was successful or not.</p>
							<p>For the control experiment, we had a positive control that only had a circuit expressing green fluorescent protein through the constitutive promoter in front because there are no genes present to repress the promoter. For the experimental construct, we expressed the respective repression mechanism, LacI for repression of pLac, cI for repression of pcI, and TetR for repression of pTet. These plasmids were successfully produced, as shown by figure 2. If the gene for the repression mechanism is expressed then the following promoter will not express green fluorescent protein and therefore we will know the experimental construct has succeeded.</p>
							<h4 id='repressor_efficacy_results'>Results</h4>
							<p>Our gels confirm that the plasmids that were necessary for the repressor testing were correct. As shown in the top row, all the pLac, pTet, and pcI repressor circuits were correct, and so were the promoters ligated to GFP.</p>
							<figure style=''>
								<img src="http://2014hs.igem.org/wiki/images/b/ba/Repressor_repression_efficacy.png">
								<figcaption class='darkblue'>Figure 2: Top, gel check confirmation that the pLac, pTet, and pcI experimental repression plasmids are correct. Bottom left, confirmation that the pTet+GFP positive control plasmid is correct. Bottom right, confirmation that the pcI+GFP and the pLac+GFP positive control plasmids are correct.</figcaption>
							</figure>
							<p>The plates for the experiments show that the plates did not express green fluorescent proteins as expected and therefore showed the successful repression of their respective promoters. This was also confirmed by gel electrophoresis results. </p>
							<figure style=''>
								<img src="http://2014hs.igem.org/wiki/images/2/2d/Repressor_repression_efficacy_2.png">
								<figcaption class='darkblue'>Figure: Examined horizontally, the left picture shows the constitutively expressed repressor to repress its promoter expressing GFP. The right picture shows the constitutive expression of GFP by the promoter, without constitutive expression of its repressor to bind to the promoter. This figure demonstrates that the repressors are successful at repressing their respective prom</figcaption>
							</figure>
							<p>This data is significant in proving that pLac was successfully repressed by expression of LacI, pTet by the expression TetR, and pcI by the expression of cI. The repressor components used in the repressilator are hence effective.</p>
							<p>After analyzing the data from the repressor testing, we found that with similar bacterial biomasses, some E. coli cells glew brighter than others. This led us to research the differing promoter strengths of pTet, pLac, and pcI, their effects on the oscillations, and other factors that might affect ideal oscillation.</p>
						</div>
					</div>



					<div class="row">
						<div class="col-lg-12">
							<h4 id='modeling_specifics'>Limitations of Three Component Oscillator</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<p>Upon more detailed inspection of the models used to develop the oscillator, we found several assumptions that were used to idealize the construct and thus allow it to oscillate. These assumptions were:</p>
							<ol>
								<li>Equal promoter strengths of pTet, pLac, and pcI</li>
								<li>Equal repressor half lives of TetR, LacI, and cI</li>
								<li>Equal dissociation constants of TetR, LacI and CI</li>
							</ol>
							<p>Under all of these ideal conditions, our models of the repressilator looked as follows:</p>
							<figure style='width:70%;margin-left:15%;'>
								<img src="http://2014hs.igem.org/wiki/images/8/8d/Ideal_Oscillator.jpg">
								<figcaption class='darkblue'>Figure 4: Graph that shows the ideal behavior of the three component repressilator put forth by Elowitz and Leibler in 2000.  The blue line represents LacI, the red line represents TetR, and the yellow line represents lambda CI.  The values and equations for the model were obtained from the BioModels Database. The graph was obtained by numerical integration using Mathematica.</figcaption>
							</figure>
							<p>The promoter strength, repressor half-lives, and dissociation constants were all assumed to be the same in models of the three component oscillator.  However, we found evidence that promoter strengths, dissociation constants, and repressor half lives for components in the oscillator are different. We thus decided to test if differences in promoter strengths, dissociation constants, and repressor half lives alter ideal oscillatory behavior. These results are shown below:</p>
							<figure style='width:70%;margin-left:15%;'>
								<img src="http://2014hs.igem.org/wiki/images/0/05/Three_graphs.jpg">
								<figcaption class='darkblue'>Figure 5: Graph that shows the different behaviors of the three component oscillator after changing promoter strengths, repressor half-lives, and dissociation constants are shown on the left.  The blue line represents LacI, the red line represents TetR, and the yellow line represents lambda CI.  Changing the promoter strength altered the peaks of oscillation, but did not stop the oscillator from oscillating(a).  Extending the half-life of a repressor dampened the oscillations and eventually resulted in the system reaching equilibrium(b).  Implementation of more realistic values for dissociation(c).  These values were taken from the 2009 Aberdeen iGEM team, which consulted expert opinion in making their calculations.  Together, these graphs show that the three component repressilator cannot be trusted to oscillate perfectly in reality.</figcaption>
							</figure>
							<p>This graph shows that changing the promoter strength changed the peaks of the proteins and had little effect on derailing the oscillation.  On the other hand, changing the half-lives and dissociation constants had profound effects on oscillator behavior.  After making LacI half-life five times as long, the oscillations damped quickly and the system tended towards equilibrium.  The oscillator did show some resistance to reducing half-lives, but overall it showed that differences in protein half-life can entirely derail the oscillations.  Changing the dissociation constant to the more realistic estimates computed by the 2009 Aberdeen iGEM team had an even more profound effect; the system immediately tended towards equilibrium, as more repressors were needed to overcome the effect of dissociation. </p>
							<p>This shows that with realistic assumptions of differing promoter strengths, repressor half lives, and repressor dissociation constants, the oscillator fails to operate. This following model shows the change when all three parameters are changed:</p>
							<figure style='width:70%;margin-left:15%;'>
								<img src="http://2014hs.igem.org/wiki/images/3/3a/Combined_Test.jpg">
								<figcaption class='darkblue'>Figure 6: Graph that shows the behavior of the repressilator after implementing changes to promoter strength, repressor half-life, and constant of dissociation that try to simulate more realistic conditions.</figcaption>
							</figure>
							<p>Any oscillations are quickly dampened and the system moves to equilibrium.  This result affirmed our concerns about the oscillator and directed us to design an alternative oscillator that is more likely to oscillate in reality.</p>
						</div>
					</div>



					<div class="row">
						<div class="col-lg-12">
							<h4 id='promoter_strength_experimentation'>Experiments: Testing Promoter Strength</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-11 col-lg-offset-1">
							<h4 id='promoter_strength_aim'>Aim and Motivation</h4>
							<p>In order to further ensure that the assumptions made by the three component oscillator were not realistic, we decided to test one of the primary assumptions of the three component repressilator: promoter strengths.</p>
							<p>In the three component repressilator, the promoter strengths are assumed to be the same. However, we want to test if this assumption is valid in reality. The aim of our experiment is thus to test the degree to which the pLac, pTet, and pcI promoters used in the repressilator system have the same strengths.</p>
							<p>The aim of this experiment is to determine whether the promoters pLac, pTet, and pcI used in the repressilator have the equal strengths, and we do so both in vitro and in silico.</p>

							<h4 id='promoter_strength_design'>Experimental Design</h4>
							<p>We first culture the plasmids of pTET+GFP, pLac+GFP, and pcI+GFP for 15 hours, before centrifuging the culture tubes, extracting the supernatant, and resuspending the bacteria expressing GFP in 1x phosphate buffered saline (PBS), which prevents further bacterial growth.</p>
							<p>We then used a fluorometer and standardized the OD <sub>600</sub> value of all three culture tubes to ensure that the bacterial concentration in the PBS is all the same, so that the only factor affecting the fluorescence was only the strength of the promoters expressing GFP.</p>
							<p>Afterwards, we separated the three different promoter solutions and also a control solution consisting solely of PBS, into three samples each. We then loaded the samples into a 96 well plate in groups of three, separated by which promoter is present in the sample.</p>
							<p>We then took fluorescence measurements for each of the promoter+GFP constructs to determine at different time intervals the different promoter strengths. We took standardized fluorescent measurements for both 15 hours and 38 hours.</p>

							<h4 id='promoter_strength_results'>Results and Discussion</h4>
							<p>The graph of results in figure 7 demonstrates that the strengths of each of the promoters are significantly different, in a ratio of approximately 1:2:3 for pcI:pTet:pLac. We plotted the standardized fluorescent intensities of GFP over two time points, and found that the results for the promoter strengths remained the same: pLac was the strongest promoter, followed by pTet, and pcI.</p>
							<figure style='width:70%;margin-left:15%;'>
								<img src="http://2014hs.igem.org/wiki/images/6/6e/Promoter_Testing_of_pcI_pTet_and_pLac.png">
								<figcaption class='darkblue'>Figure 7: Graph that shows the change in relative GFP intensity by the three promoters both after 15 hours and 35 hours after loading the sample into the 96 well plate. Promoter-wise, pcI is the least effective in producing GFP, followed by pTet, and finally pLac.</figcaption>
							</figure>
							<p>This promoter testing experiment demonstrates that pcI, pTet, and pLac have significantly different promoter strengths. This means that in reality, the assumption used in the three component repressilator that the promoter strengths are the same is not valid. The invalidation of this assumption causes the oscillator to oscillate at different amplitudes.</p>
							<p>To tackle this problem, we design a two component system that is able to oscillate at the same amplitude, despite promoter strength differences.</p>
							<h4>Conclusion</h4>
							<p>This promoter testing experiment demonstrates that pcI, pTet, and pLac have significantly different promoter strengths. This means that in reality, the assumption used in the three component repressilator that the promoter strengths are the same is not valid. The invalidation of this assumption causes the oscillator to oscillate at different amplitudes. To tackle this problem, we design a two component system that is able to oscillate at the same amplitude, despite promoter strength differences.</p>
							<p>We knew in reality that the three idealized assumptions, which allow the three component oscillator to stably oscillate, could not fully be qualified in reality, since there is inevitable promoter strength, repressor half life, and dissociation constant differences.</p>
							<p>Therefore, we chose to design a new oscillator system that would reduce the effects of idealized assumptions, and thus increase oscillatory reliability. This new oscillator we name as the “two component repressilator”.</p>
						</div>
					</div>


					<div class="row">
						<div class="col-lg-12">
							<h3 id='two_component_repressilator'>The Two Component Repressilator</h3>
							<h4>Aim and Motivation</h4>
							<p>Because we realized that the three component oscillator was too idealized and had a high probability of not working in reality, we took it upon ourselves to design a new oscillatory system that would oscillate without making the idealized assumptions of equal promoter strengths, repressor half lives, and repressor dissociation constants.</p>
							<h4 id='construct_design'>Construct Design</h4>
							<p>Instead of trying to complicate our construct, we decided to focus our efforts on designing a two component repressilator system based on the repression of only one promoter, and dissociation of only one repressor.</p>
							<p>The design we came up with is as shown below:</p>
							<figure style='width:50%;margin-left:25%;'>
								<img src="http://2014hs.igem.org/wiki/images/f/f7/Two_component_regulation.png">
								<figcaption class='darkblue'>Figure 7: Construct of the two component oscillator. pLac expresses LacI, creating oscillations that were observed in the self-repressilator.  pLac also expresses TetR and RFP.  TetR then goes on to inhibit pTet, which expresses c-Myc These oscillations can be observed by observing changes in color intensity In the experiments that were run in the lab, c-Myc was replaced GFP as a reporter, making it easier to observe oscillations, as the construct would alternate between red and green fluorescence.</figcaption>
							</figure>
							<h4>Construct Design</h4>
							<ol>
								<li>When the bacteria is first transformed, both constitutive promoters pLac and pTet are turned on. <br>a. This increases LacI expression</li>
								<li>The LacI that is expressed goes to repress both pLac promoters, which shuts down the LacI and TetR/RFP expression. <br>a. This decreases LacI expression</li>
								<li>After the LacI degrades from the pLac promoter, the pLac promoter is once again turned on, expressing LacI. <br>a. This increases LacI expression</li>
								<li>The LacI that is now expressed goes to repress the pLac promoters. <br>a. This decreases LacI expression</li>
							</ol>
							<p>This is the two component oscillatory cycle. The oscillator is dependent upon the degradation of the LacI repressor, as can be seen from the oscillatory mechanism. We modeled the oscillator under experimental conditions (see modeling for further details), and found that the construct still oscillated, which was not the case for the three component repressilator.</p>
							<figure style='width:70%;margin-left:15%;'>
								<img src="http://2014hs.igem.org/wiki/images/6/6e/Two-component_oscillator_with_reporter.jpg">
								<figcaption class='darkblue'>Figure 8: Graph that shows the behavior of the two component oscillator.  The blue line represents LacI, the yellow line represents TetR/RFP, and the green line represents GFP.  The half-life of GFP was adjusted to better visualize the oscillations. This graph shows that under non-ideal values of promoter strengths, repressor half-lives, and repressor dissociation constants, the oscillator could still oscillate.</figcaption>
							</figure>
							<h4>Benefits of the Two Component Oscillator</h4>
							<p>This two component oscillatory design has numerous benefits, which are not included in the three component repressilator:</p>
							<ol>
								<li>Promoter strength differences do reduce oscillation:<br>
									The promoter strength differences do not destabilize the oscillator, because the regulation is solely based on pLac.</li>
								<li>Repressor half-life differences do not reduce oscillation:<br>
									The two component oscillator is more easily tuned for oscillations because only one repressor is involved in the regulation. This makes it easier to modify oscillator behavior through altering repressor half-life through half-life reducing tags such as ssrA.</li>
								<li>Repressor dissociation differences do not reduce oscillation:<br>
									The two component oscillator handles the experimental dissociation constants for the repressors better than the three component oscillator did.</li>
								<li>Synchronization of oscillatory peaks can be achieved:<br>
									Sychronization of the oscillations in groups of cells is not a problem, because it can be tuned using Isopropyl-β-D-Thiogalactopyranoside (IPTG).</li>
							</ol>
							<p>IPTG is a chemical compound that allosterically inhibits the LacI repressor from binding to the pLac promoter. By using IPTG to disable LacI in a group of cells, all the oscillatory systems will shift to maximize pLac efficiency. When IPTG naturally degrades, the LacI will resume expression from the same oscillatory phase for all the cells in a group, thereby tuning the oscillations.</p>
							<p>In the normal three component repressilator, because the oscillatory phases of different cells are different, noise will be created, making the oscillator phases untuned. This noise would look like the following graph:</p>
							<figure style='width:70%;margin-left:15%;'>
								<img src="http://2014hs.igem.org/wiki/images/8/8d/Background_noise.jpg">
								<figcaption class='darkblue'>Figure 9: Graph that shows the relationship between time and the protein concentrations of different cells without synchronization.  Although only 15 proteins were simulated, it is clear from the graph that oscillatory behavior cannot be observed without synchronization.</figcaption>
							</figure>
							<p>However, we are able to synchronize the oscillatory constructs through use of the IPTG chemical compound, which would cause the peaks to become more aligned.</p>
							<p>Taken together, using the same modeling equations as used for the three component repressilator, yet not assuming ideal conditions, our two component system is still seen to oscillate, as demonstrated by the model below:</p>
							<figure style='width:70%;margin-left:15%;'>
								<img src="http://2014hs.igem.org/wiki/images/6/6e/Two-component_oscillator_with_reporter.jpg">
								<figcaption class='darkblue'>Figure 10: Graph that shows the behavior of the two component oscillator.  The blue line represents LacI, the yellow line represents TetR/RFP, and the green line represents GFP.  The bacteria are synchronized with IPTG in this scenario, allowing for a clear observation of oscillatory behavior.  This graph also used parameters that prevented the three component oscillator from oscillating.</figcaption>
							</figure>
							<h4>Benefits</h4>
							<p>The comparisons between the three component traditional repressilator and the two component oscillator are summarized in the table below:</p>							
							<table id='table_of_comparison' class="table table-bordered" style="width: 70%;margin-left:15%;">
								<caption><b>Table 1.</b> Table to show the differences between the three component and two component oscillators.</caption>
								<thead>
									<tr>
										<th></th>
										<th>Three component</th>
										<th>Two component</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><b>Promoter strength assumption</b></td>
										<td>Promoter strengths must be the same for ideal oscillation</td>
										<td>Promoter strength does not affect ideal oscillation</td>
									</tr>
									<tr>
										<td><b>Repressor half-life assumption</b></td>
										<td>Repressor half lives must be the same for ideal oscillation</td>
										<td>Repressor half lives do not have to be the same for ideal oscillation</td>
									</tr>
									<tr>
										<td><b>Dissociation constants</b></td>
										<td>Dissociation constant differences among repressors must be the same for ideal oscillation</td>
										<td>Dissociation constant differences affect ideal oscillations much less</td>
									</tr>
									<tr>
										<td><b>Synchronization</b></td>
										<td>IPTG synchronization reflex is slower</td>
										<td>IPTG synchronization reflex is quicker</td>
									</tr>
									<tr>
										<td><b>c-Myc expression and tunability</b></td>
										<td>Overexpresses c-Myc under virtually all conditions, so harder to tune</td>
										<td>Easier to tune than three-component oscillator, c-Myc expression can be tuned under control</td>
									</tr>
								</tbody>
							</table>
							<h4>Modeling of the two component oscillator</h4>
							<figure style='width:70%;margin-left:15%;'>
								<img src="http://2014hs.igem.org/wiki/images/3/36/C-Myc_induction_of_hTERT.jpg">
								<figcaption class='darkblue'>Figure 11:This graph shows the relationship between time and the expression of c-Myc and hTERT.  hTERT is represented by the blue line, while c-Myc is represented by the purple line.  hTERT concentration starts from zero but ascends rapidly due to an initial burst in c-Myc that matches the behavior of the oscillator; the initial burst in c-Myc is hard to observe here because of the long timespan of the graph.  After the initial burst of c-Myc, its concentration oscillates between around 500 to 800 proteins, causing hTERT to level out at 1111 molecules, which is reasonably close to the minimum of 920 molecules we aimed to express.</figcaption>
							</figure>
							<p>After the oscillator settles, it is able to express the number of c-Myc proteins that are necessary to maintain telomere length. Specifically, the oscillator is able to maintain a level of 1000 c-Myc proteins, which is significantly more than the 616 minimum number of c-Myc proteins necessary to maintain telomere length. The initial spike is caused by the constitutive promoters pTet and pLac being activated when first transfected into the cell.</p>
							<p>Therefore, our models suggest that our oscillator is capable of expressing the necessary concentrations of c-Myc.</p>
							<h4>Results from building the two component oscillator</h4>
							<p>In order to test the oscillator, we fused the proteins TetR to mRFP to use for visual testing. We submitted this newly created BioBrick as K1253100.</p>
							<figure style='width:70%;margin-left:15%;'>
								<img src="http://2014hs.igem.org/wiki/images/5/55/TetR.png">
								<figcaption class='darkblue'>Figure 12: Colony check for the PCR of TetR/mRFP. This gel demonstrates that the PCR of our TetR/RFP BioBrick was successful.</figcaption>
							</figure>
							<p>We then built the first half of our oscillator, which looks like this:</p>
							<figure style='width:70%;margin-left:15%;'>
								<img src="http://2014hs.igem.org/wiki/images/9/96/Eight.png">
								<figcaption class='darkblue'>Figure 14: On the left, the diagrammatic representation of the E. coli cell with the first half of our two component oscillator. On the right, plates of the E. coli transformed with the construct. As expected, the E. coli cells glew red because of constituitive expression of TetR/RFP and repression of pTet.</figcaption>
							</figure>	
							<figure style='width:70%;margin-left:15%;'>
								<img src="http://2014hs.igem.org/wiki/images/b/bf/K1253111.png">
								<figcaption class='darkblue'>Figure 15: Gel check of the K1253111 construct, which is the first half of the oscillator system. This gel check demonstrates that our K1253111 part is correct.</figcaption>
							</figure>
							<p>We then inserted the pLac+LacI to complete our oscillator design. This new part we name K125112, which we also submitted to the registry as a new oscillator design. The construct is depicted below:</p>
							<figure style='width:70%;margin-left:15%;'>
								<img src="http://2014hs.igem.org/wiki/images/b/b5/Full_oscillator.png">
								<figcaption class='darkblue'>Figure 16: Design of the entire two component oscillator. This oscillator is regulated by the expression of LacI, its binding to pLac, and its natural degradation from pLac.</figcaption>
							</figure>
							<p>The constitutively expressed LacI repressed the pLac promoters, which repressed the expression of TetR/RFP, and hence allowed the pTet promoter to express green. As expected, the colonies in which we transformed glew green, as shown below:</p>
							<figure style='width:70%;margin-left:15%;'>
								<img src="http://2014hs.igem.org/wiki/images/f/fe/Seven.png">
								<figcaption class='darkblue'>Figure 17: On the left, the diagrammatic representation of our two component oscillator. On the right, as expected the colonies glow green because the pLac promoter is the strongest (as shown by promoter testing), so the expressed LacI will repress the pLac promoter that expresses TetR/RFP, thereby allowing the pTet promoter to constitutively express GFP.</figcaption>
							</figure>
							<p>These prove that our repressor mechanisms were successful in changing from the green peak to the red peak based on the self-regulating mechanism of pLac+LacI.</p>
							<h4 id='conclusion'>Conclusion</h4>
							<p>Overall, the two component oscillator has a simpler design and is thus less constrained by differences of promoter strength, repressor half lives, and repressor dissociation constants. This makes the two component oscillator more realistically implementable.</p>
							<p>We also determined that the two component oscillator is able of expressing the number of c-Myc proteins necessary to maintain telomere length.</p>
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
