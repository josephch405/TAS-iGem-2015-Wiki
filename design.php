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
						<li><a href="#prototype">Prototype</a></li>
						<ul>
							<li><a href="#bandage">Bandage</a></li>
							<li><a href="#cream">Cream</a></li>
						</ul>
						<li><a href="#citations">Citations</a></li>
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
							<h1>Design</h1>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<h2 id='prototype'><u>Functional Prototype</u></h2>
							<figure class = "col-sm-6">
								<img src="http://2015.igem.org/wiki/images/9/94/Exp_eatFood.png">
								<figcaption class='darkblue'><b>Figure 12: Survey to understand the public's opinion of eating genetically modified foods.</b> Image taken from Pew Research Center (Funk & Rainie, 2015).</figcaption>
							</figure>
							<p class = "col-sm-6">
								According to a survey conducted by the Pew Research Center in 2014, 88% of scientists polled believe it is generally safe to eat genetically modified foods, compared to only 37% of U.S. adults (Figure 12; Funk & Rainie, 2015). There is a huge difference in opinion between scientists and the public. These results match a survey that we gave during our school's Spring Fair as well, where we found that over 52% of students polled are uncomfortable with genetically modified products. Given this information, we imagine that the public would be fearful of using biopharmaceuticals where living bacteria is used either in or on the body. We wanted to design the least invasive and most socially acceptable method of drug delivery: a topical solution where bacteria (our chassis) is prevented from entering into the body, and the only thing delivered is the GzmB inhibitor.
							</p>
							<p class = "col-sm-12">
								We envision two different drug delivery methods, for either localized or general treatment. Localized treatment focuses on topical delivery of our inhibitor ACT3m into targeted inflamed areas through a bandage (Figure 14). On the other hand, general treatment of the entire body can be achieved using a cream (containing our inhibitor; Figure 23). 
							</p>
							<h4 class = "col-sm-12"><b>
								Control of GzmB Inhibitor Device
							</b></h4>
							<div class = 'col-sm-6'>
								<p class = "col-sm-12">
									Since we want to design topical prototypes for our drug delivery, we first needed to make sure that contact with skin doesn't directly activate our temperature-senstiive promoter. We still want to retain control of when to start expression of our GzmB inhibitor. The skin temperatures of different areas were measured using an infrared thermometer.
								</p>
								<p class = "col-sm-12">
									Average temperatures for different areas are shown in Figure 13. The overall average temperature is 33.35 ⁰C, which is safely below the activation temperature. These results demonstrate that contact with skin will not activate the device directly, and we can still control its expression by application of a heat pack. 
								</p>
							</div>
							<figure class = "col-sm-6">
								<img src="http://2015.igem.org/wiki/images/7/71/Exp_skinTemp.png">
								<figcaption class='darkblue'><b>Figure 13. Average skin temperatures are below the activation temperature of our temperature-sensitive promoter.</b> Average skin temperature was collected using an infrared thermometer gun. 100 individuals were measured for the skin temperatures of their forehead, arm, palm, neck, and knee.</figcaption>
							</figure>
						</div>
					</div>

					

					<div class="row">
						<div class="col-sm-12">
							<h2 id = 'bandage'>Localized Treatment: Bandage</h2>
							
							<figure class = "col-sm-6">
								<img src="http://2015.igem.org/wiki/images/2/20/Exp_prototype.gif">
								<figcaption class='darkblue'><b>Figure 14. Cross section of bandage prototype design.</b> Our bandage uses a semi-permeable membrane (dotted blue lines) to keep bacteria (green) growing on a thin piece of LB agar (yellow interior). The pores of the membrane are small enough to prevent bacteria, but allow our final GzmB inhibitor, to pass through.</figcaption>
							</figure>
							<p class = 'col-sm-6'>
								Our first prototype focuses on localized conditions (such as wounds), where a bandage may be applied to deliver our GzmB inhibitor. Because we want to keep bacteria outside of the human body, we needed to design a prototype that would retain bacteria inside our bandage (Figure 14).
							</p>
							<p class = "col-sm-6">
								We decided to use a semi-permeable membrane with pores small enough to retain the bacteria within our bandage, but large enough to allow proteins to diffuse through. Since the size of <i>E. coli</i> is 0.5µm x 2µm, we used a mixed cellulose ester membrane with pore sizes of 0.2µm. Bacteria can be grown on a thin LB agar contained between our semi-permeable membrane and an outer hydrocolloid covering (to keep bacteria from escaping on the other side). We have successfully built a functional prototype, and used different methods to test the effectiveness of both the semi-permeable membrane's ability to contain bacteria and allow proteins through.
							</p>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<h4><b>Testing the Semi-Permeable Membrane</b></h4>
							<div class = 'col-sm-7'>
								<p class = 'col-sm-12'>
									Prototype testing allows us to determine the viability of our theoretical drug delivery construct. First, we tested the ability of the semi-permeable membrane to sustain bacteria growth on LB agar, but prevent the bacteria from moving to the other side. We streaked out bacteria onto LB agar on one side of the membrane, and placed a clean LB agar on the other side (set up shown in Figure 15). After allowing growth overnight, we checked for the presence of bacteria on the clean LB agar. Two trials were done, and our results show no growth on the clean LB agar (one trial shown in Figure 16). This demonstrates that the 0.2µm cellulose ester membrane can be used to keep bacteria inside the bandage, so there is no direct contact with the skin.
								</p>
								<p class = "col-sm-12">
									A second test was carried out to independently test the semi-permeable membrane (Figure 17). Again, we found that the membrane was successful in preventing bacteria from moving across.
								</p>
							</div>
							<figure class = "col-sm-5">
								<img src="http://2015.igem.org/wiki/images/6/6a/Exp_stack.png">
								<figcaption class='darkblue'><b>Figure 15: Experimental set-up to test the effectiveness of the semi-permeable membrane.</b> To test if the membrane can keep bacteria on the inside of the bandage, we sandwiched the membrane between two LB agar layers. Bacteria was streaked onto the top LB layer, and the bottom layer was checked to see if any bacteria traveled through the membrane.</figcaption>
							</figure>
							<figure class = "col-sm-6">
								<img src="http://2015.igem.org/wiki/images/6/67/Exp_membraneTest.png">
								<figcaption class='darkblue'><b>Figure 16: Semi-Permeable Membrane Test Results.</b> The experiment described in Figure 15 was set up, and plates were incubated at 37⁰C to allow the bacteria to grow. In the positive control, bacteria passed through medical gauze and grew on the bottom LB layer. However, when the semi-permeable was tested, no bacteria growth was found on the bottom layer.</figcaption>
							</figure>
							<figure class = "col-sm-6">
								<img src="http://2015.igem.org/wiki/images/a/a7/Exp_membraneTest2.png">
								<figcaption class='darkblue'><b>Figure 17. Different experiment set up to test the effectiveness of semi-permeable membrane.</b> The membrane was sandwiched between two LB agar layers, but covering only half of the area. Bacteria carrying a GFP generator device was streaked onto the top LB layer. After allowing growth overnight, we checked the presence of GFP on the clean bottom layer (under blue light). GFP was only seen where the membrane did not cover the bottom gel. </figcaption>
							</figure>
							<p class = 'col-sm-12'><br>
								After showing that bacteria cannot pass through the membrane, we needed to test whether the proteins could actually move across the membrane. We placed our membrane in a Buchner funnel over a filter flask (Figure 18). Liquid cultures were prepared and pulled through the membrane using a vacuum.  For our experiment, we set up 3 groups: (A) lysed cells releasing free GFP; (B) <i>E. coli</i> cells expressing GFP; (C) LB without bacterial cells. Each group was filtered through the 0.2 um pore membrane and the filtrate was collected. When the filtrate was exposed to blue light, only the group that contained lysed cells glowed (Figure 19). This shows that proteins passed through the membrane. 
							</p>
							<figure class = "col-sm-6">
								<img src="http://2015.igem.org/wiki/images/d/d3/Exp_vacuum1.jpg">
								<figcaption class='darkblue'><b>Figure 18. Testing protein permeability through our 0.2 um membrane.</b> We set up three cultures with (A) containing lysed bacteria and free GFP, (B) containing bacteria expressing GFP, (C) LB with no bacteria growth.</figcaption>
							</figure>
							<figure class = "col-sm-6">
								<img src="http://2015.igem.org/wiki/images/0/00/Exp_vacuum2.jpg">
								<figcaption class='darkblue'><b>Figure 19. Proteins are able to pass through the membrane.</b> After the filtrate was collected, (A) shows free GFP travelled through the membrane, (B) shows that bacteria containing GFP did not pass through the membrane, (C) the negative control for the experiment showed no florescence. </figcaption>
							</figure>

						</div>
					</div>






					<div class="row">
						<div class="col-sm-12">
							<h4><b>Building and Testing the Bandage Prototype</b></h4>
							<p style = "font-size:16px" class = "col-sm-12">
								We built the entire bandage prototype, and found that the semi-permeable membrane used successfully keeps bacteria inside the bandage in our final product (Figure 20). 
							</p>
							<video src = "http://2015.igem.org/wiki/images/d/d5/Exp_bandageVid.mp4" controls></video>
							<figure class = "col-sm-8">
								<img src="http://2015.igem.org/wiki/images/b/b4/Exp_bandageBuild.png">
								<figcaption class='darkblue'><b>Figure 20. We built and tested the bandage prototype.</b> Bacteria carrying a GFP generator device was streaked onto a thin layer of LB agar. This was sandwiched between the semi-permeable membrane and an outer hydrocolloid covering. Under blue light, green fluorescence could be seen inside the bandage (circled in red), but not on the bottom LB agar. </figcaption>
							</figure>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<h4><b>Microneedles</b></h4>
							<figure class = "col-sm-6">
								<img src="http://2015.igem.org/wiki/images/9/90/Exp_microneedles.png">
								<figcaption class='darkblue'><b>Figure 21. Use of microneedles might help with delivery of our GzmB inhibitor into the body.</b> Microneedles are an option that can help delivery of our protein through the skin. This may be used before applying our bandage to target deeper areas, such as arthritic joints.</figcaption>
							</figure>
							<p style = "font-size:16px" class = "col-sm-6"><br><br><br>
								For conditions where inflamed sites are not directly exposed to the bandage, such as swollen joints in rheumatoid arthritis, microneedles may help delivery of ACT3m through the skin. Microneedles can create tiny channels in the epidermis (Prausnitz, 2004) so that our GzmB inhibitor can be delivered to deeper areas pass the skin (Figure 21).
							</p>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<h2 id = "cream">General Application: Cream</h2>
							<p>
								In cases where chronically inflamed sites are not localized (such as in psoriasis, Figure 22), we envision a second prototype for general topical use. Our GzmB inhibitor protein (ACT3m) would be extracted from bacteria, purified, and put into a cream (Figure 23). One of the following methods might be used to deliver our protein through the skin.
							</p>
							<figure class = "col-sm-6">
								<img src="http://2015.igem.org/wiki/images/2/29/Exp_psoriasis.jpg">
								<figcaption class='darkblue'><b>Figure 22: Pictures of psoriasis,</b> a condition where treatment via cream may be useful. (psoriasis.vital101.com)</figcaption>
							</figure>
							<figure class = "col-sm-2">
								<img src="http://2015.igem.org/wiki/images/b/b1/Exp_tube.png">
								<figcaption class='darkblue'><b>Figure 23: Cream Treatment</b></figcaption>
							</figure>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<h4><b>Microneedles</b></h4>
							<p>Microneedles can create tiny channels in the epidermis (Prausnitz, 2004) to deliver our ACT3m protein in the cream through the skin. A microneedle roller can be used before applying the cream.
							</p>
							<h4><b>TD1</b></h4>
							<p>TD1 is a patented peptide (PP, et al. 2014) with the sequence ACSSSPHKHCG. When mixed with proteins, this peptide can carry proteins through the skin. To help transdermal ACT3m delivery, TD1 will be added into the cream.
							</p>
							<h4><b>Transfersomes</b></h4>
							<p>Transfersomes are specialized liposomes (made by a certain procedure) that can carry the encapsulated materials through the skin (Jain et al., 2003). ACT3m would be put into transfersomes, so that when the cream is applied, these transfersomes will bring our GzmB inhibitor through the skin.
							</p>
							<h4><b>Tocopheryl Phosphate Mixture (TPM)</b></h4>
							<p>Tocopheryl phosphate is a natural form of vitamin E, which, when mixed with proteins, increases their transdermal delivery (Cottrell, 2014). TPM was developed by Phosphagenics, an Australian biotechnology company. Using this technology, Phosphagenics developed an insulin cream, which is currently going through the FDA approval process (Segal & Michelson, 2015). If successful, this could also be used in our cream prototype to deliver ACT3m.
							</p>
						</div>
					</div>


					<div class="row" id='research'>
						<div class="col-sm-12">
							<h2 id='citations'>Citations</h2>
							<p>
								

								

								Cottrell, J. (2014). Patent No. US 8652511 B2. US.<br><br>

								Funk, C., & Rainie, L. (2015, January 29). Public and Scientists’ Views on Science and Society. Retrieved from http://www.pewinternet.org/2015/01/29/public-and-scientists-views-on-science-and-society/<br><br>

								Prausnitz, M. (2004). Microneedles for transdermal drug delivery. Advanced Drug Delivery Reviews, 581-587.<br><br>

								Jin, P., Li, F., Ruan, R., Zhang, L., Man, N., Hu, Y., . . . Wen, L. (2014). Enhanced transdermal delivery of epidermal growth factor facilitated by dual peptide chaperone motifs. Protein & Peptide Letters, 21(6), 550-555. <br><br>

								Jain, S., Jain, P., Umamaheshwari, R., & Jain, N. (2003). Transfersomes--a novel vesicular carrier for enhanced transdermal delivery: Development, characterization, and performance evaluation. Drug Development and Industrial Pharmacy, 29(9), 1013-1026. <br><br>

								Segal, D., & Michelson, R. (2015, April 17). Phosphagenics Initiates Oxycodone Patch Dosing in. Retrieved from Phosphagenics: http://www.phosphagenics.com/wp-content/uploads/2015/04/2015-April-17-Phosphagenics-Initiates-Oxycodone-Patch-Dosing-in-Phase-2-Clinical-Trial.pdf<br><br>

								

							</p>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<?php include("./footer.php"); ?>
	</body>
	</html>