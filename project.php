<html>

<head>
	<title>Project Abstract - TAS Taipei iGEM Wiki</title>
	<?php include("./head.php"); ?>
</head>

<body data-spy="scroll" data-target="#category_navbar">
	<div class="container" style='z-index:10;position:relative;'>
		<?php include("./navigation.php"); ?>
		<br><br>
		<div id='bodycontainer' class='row card'>
			<div class="col-sm-2" style='padding-left:8;'>
				<div id="category_navbar">
					<ul class="nav nav-list" data-spy="affix" data-offset-top="150" style='-webkit-transform: translateZ(0);width:168px;margin-left:0' >
						<li><a href="#summary">Summary</a></li>
						<li><a href="#background">Background</a></li>
						<ul>
							<li><a href="#inflammation">Inflammation</a></li>
							<li><a href="#conditions">Conditions</a></li>
							<li><a href="#goal">Goal</a></li>
						</ul>
					</ul>
				</div>


			</div>

			<div class="col-sm-9">
				<!--PROJECT, SUMMARY-->
				<div class = "row">
					<div class="col-sm-12">
						<h1>Project</h1>
					</div>
				</div>
				<div class = "row">
					<div class="col-sm-12">
						<h2 id='summary'>Summary</h2>
						<p>
							Elevated Granzyme B levels are associated with many conditions, including vascular, autoimmune and skin diseases. As a serine protease that induces apoptosis, Granzyme B is an essential part of the immune system. In response to inflammation or tumors, Granzyme B is often overexpressed and enters target cells to induce apoptosis. However, high levels of Granzyme B also result in the random cleavage of extracellular matrix (ECM) proteins, such as elastin and decorin. This is problematic because ECM proteins maintain tissue structure, stability and elasticity. ECM destruction can lead to advanced arthritis and prolonged wound healing -- two conditions that we are focusing on.
							<br><br>
							Our project goal is to limit Granzyme B activity in the ECM without affecting its intracellular functions. In humans, Antichymotrypsin (ACT) is an extracellular protease inhibitor, which does not bind to Granzyme B. Through literature research, we learned that making three point mutations on ACT allows it to bind and inhibit extracellular Granzyme B, which in turn preserves ECM proteins. This will slow the progression of arthritis and accelerate the wound healing process. Ideally, we want to deliver the inhibitor into arthritic or wound sites without bacteria (E.coli containing our circuit) entering the body. To achieve this, we designed a bandage prototype with a semi-permeable membrane that keeps bacteria from passing, but allows smaller proteins to go through. We use a temperature-sensitive promoter in our construct to control when expression of the inhibitor turns on, so the bandage can be activated easily with a heat pack.
						</p>
					</div>
				</div>
				<!--BG, what is-->
				<div class = "row">
					<div class="col-sm-12">
						<h2 id='background'>Background</h2>
						<h2>What is Granzyme B?</h2>
						<p class = "col-sm-6"><br><br><br>
							Granzyme B is a serine protease excreted mostly from T cells and natural killer cells. Its intracellular function us to induce apoptosis in target cells such as tumor cells. Granzyme B’s intracellular functions are helpful to the human body and essential to the immune system. 
						</p>
						<figure class = "col-sm-6" style = "padding:10px">
							<img src="http://2015.igem.org/wiki/images/8/80/Bg_fig1.PNG">
							<figcaption class='belize'>Figure 1. Granzyme B is secreted by immune cells, enter and induces apoptosis in target cells with the help of Perforin.</figcaption>
						</figure>
					</div>
				</div>
				<div class = "row">
					<div class = "col-sm-12">
						<figure class = "col-sm-6" style = "padding:10px">
							<img src="http://2015.igem.org/wiki/images/d/dd/Bg_fig2.PNG">
							<figcaption class='belize'>Figure 2. Top: Organized tissue structure. Bottom: Granzyme B degrades decorin which causes collagen to break down. The breakdown of collagen results in the loss of tissue integrity. This loss of tissue integrity prevents cancer cells from spreading.</figcaption>
						</figure><br><br><br><br><br>
						<p class = "col-sm-6">Granzyme B’s extracellular function is to cleave extracellular matrix (ECM) proteins so anoikis of endothelial cells can stop tumor cells from spreading. Granzyme B’s cleaving is helpful to the human body until it is overexpressed and starts to cleave random proteins in the ECM.</p>
					</div>
				</div>
				<!--inflammation-->					
				<div class = "row">
					<div class = "col-sm-12">
						<h2 id = 'inflammation'>Inflammation</h2>
						<p class = "col-sm-6"><br><br><br>
							Inflammation is the body’s response to foreign substances or an injury. During an inflammation response, damaged cells release chemicals. This result in an increased blood flow to the inflamed site. Large numbers immune cells arrive on site to clean up dead cells and kill off pathogens. During periods of inflammation, the heightened immune response also results in an overexpression of Granzyme B. Which results in random cleaving of the extracellular matrix (ECM) proteins by Granzyme B.
						</p>
						<figure class = "col-sm-6" style = "padding:10px">
							<img src="http://2015.igem.org/wiki/images/7/77/Bg_fig3.PNG">
							<figcaption class='belize'>Figure 3. During inflammation, Granzyme B is overexpressed. Excess Granzyme B degrades collagen leading to tissue disorganization. </figcaption>
						</figure>
						<p class = "col-sm-12"><br><br>
							During periods of inflammation, too much Granzyme B is made which results in the random cleaving of the ECM proteins such as decorin and fibronectin that provide tissue structural integrity. Therefore, overexpression of Granzyme B and its cleaving of the ECM proteins could be highly detrimental to the body.
						</p>
					</div>
				</div>
				<div class = "row">
					<div class="col-sm-12">
						<h2 id = 'conditions'>Conditions of Interest</h2>
						<p class = "col-sm-12">Overexpression of Granzyme extracellular and its random cleaving of ECM proteins is associated with at least 55 diseases/conditions. So why choose arthritis and wound healing? Since we want to regulate overexpression of Granzyme B only during periods of inflammation so the immune system’s functions would not be affected, we came up with a bandage prototype. This prototype works best with localized inflammation responses which is why we decided to focus on conditions such as various types of arthritis and wound healing. In the future, we hope to be able to purify the protein and create a cream drug delivery system which allows us to fight non-localized Granzyme B associated diseases such as psoriasis.</p>
						<figure class = "col-sm-10" style = "padding:10px">
							<img src="http://2015.igem.org/wiki/images/e/e5/Bg_fig4.png">
							<figcaption class='belize'>Figure 4. Examples of diseases excessive Granzyme B levels are associated with localized conditions
							</figcaption>
						</figure>
						<p class = "col-sm-12">Both rheumatoid and osteoarthritis are diseases that lead to complete degradation of joints. Every 1 in 10 US adults have osteoarthritis and 80% of them have trouble with movement. Every 1 in 100 US adults have rheumatoid arthritis and 60% of them are unable to work after being diagnosed with the disease. When affected by arthritis, Granzyme B levels in joints are elevated and proteoglycans, an ECM protein, are degraded which speeds up the destruction of joints.</p>
						<p class = "col-sm-12">In the US alone, chronic wounds affect around 6.5 million patients. During inflammation, about 25 billion US dollars are spent on treating these patients every year. Granzyme B degrading ECM proteins such as fibronectin and collage, proteins that are essential in the wound healing process. Chronic wounds on mice without Granzyme heal 80% faster when compared to controls with Granzyme B.</p>
					</div>
				</div>
				<!--nonlocal-->					
				<div class = "row">
					<div class = "col-sm-12">
						<h3>Non-localized Conditions</h3>
						<p class = "col-sm-7"><br><br><br><br>
							We have theorized a non-localized topical drug delivery system for non-localized Granzyme B conditions such as psoriasis. We will purify our inhibitor and achieve transdermal delivery by either mixing the inhibitor with TD1, a peptide that allows for transdermal delivery of proteins, or encase our inhibitor in transferomes, a vesicle that brings proteins through the skin.
						</p>
						<figure class = "col-sm-5" style = "padding:10px">
							<img src="http://2015.igem.org/wiki/images/3/37/Bg_fig5.PNG">
							<figcaption class='belize'>Figure 5. Exposure to UV could heighten Granzyme B (GzmB) activity which could lead to wrinkles. Our Granzyme B treatment could create wrinkle free skin as shown in the GzmB knockout mice!</figcaption>
						</figure>
					</div>
				</div>
				<!--what to do-->					
				<div class = "row">
					<div class = "col-sm-12">
						<h2 id = 'goal'>What do we want to do?</h2>
						<p class = "col-sm-6"><br><br><br><br>
							Our goal is to bring Granzyme B levels down to normal levels during periods of inflammation to slow progression of arthritis and speed up wound healing. Using a heat activated bandage containing our construct, out system will secrete, filter and send Granzyme B into the inflamed site.</p>
							<figure class = "col-sm-6" style = "padding:10px">
								<img src="http://2015.igem.org/wiki/images/d/df/Bg_fig6.gif">
								<figcaption class='belize'>Figure 6. Animation showing ACT produced, secreted, filtered and then inhibiting Granzyme B.</figcaption>
							</figure>
						</div>
					</div>
					<!--citations-->		
					<div class="row">
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