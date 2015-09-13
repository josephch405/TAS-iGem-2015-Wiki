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
					</ul>
				</div>
			</div>

			<div class="col-sm-10">
				<div class="row">
					<div class="col-sm-12">
						<h1 id='overview'>Modeling</h1>
						<p>Our project aims to selectively inhibit Granzyme B in order to control its damage in arthritis and wounds. Given this, it would be crucial to account for interactions using mathematical models and data.</p>
							<p>The main model that we used was the Hill equation. It is used to model the interaction where a ligand binds to a macromolecule/enzyme – in our case, when the serpin binds to the inhibitor. It is a function of free ligand concentration, and it returns the fraction of macromolecules that are bound. Two constants are involved in this function: the dissociation constant and the hill coefficient.1</p>
							<p>The hill coefficient describes cooperativity of the binding – positive cooperativity (n>1) means that a bound enzyme has higher affinity for other ligands; negative cooperativity (n<1) means the converse is true; and non-cooperative binding (n=0) means that whether the enzyme is bound or not has no bearing on further binding.</b>
							<p><img src = "http://2015.igem.org/wiki/images/b/ba/Model_eqn1.gif">
							, where [L] is concentration of ligand (in our case, inhibitor), Kd is the dissociation constant and n is the hill coefficient.
						</p>
					</div>
				</div>

				<div class = "row">
					<div class="col-sm-12">
					<h2 id = 'serpin'>SERPINA3N vs. GZMB</h2>
						<p>Our first dataset from the Serpina3n paper2  holds data points in terms of concentration of the serpin vs Granzyme B activity, measured as a percentage of control. This was a critical step since serpina3n was a commonly known Granzyme B inhibitor, and its relevant constants can be analyzed and compared to other substitutes. Given its specificity in mice, this was not chosen as part of the final construct, however. To tweak the equation and the dataset so that we would have a meaningful model, several adjustments were made.</p>
						<p>First, the data points had percentages that ranged from 10% to 120% - this is because the control for the experiment was set at some point where serpin expression was not 0. Thus, the points were scaled down by a factor of 1/120. This scaling is necessary since the hill equation returns a fraction; the output is limited to between 0 and 1.</p>
						<p>However, more importantly, since the data given to us is in terms of enzymes that remain free after binding, adjustments are necessary to reconcile this with the equation which models the fraction of bound enzymes. Since <i>bound + unbound = 100%</i> is necessarily true, and the hill equation models the bound component, it can be said that</p> <img src = 'http://2015.igem.org/wiki/images/f/f8/Model_eqn2.gif'><p> - provided that the dataset was properly scaled to a range between 100%-0%.</p>
						<p>The FindFit function of Mathematica was used to find the unknown constants: Kd and n. </p>
						<figure class = "col-sm-10">
							<img src="http://2015.igem.org/wiki/images/6/6a/Model_fig1.png">
							<figcaption class='darkblue'>Figure 1. Serpina3n Inhibition of Granzyme B</figcaption>
						</figure>
						<p class = "col-sm-10"><br>Our model returned a Kd of ≈ 28.130 and an n ≈  1.3540. The final equation is below, where  is Granzyme B activity and L is concentration of Serpina3n:</p>
						<img class = "col-sm-3" src = 'http://2015.igem.org/wiki/images/7/72/Model_eqn3.gif'>
					</div>
				</div>

				<div class = "row">
					<div class="col-sm-12">
						<h2 id = 'act'>ACT3m vs. GZMB</h2>
						<p>Given our model of Serpina3n, we then found a dataset relevant to our actual protein – ACT3m. The dataset obtained from the ACT3m paper3  is the result of a colorimetric assay. The points are in the form of colorimetric data at A405 (corresponding to free Granzyme concentration) versus serpin concentration. The paper used this to prove that their novel ACT3m inhibitor was the strongest out of their entire pool of possible candidates with different mutations, since ACT3m had the lowest A405 values and therefore strongest inhibition.</p>
						<p>To model this set of data, similar adjustments had to be made. First, the dataset was scaled so that it ranged approximately between 0 and 1 – in this case, an appropriate factor was an increase by a factor of 2. The same modified hill equation was used from the Serpina3n analysis.</p>
						<figure class = "col-sm-10">
							<img src="http://2015.igem.org/wiki/images/0/0f/Model_fig2.png">
							<figcaption class='darkblue'>Figure 2. Serpina3n Concentration vs. Granzyme B activity</figcaption>
						</figure>
						<p class = "col-sm-10"><br>Our model returned a Kd of ≈ 13.336 and a n ≈  0.60462. </p>
						<img class = "col-sm-3" src = 'http://2015.igem.org/wiki/images/1/17/Model_eqn4.gif'>
					</div>
				</div>

				<div class = "row">
					<div class="col-sm-12">
						<h2 id ="analysis">Analysis</h2>
						<table class="table table-bordered" style='width: 70%;margin-left:15%;'>
							<caption style='caption-side:top;'>Table 1: Table of resulting constants</caption>
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
						<p>To interpret the above data, we first compare the constants of dissociation, Kd. Kd is in units of Nano molars since that was the units used in the datasets. In this construct, this value represents [Gzmbfree][Inhibitor]/[Gzmbinhib-Inhibitor] at equilibrium.4  Therefore, a lower Kd would be more advantageous – this represents relatively more bound Gzmb than free Gzmb. Another way of analyzing this would be analyzing the Association Constant, which is the inverse of Kd – Ka is [Gzmbinhib-Inhibitor]/ [Gzmbfree][Inhibitor]. This represents the relative amount of bound molecules, and a higher Ka represents a stronger affinity for binding. Thus, by Association/dissociation constant analysis, ACT3m has a significantly lower Kd and a higher Ka in comparison to Sa3n, therefore indicating strength as an inhibitor. This is in agreement with the paper[ACT paper] where it was found that the novel inhibitor was stronger as an inhibitor compared to Sa3n.</p>
						<p>The hill constant may also be considered to analyze the nature of the inhibitor-Granzyme complex, although it would have less bearing on the context of our experiment – we are concerned with the raw inhibitory strength. With a n>1, Sa3n is likely to bind to multiple sites on Granzyme B. ACT3m, in contrast, has a n<1, meaning that it likely binds competitively to selective and perhaps singular sites. This information is interesting; taking the association constants into account, this means that despite less opportunity to bind, ACT3m still acts as a better inhibitor than Sa3n.</p>
					</div>
				</div>

				<div class = "row">
					<div class="col-sm-12">
						<h3>Citations</h3>
						<p>1.	Weiss, J. (1997). The Hill equation revisited: Uses and misuses. Faseb J, 11(11), 835-841. Retrieved September 5, 2015, from Pubmed.<br>
							2.	Ang, L., Boivin, W., Williams, S., Zhao, H., Abraham, T., Carmine-Simmen, K., . . . Granville, D. (2011). Serpina3n attenuates granzyme B-mediated decorin cleavage and rupture in a murine model of aortic aneurysm. Cell Death Dis Cell Death and Disease. 
							<br>
							3.	Marcet-Palacios, M., Ewen, C., Pittman, E., Duggan, B., Carmine-Simmen, K., Fahlman, R., & Bleackley, R. (2014). Design and characterization of a novel human Granzyme B inhibitor. Protein Engineering Design and Selection, 9-17. 
							<br>
							4.	Bisswanger, H. (2008). Enzyme kinetics: Principles and methods (2nd rev. and updated ed.). Weinheim: Wiley-VCH. 
							<br>
							5.	Tak PP, Spaeny-Dekking L, Kraan MC, Breedveld FC, Froelich CJ, Hack CE. The levels of soluble granzyme A and B are elevated in plasma and synovial fluid of patients with rheumatoid arthritis (RA). Clinical and Experimental Immunology. 1999;116(2):366-370. doi:10.1046/j.1365-2249.1999.00881.x.</p>
						</div>
					</div>
				</div>

			</div>	

		</div>
		<?php include("./footer.php"); ?>

	</body>

	</html>
