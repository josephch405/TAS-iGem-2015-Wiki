<html>

<head>
	<title>Modeling - TAS Taipei iGEM Wiki</title>

</head>

<body data-spy="scroll" data-target="#category_navbar">
	<?php include("./head.php"); ?>
	<div class="container" style='z-index:10;position:relative;'>
		<?php include("./navigation.php"); ?>
		<br>
		<div class="row card" id='bodycontainer' class='row'>
			<div class="col-sm-2" style='padding-left:8px;'>
				<div id="category_navbar">
					<ul class="nav nav-list" data-spy="affix" data-offset-top="150" style='-webkit-transform: translateZ(0);width:168px;margin-left:0' >
						<li><a href="#overview">Overview</a></li>
						<li><a href="#serpin">SerpinA3N vs. GZMB</a></li>
						<li><a href="#act">ACT3m vs. GZMB</a></li>
						<li><a href="#analysis">Analysis</a></li>
						<li><a href="#calculator">Calculator</a></li>
						<li><a href="#flux">Bandage Flux Model</a></li>
					</ul>
				</div>
			</div>

			<div class="col-sm-10">
				<div class="row">
					<div class="col-sm-12">
						<h1 id='overview'>Modeling</h1>
						<p>Granzyme B (GzmB) activity is elevated during inflammation, which can lead to excess cleavage of extracellular matrix (ECM) proteins in human tissue. Aside from causing damage to healthy tissues, this also exacerbates chronic inflammatory conditions, which keeps producing more GzmB and creates a vicious cycle. Our project aims to selectively inhibit GzmB in the ECM in order to prevent damage during chronic inflammation. Since we do not have the means of working with GzmB and directly testing its interactions in human test subjects, we predicted these interactions using mathematical models and data from the literature.</p>
						<p>The Hill equation is used to model the interaction between a ligand and its binding partner, a macromolecule/enzyme – in our case, how well a GzmB inhibitor binds to GzmB. It is a function of free ligand concentration, and it returns the fraction of macromolecules that are bound. Two constants are involved in this equation: the dissociation constant and the Hill coefficient (Weiss, 1997). </p>
						<p>The Hill coefficient describes cooperativity of the binding. Positive cooperativity (n>1) means that a bound enzyme has higher affinity for other ligands; negative cooperativity (n<1) means the converse is true; and non-cooperative binding (n=0) means that whether or not the enzyme is bound has no bearing on further binding (Weiss, 1997).</p>
						<p>The Hill equation is shown below: <br><img src = "http://2015.igem.org/wiki/images/b/ba/Model_eqn1.gif">
							, where [L] is concentration of the ligand (in our case, the inhibitor), Kd is the dissociation constant, and n is the Hill coefficient.
						</p>
					</div>
				</div>

				<div class = "row">
					<div class="col-sm-12">
						<h2 id = 'serpin'>Mouse Inhibitor Serpina3n vs GzmB Activity</h2>
						<p>Our first dataset (Table 1), which measures Serpina3n concentration vs relative GzmB activity, came from research by Ang <i>et al.</i> at the University of British Columbia (2011). Serpina3n is a known mouse GzmB inhibitor, and the paper documented the effects of Serpina3n on GzmB activity. Given its specificity in mice, this inhibitor was not chosen as part of the final construct, but data from this paper was used because the relevant constants can be analyzed and compared to other inhibitor substitutes.<br></p>
						<table class="table table-bordered" style='width: 70%;margin-left:15%;'>
							<caption style='caption-side:top;'><b>Table 1: Dataset obtained from Ang <i>et al.</i>,</b> showing Serpina3n Concentration vs Relative GzmB Activity </caption>
							<tbody>
								<tr>
									<td>[Sa3n] (nM)</td>
									<td>0.4</td>
									<td>1.4</td>
									<td>2.8</td>
									<td>3.8</td>
									<td>5</td>
									<td>7.8</td>
									<td>10</td>
									<td>16</td>
									<td>21</td>
									<td>40</td>
									<td>80</td>
								</tr>
								<tr>
									<td>Relative GzmB Activity (%)</td>
									<td>118</td>
									<td>110</td>
									<td>115</td>
									<td>102</td>
									<td>78</td>
									<td>76</td>
									<td>65</td>
									<td>56</td>
									<td>39</td>
									<td>15</td>
									<td>4</td>
								</tr>
							</tbody>
						</table>
						<p>Several adjustments were made to the equation and dataset so that we could have a meaningful model.  First, GzmB activity was shown as percentages ranging from 10% to 120% in the paper. This is likely because the control for the experiment was set at some point where the Serpina3n expression is not 0. Thus, we scaled down the data points by a factor of 1/120. This scaling is necessary since the Hill equation returns a fraction; the output is limited to between 0 and 1.</p>
						<p>More importantly, since the data was presented as the concentration of enzymes that remain free after binding, we needed to modify the Hill equation in order to model the fraction of unbound GzmB. Since <i>bound + unbound = 100%</i>, and the Hill equation models the bound component, it can be said that <img src = 'http://2015.igem.org/wiki/images/f/f8/Model_eqn2.gif'>, provided that the dataset is properly scaled to a range between 100%-0%.</p>
						<p>The FindFit function of Mathematica was used to find the unknown constants Kd and n for the modified Hill equation above. Our model returned a Kd of ≈ 28.130 and n ≈ 1.3540. The final equation is <img src = 'http://2015.igem.org/wiki/images/7/72/Model_eqn3.gif'>, where θ<sub>free</sub> is GzmB activity and [L] stands for concentration of Serpina3n (Figure 1).</p>
						<figure class = "col-sm-10">
							<img src="http://2015.igem.org/wiki/images/6/6a/Model_fig1.png">
							<figcaption class='darkblue'><b>Figure 1. Model: Serpina3n Inhibition of GzmB.</b> Using data from the Ang <i>et al.</i> paper, we developed an equation that models relative GzmB Activity as a function of Serpina3n concentration</figcaption>
						</figure>
					</div>
				</div>

				<div class = "row">
					<div class="col-sm-12">
						<h2 id = 'act'>Human GzmB Inhibitor ACT3m</h2>
						<p>Given our model of Serpina3n, we also wanted to create a model for the protein used in our device, ACT3m. The dataset obtained from the ACT3m paper (Marcet-Palacios <i>et al.</i>, 2014) is the result of a colorimetric assay. Data was presented as absorbance values (A<sub>405</sub>), which correspond to the concentration of free GzmB, at different inhibitor concentrations. The paper used this to prove that their novel ACT3m inhibitor was the strongest out of their entire pool of possible candidates: treatment with ACT3m resulted in the lowest A<sub>405</sub> values, which suggests the strongest inhibition of GzmB.</p>
						<p>To model this set of data, similar adjustments had to be made. First, the dataset was scaled so the numbers ranged between 0 and 1 (in this case, increased by a factor of 2). The same modified Hill equation was used from the Serpina3n analysis. Our model returned a Kd of ≈ 13.336 and n ≈ 0.605, so the equation looks like <img class = "col-sm-3" src = 'http://2015.igem.org/wiki/images/1/17/Model_eqn4.gif'>(Figure 2).</p>
						<figure class = "col-sm-10">
							<img src="http://2015.igem.org/wiki/images/0/0f/Model_fig2.png">
							<figcaption class='darkblue'><b>Figure 2. Model: ACT3m Inhibition of GzmB.</b> Using data from the Marcet-Palacios <i>et al.</i> paper, we developed an equation that models relative GzmB activity as a function of ACT3m concentration.concentration.</figcaption>
						</figure>
					</div>
				</div>

				<div class = "row">
					<div class="col-sm-12">
						<h2 id ="analysis">Analysis</h2>
						<table class="table table-bordered" style='width: 70%;margin-left:15%;'>
							<caption style='caption-side:top;'><b>Table 2. Values Returned from Model:</b> the dissociation, association and Hill constants were calculated using Mathematica.</caption>
							<thead>
								<tr>
									<th></th>
									<th>Kd (nM)</th>
									<th>Ka (nM^-1)</th>
									<th>n</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Sa3n</td>
									<td>28.130</td>
									<td>0.035549</td>
									<td>1.3540</td>
								</tr>
								<tr>
									<td>ACT3m</td>
									<td>13.336</td>
									<td>0.074985</td>
									<td>0.60462</td>
								</tr>
							</tbody>
						</table>
						<p>To interpret the above data, we first compare the constants of dissociation, Kd. In this context, Kd represents [Gzmb<sub>free</sub>][Inhibitor]/[Gzmb<sub>inhib</sub>-Inhibitor] at equilibrium (Bisswanger, 2008); therefore, a lower Kd would represent better inhibition: more bound GzmB compared to free GzmB.</p>
						<p>We can also analyze the Ka, the association constant. Ka is the inverse of Kd, and can be found as [Gzmb<sub>inhib</sub>-Inhibitor]/ [Gzmb<sub>free</sub>][Inhibitor]. This represents the relative amount of bound molecules, so that a higher Ka represents stronger binding affinity. Compared to the mouse inhibitor Serpina3n, human ACT3m has a lower Kd and a higher Ka, which suggests stronger inhibition. This conclusion is in agreement with Marcet-Palacios <i>et al.</i>, where this novel inhibitor was also compared to mouse Serpina3n (2014).</p>
						<p>The Hill constant may also be considered to analyze the nature of the inhibitor-GzmB complex. With n>1, Serpina3n is likely to bind to multiple sites on GzmB (Weiss <i>et al.</i>, 1997). ACT3m, in contrast, has a n<1, meaning that it likely binds competitively to selective and perhaps singular sites. This information is interesting; taking the association constants into account, this means that despite less opportunity to bind, ACT3m still acts as a better inhibitor than Serpina3n.</p>
					</div>
				</div>

				<div class = "row">
					<div class="col-sm-12">
						<h2 id ="calculator">Inhibitor Concentration Calculator</h2>
						<p class = "col-sm-12"><br>The following equations were developed with a question in mind:</p>
						<div class = "col-sm-2"></div>
						<h3 class = "col-sm-8 purple" style = "color:white; padding: 20px">How much inhibitor is needed to bring GzmB levels back to normal?</h3>
						<p class = 'col-sm-12'><br>Since there are many diseases that cause inflammation, and thus increased levels of GzmB, we created a calculator to determine the amount of treatment needed for any GzmB-related diseases. The model can show the relative percent decrease of GzmB as the inhibitor concentration increases. A patient could obtain information regarding their condition and calculate the amount of treatment needed.</p>
						<p class = 'col-sm-12'>Given that <img src = 'http://2015.igem.org/wiki/images/f/f8/Model_eqn2.gif'>, reversing the parameters yields the equivalent function of <img src = 'http://2015.igem.org/wiki/images/a/aa/Model_eqn5.gif'>, or <img src = 'http://2015.igem.org/wiki/images/9/95/Model_eqn6.gif'> . This equation calculates the inhibitor concentration that corresponds to a certain relative level of GzmB. </p>
						<p class = 'col-sm-12'>Rheumatoid arthritis (RA) is one of the main chronic inflammatory diseases made worse by elevated GzmB activity. We will use this as an example to show how the calculator works. GzmB concentrations in synovial fluids (joint fluids) of arthritis patients were determined from Tak <i>et al.</i>, 2009 (summarized in Table 3). There is a significant GzmB concentration difference between the control group and RA patients. The equation that returns a concentration of inhibitor can be used here, as it takes in relative GzmB levels and returns the amount of inhibitor needed.</p>
						<table class="table table-bordered" style='width: 70%;margin-left:15%;'>
							<caption style='caption-side:top;'><b>Table 3: GzmB Concentration in Synovial Fluids.</b> GzmB concentration in patients suffering from rheumatoid arthritis obtained from Tak <i>et al.</i>, 2009.</caption>
							<thead>
								<tr>
									<th></th>
									<th>Rheumatoid arthritis (pg/mL)</th>
									<th>Control (pg/mL)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Mean +/- s.d.</td>
									<td>3306 +/- 10311</td>
									<td>34 +/- 32</td>
								</tr>
								<tr>
									<td>Median</td>
									<td>251</td>
									<td>29</td>
								</tr>
							</tbody>
						</table>

						<p>If a patient has a GzmB level that is X times the amount of control (around 34 pg/mL), then proportionally, X/100% = 100%/Y, where Y is the factor we want to decrease the patient’s level by (relative to his original level). Therefore, <img src = "http://2015.igem.org/wiki/images/d/d2/Model_eqn7.gif"> , and the amount of inhibitor needed [L] can be calculated. For example, if an RA patient has a GzmB concentration of 3400 pg/mL, then the patient has about 100x the normal GzmB level. Therefore, the Y factor would be 1%, and [L] can be calculated to be around 130 uM.</p>
						<p>It should be noted, however, that there is a large standard deviation for GzmB levels in RA patients, which means there are significant variations: if treatments are to be given, it would be better to conduct treatments on a case-by-case basis.</p>
						<div style = "border-style:solid; text-align:center; padding:20px">
							<h4 style = "padding:0">CALCULATOR</h4>
							<script>
								calculateee = function(){
									X = Number(document.getElementById("input").value)/100;
									if(isNaN(X)){
										calcResults.innerHTML = "(Please enter a number!)";
										return;
									}
									if(X < 1){
										if (X==.42){
											calcResults.innerHTML= "(Patient holds the answer to life, the universe and everything.)"
											return;
										}
										if (X<=0.5){
											calcResults.innerHTML= "(Patient probably has a messed up immune system.)"
											return;
										}
										calcResults.innerHTML = "(Patient is perfectly healthy, no need for treatment)";

										return;
									}

									Y = 1/X;
									calcResults.innerHTML = Math.pow((13.336*(1-Y)/Y), 1/0.60462);

									if(X > 10000){
										calcResults.innerHTML += " (You should see a doctor at this point)";
										return;
									}
								}
							</script>
							<span>Patient's GzmB level is </span><input id = "input"><span>% of original</span>
							<button onclick = "calculateee()">Calculate!</button><br>
							<span>Treatment ([L]) : </span><b>
							<span id = "calcResults">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></b>
							<span>nM of ACT</span>
						</div>
					</div>
				</div>


				<div class = "row">
					<div class="col-sm-12">
						<h2 id = 'flux'>Bandage Flux Model</h2>
						<p>Now that we know how to calculate the amount of treatment necessary, we can estimate how we apply our prototype to deliver the appropriate amount of treatment.</p>
						<p>Fick’s first law dictates that <img src = "http://2015.igem.org/wiki/images/e/e3/Model_eqn8.gif">, where J is the diffusion rate (flux) across the membrane (Lonsdale <i>et al.</i>). This models negative flux entering a closed surface. For our model, we want to model the flux that leaves the closed surface, which is our bandage. Thus, we use the model <img src = "http://2015.igem.org/wiki/images/1/1e/Model_eqn8b.gif">, where J is a positive flux.</p>
						<p>[Concentration] is the concentration of molecules inside the bandage, in our case the GzmB inhibitor. The thickness of the membrane is inversely related to J. D is the diffusivity, or the diffusion constant, of a certain configuration – a greater D generally represents a greater rate of diffusion. In our model, the diffusivity of our cellulose ester membrane was found to be 5.7x10^-6 cm^2/sec. Therefore, our diffusion model is <img src = "http://2015.igem.org/wiki/images/4/4e/Model_eqn9.gif">.
						</p>
						<p>
							When graphed, the 3-dimensional equation looks like Figure 3 below:
						</p>
						<figure class = "col-sm-10">
							<img src="http://2015.igem.org/wiki/images/f/f3/Model_fig3.png">
							<figcaption class='darkblue'><b>Figure 3. Flux relative to concentration and membrane thickness.</b> Fick's first law was used to predict the rate of flow across the membrane.</figcaption>
						</figure>
						<p class = "col-sm-12">	As demonstrated by the graph, thickness is inversely related to the diffusion rate; on the other hand, concentration is directly related to the diffusion rate. As part of future work, we can try to combine this model with the calculator to find proper treatment concentration, perhaps mathematically integrating the flux to determine an effective concentration that the bandage delivers. However, this would likely require experimental data to verify the accuracy of our current models.</p>
					</div>
				</div>

				<div class = "row">
					<div class="col-sm-12">
						<h3>Citations</h3>
						<p>Weiss, J. (1997). The Hill equation revisited: Uses and misuses. Faseb J, 11(11), 835-841. Retrieved September 5, 2015, from Pubmed. <br><br>

							Ang, L., Boivin, W., Williams, S., Zhao, H., Abraham, T., Carmine-Simmen, K., Granville, D. (2011). Serpina3n attenuates granzyme B-mediated decorin cleavage and rupture in a murine model of aortic aneurysm. Cell Death Dis Cell Death and Disease. <br><br>

							Marcet-Palacios, M., Ewen, C., Pittman, E., Duggan, B., Carmine-Simmen, K., Fahlman, R., & Bleackley, R. (2014). Design and characterization of a novel human Granzyme B inhibitor. Protein Engineering Design and Selection, 9-17. <br><br>

							Bisswanger, H. (2008). Enzyme kinetics: Principles and methods (2nd rev. and updated ed.). Weinheim: Wiley-VCH. <br><br>

							Tak PP, Spaeny-Dekking L, Kraan MC, Breedveld FC, Froelich CJ, Hack CE. The levels of soluble granzyme A and B are elevated in plasma and synovial fluid of patients with rheumatoid arthritis (RA). Clinical and Experimental Immunology. 1999;116(2):366-370. doi:10.1046/j.1365-2249.1999.00881.x.<br><br>


							Vaughan, M. (1959). Cellulose Acetate Membranes suitable for Osmotic Measurements. Nature, 43-44.<br><br>

						</p>
					</div>
				</div>
			</div>

		</div>	

	</div>
	<?php include("./footer.php"); ?>

</body>

</html>
