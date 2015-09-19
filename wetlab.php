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
						<li><a href="#construct">Granzyme B Inhibitor Device</a></li>
						<ul>
							<li><a href="#act">Granzyme B Inhibitor</a></li>
							<li><a href="#yebf">Motor Protein</a></li>
							<li><a href="#temp">Temperature-Sensitive Promoter</a></li>
							<li><a href="#assembly">Assembly + Testing</a></li>
						</ul>
						<li><a href="#prototype">Prototype</a></li>
						<ul>
							<li><a href="#bandage">Bandage</a></li>
							<li><a href="#cream">Cream</a></li>
						</ul>
						<li><a href="#safety">Safety Device</a></li>
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
							<h1>Experimental</h1>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<h2 id='construct'><u>Full Granzyme B (GzmB) Inhibitor Device</u></h2>
							<figure class = "col-sm-12">
								<img src="http://2015.igem.org/wiki/images/8/89/Exp_fig1.png">
								<figcaption class='darkblue'><b>Figure 1. GzmB Inhibitor Device (<a href = "http://parts.igem.org/Part:BBa_K1610105">BBa_K1610105</a>):</b> We designed and constructed a device encoding an extracellular GzmB inhibitor (ACT3m) fused to a motor protein (YebF). Expression of this device is controlled by a temperature-sensitive (TempSens) promoter. </figcaption>
							</figure>
							<p class = "col-sm-12"><br>The main component of our device design (Figure 1) codes for a protein (Antichymotrypsin with three amino acid mutations, which we refer to as ACT3m) that can specifically inhibit extracellular GzmB activity. Attached to ACT3m is YebF (isolated from <a href = "http://parts.igem.org/Part:BBa_K1510009">BBa_K1510009</a>), an <i>E. coli</i> motor protein that secretes proteins fused to it through the bacterial cell membrane. Expression of the protein is controlled by a temperature-sensitive promoter (<a href = "http://parts.igem.org/Part:BBa_K608351">BBa_K608351</a>). This promoter is the primary regulator, and does so by initiating transcription at or above 37⁰C. Finally, we included a strong ribosome binding site (RBS; <a href = "http://parts.igem.org/Part:BBa_B0034">BBa_B0034</a>) for translation, and a double terminator to end transcription (<a href = "http://parts.igem.org/Part:BBa_B0015">BBa_B0015</a>).</p>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<h2 id='act'>Granzyme B Inhibitor (ACT3m)</h2>

							<p>	Our goal is to prevent damage from excess degradation of ECM proteins in chronic inflammatory conditions. To protect ECM proteins from cleavage by GzmB without interfering with GzmB's intracellular functions, we wanted to find an inhibitor that could function exclusively in the extracellular space. Through literature research, we found that the GzmB inhibitor in humans is called SerpinB9, but it functions mainly inside cells (Sipione <i>et al.</i>, 2006). In mice, an extracellular inhibitor, Serpina3n, exists (Ang <i>et al.</i>, 2011). However, we wanted to inhibit GzmB in the human body, so we knew we had to find an inhibitor that would work in humans. Finally, we came across a paper where mutations made to an extracellular human protein, Antichymotrypsin (ACT), allowed it to bind and inhibit GzmB (Marcet-Palacios <i>et al.</i>, 2014). This was perfect for our purposes, so we ordered ACT cDNA (from Sino Biological Inc.) and followed their method to create an extracellular human GzmB inhibitor.</p>

							<h4><b>Removing P (PstI) Sites</b></h4>
							<p>Upon receiving the ACT gene and analyzing the provided sequence, we learned that there are two P cutting sites in the gene sequence. These two P sites would interfere with cloning, especially since P is an essential site in the BioBrick backbones that we want to build. To remove these internal P sites, we sent the part to a company (Mission Biotech) for mutagenesis. The nucleotide sequence was mutated to remove the P sites, without changing the final amino acid sequence. A sequence was provided at the end for confirmation.</p>

							<h4><b>Changing Three Amino Acids</b></h4>
							<p>Naturally, ACT is an extracellular protein found in humans. This makes it a good starting point, because it is location-specific; however, ACT lacks the ability to bind and inhibit GzmB. The authors of the paper (Marcet-Palacios <i>et al.</i>, 2014) compared the amino acid sequence between the extracellular mouse inhibitor Serpina3n and human ACT, and identified three amino acids that would transform ACT into a GzmB-binding protein (Figure 2). They found that these mutations successfully retained the extracellular nature of ACT, while allowing it to bind and inhibit GzmB. To follow their protocol and perform the same mutations, we again sent the part out for mutagenesis (Mission Biotech). We confirmed the mutated sequence (sequenced by Tri-I Biotech).</p>
							<figure class = "col-sm-10">
								<img src="http://2015.igem.org/wiki/images/0/09/Exp_fig8.png">
								<figcaption class='darkblue'>Figure 2. <b>ACT Amino Acid Mutations:</b> Researchers from the paper selected three amino acid (boxed in red) mutations to perform on human ACT in order to mimic the GzmB-binding ability of mouse inhibitor Serpina3n (Ser3n). Figure adapted from (Marcet-Palacios <i>et al.</i>, 2014).</figcaption>
							</figure>

							<h4 class = "col-sm-12"><b>
								Assembly into a BioBrick Backbone
							</b></h4>
							<p class = "col-sm-12">Next, to insert this part in front of a double terminator (<a href = "http://parts.igem.org/Part:BBa_B0015">BBa_B0015</a>), we designed primers to add on the BioBrick prefix (including E and X sites) and suffix (including S and P sites) to either side of ACT3m. The primer designs were sent to Tri-I Biotech for oligo synthesis, and polymerase chain reaction (PCR) was set up.</p>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<h2 id = 'yebf'>Motor Protein (YebF)</h2>
							<p>We wanted our chassis (<i>E. coli</i>) to express and secrete the desired inhibitor so it can be used as part of our topical prototype. For this reason, we inserted YebF in front of ACT3m. YebF is a motor protein that can secrete attached proteins out of the <i>E. coli</i> membrane. Thus, in our final construct, the resulting YebF-ACT3m fusion protein can be separated from the bacterial cells.</p>

							<h4><b>Assembly into Final Device</b></h4>
							<p class = "col-sm-5">
								We asked the National Yang Ming University iGEM team (NYMU-Taipei) for a device containing YebF (<a href = "http://parts.igem.org/Part:BBa_K1510009">BBa_K1510009</a>) and received the part promptly. Since YebF was given to us on a composite part device, we also needed to design primers to add restrictive enzyme cutting sites. Following the same method used for ACT, we designed primers, which were synthesized by Tri-I Biotech, and performed PCR. Figure 3 shows YebF successfully inserted into a device behind our promoter (discussed below) and RBS.
							</p>
							<figure class = "col-sm-5">
								<img src="http://2015.igem.org/wiki/images/8/81/Exp_yebfgel.jpg">
								<figcaption class='darkblue'><b>Figure 3: YebF successfully inserted behind the temperature-sensitive promoter</b> (correct bands ~1.7kb).</figcaption>
							</figure>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<h2 id='temp'>Temperature-Sensitive (TempSens) Promoter</h2>

							<p>When chronic inflammation occurs, GzmB may be produced by a number of different cells (in additional to T cells and natural killer cells) (Boivin <i>et al.</i>, 2009). This may contribute to the elevated levels of GzmB in inflammation. We wanted to avoid inhibiting all GzmB activity, since a normal level of GzmB is still an important part of the immune system. Our goal was to control the expression of our inhibitor protein, so that expression can be shut off when normal GzmB levels are reached (further discussed in Modeling). To achieve this, we looked for promoters in the iGEM parts registry that can be induced manually. We found a temperature-sensitive promoter (<a href = "http://parts.igem.org/Part:BBa_K608351">BBa_K608351</a>), a composite part designed by iGEM11_Freiburg. We ordered this from the parts registry, and immediately began assembly and testing.</p>
							
							<h4><b>Assembly into Promoter-Testing Device</b></h4>
							<p>The first goal with the temperature-sensitive promoter was to confirm that it was functioning. In order to test the promoter’s activity, we designed a testing device with green fluorescent protein (GFP) as the reporter (Figure 4). We hypothesized that at lower temperatures the promoter should not initiate transcription; therefore, no GFP would be present. When exposed to higher temperatures, the promoter would then begin transcription and express the downstream GFP. As seen in Figure 5, we successfully inserted the temperature-sensitive promoter in front of a GFP generator (<a href = "http://parts.igem.org/Part:BBa_E0840">BBa_E0840</a>).</p>
							<figure class = "col-sm-6">
								<img src="http://2015.igem.org/wiki/images/e/e2/Exp_tempgfp.png">
								<figcaption class='darkblue'><b>Figure 4: Design for Device to Test the Temperature-Sensitive Promoter (<a href = "http://parts.igem.org/Part:BBa_K1610102">BBa_K1610102</a>):</b> Using GFP as a reporter, we can test when the promoter is active and initiates transcription. The device also includes a strong RBS (<a href = "http://parts.igem.org/Part:BBa_B0034">BBa_B0034</a>) and a double terminator (<a href = "http://parts.igem.org/Part:BBa_B0015">BBa_B0015</a>).</figcaption>
							</figure>
							<figure class = "col-sm-6">
								<img src="http://2015.igem.org/wiki/images/f/f4/Exp_tempgfpgel.png">
								<figcaption class='darkblue'><b>Figure 5: PCR check of temperature-sensitive promoter and GFP generator:</b> Using VF2 and VR, PCR was used to confirm that the promoter (~1kb) was inserted before GFP generator (~800 bps). Including the PCR product, the correct final product should be ~2.1kb (boxed in red).</figcaption>
							</figure>
							<br>
							<h4><b>Testing Activation Temperature</b></h4>
							<p>After successfully cloning in the temperature-sensitive promoter, we realized one immediate problem: the exact temperature of activation is unknown. In order to test this, we restreaked bacteria containing the promoter and GFP generator device onto several plates. These were incubated at different temperatures: 30⁰C, 32⁰C, 34⁰C, 35⁰C, 36⁰C, 37⁰C, and 42⁰C (Figure 6, some temperatures not shown). Bacteria successfully grew on all plates (Figure 6); however, under blue light conditions, it can be seen that only bacteria incubated at 37⁰C actually glowed (Figure 7). This is evidence that the temperature-sensitive promoter is only active at and above 37⁰C. </p>
							<figure class = "col-sm-6">
								<img src="http://2015.igem.org/wiki/images/8/80/Exp_fig5.jpg">
								<figcaption class='darkblue'><b>Figure 6. <i>E. coli</i> Carrying Temperature-Sensitive Promoter and GFP Generator Device:</b> Bacteria grew in all tested temperatures (shown here: 30⁰C, 32⁰C, 35⁰C, and 37⁰C).</figcaption>
							</figure>
							<figure class = "col-sm-6">
								<img src="http://2015.igem.org/wiki/images/d/de/Exp_fig6.jpg">
								<figcaption class='darkblue'><b>Figure 7. Temperature-Sensitive Promoter Activates at or above 37⁰C:</b> Under blue light conditions, only <i>E. coli</i> incubated at 37⁰C produced GFP and glowed.</figcaption>
							</figure>
							<br>
							<h4 class = "col-sm-12"><b>Testing Activation Time</b></h4>
							<p class = "col-sm-12">After determining the activation temperature of the promoter, we also tested how long it takes for the promoter activation to be visually determined. Bacteria carrying the testing device were grown at a lower temperature (35⁰C), so that the promoter is not already active. The plates were then transferred to the activation temperature (37⁰C), and checked hourly until GFP was observed. After about 3 hours at 37⁰C, fluorescence was detected (Figure 8).</p>
							<figure class = "col-sm-10">
								<img src="http://2015.igem.org/wiki/images/f/f9/Exp_fig7.png">
								<figcaption class='darkblue'><b>Figure 8. Testing Temperature-Sensitive Promoter Activation Time:</b>Bacteria carrying the testing device (TempSens+GFPgen) was grown at 35⁰C, then transferred to 37⁰C. After about 3 hours, GFP could be seen. Positive and negative controls are constitutive GFP expression and <a href = "http://parts.igem.org/Part:BBa_ I765001">BBa_ I765001</a>, respectively.</figcaption>
							</figure>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<h2 id = 'assembly'>Assembly and Testing the Main Granzyme B Inhibitor Device</h2>

							<figure class = "col-sm-6">
								<img src="http://2015.igem.org/wiki/images/5/56/Exp_fulldev.jpg">
								<figcaption class='darkblue'><b>Figure 9: PCR gel check of full GzmB inhibitor device.</b> PCR was performed using VF2 and VR primers. The correct PCR products should be ~2.7kb (boxed in red).</figcaption>
							</figure>
							<p class = "col-sm-6">	We successfully assembled and sequenced the full GzmB inhibitor device (Figure 9).</p>
							<p class = "col-sm-6">After completing our full device, and knowing that we cannot directly test the effects of ACT3m on human GzmB (we do not have the safety clearance to test human samples!), we wanted to see if our chassis was actually expressing the correct protein. We ran an SDS-PAGE gel using <i>E. coli</i> samples containing our full device (Figure 10).</p>
							
							<p class = "col-sm-6">We also ran a biuret protein color indicator test (Figure 11), which turns from blue to purple. The biuret solution turning purple indicates that proteins were secreted into the LB. The tube containing ACT3m only (without YebF) remained blue, which indicates that proteins were not found in the solution. Combined with our SDS-PAGE results, this indicates that the full device synthesized and secreted YebF+ACT3m out of the bacteria.</p>
							<figure class = "col-sm-5">
								<img src="http://2015.igem.org/wiki/images/5/5f/Exp_sds.png">
								<figcaption class='darkblue'><b>Figure 10: SDS-PAGE gel of our protein YebF+ACT3m.</b> Bacteria cells were grown in liquid culture and ran on a gel. Lane 3: negative control (<a href = "http://parts.igem.org/Part:BBa_B0015">BBa_B0015</a>); Lane 4: full construct (<a href = "http://parts.igem.org/Part:BBa_K1610105">BBa_K1610105</a>). The arrows show additional proteins in bacteria carrying our full GzmB inhibitor device. However, we are unsure if any of these bands are the correct protein product.</figcaption>
							</figure><br><br><div class = "col-sm-7"><br><br><br></div>
							<figure class = "col-sm-7">
								<img src="http://2015.igem.org/wiki/images/6/68/Exp_biuret.jpg">
								<figcaption class='darkblue'><b>Figure 11: A biuret test is a simple test for proteins.</b> Bacterial cells expressing YebF+ACT3m or ACT3m were grown in liquid culture, and spun down to separate the cells from the LB solution. Only the supernatant was transferred to a new tube. Biuret, a protein color indicator that turns from blue to purple, was added. The tube on the left contains LB isolated from our full construct (purple). The tube on the right (blue) is LB from liquid culture of bacteria carrying ACT3m only (not fused to YebF).</figcaption>
							</figure>
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

					<div class="row">
						<div class="col-sm-12">
							<h2 id='safety'><u>Safety Device</u></h2>
							<figure class = "col-sm-12">
								<img src="http://2015.igem.org/wiki/images/8/8e/Exp_safety.png">
								<figcaption class='darkblue'><b>Figure 24: Safety Device (<a href = "http://parts.igem.org/Part:BBa_K1610404">BBa_K1610404</a>):</b> We designed and constructed a safety device to ensure bacterial destruction if they escape our prototype. The device contains a T4 Endolysin gene controlled by a repressible promoter pDapA.</figcaption>
							</figure>
							<p class = "col-sm-12">
								Our prototype (described above) is designed to contain bacteria within a bandage. However, accidents (almost always) happen. <b>How can we make sure that bacteria do not escape into the environment?</b> A safety device to ensure cell death outside of our bandage prototype. 
							</p>
							<p class = "col-sm-12">
								There are two main components: a gene that encodes T4 Endolysin (<a href = "http://parts.igem.org/Part:BBa_K112806">BBa_K112806</a>), which is controlled by a repressible promoter called pDapA (<a href = "http://parts.igem.org/Part:BBa_I718018">BBa_I718018</a>). T4 Endolysin is an enzyme from the virus Enterobacteria phage T4 (Young, 1992). When expressed, T4 Endolysin can degrade peptidoglycans in bacterial cell walls, which kills the bacteria (Young, 1992). The promoter we use is pDapA, a constitutive promoter that can be repressed by diaminopimelic (DAP) acid. 
							</p>
							<p class = "col-sm-12">
								Since pDapA is always unless at least 300µM DAP acid is present, we will add the DAP acid into the LB agar in our bandage prototype. This way, the <i>E.coli</i> bacteria do not die within the bandage. If they escape the bandage, however, as DAP acid is usually not found in the environment, pDapA will be activated (Acord and Masters, 2004) and expression of T4 Endolysin will kill the bacteria. 
							</p>
						</div>
					</div>


					<div class="row">
						<div class="col-sm-12">
							<h4><b>Assembly into Final Safety Device</b></h4>
							<div class = "col-sm-6">
								<p class = "col-sm-12">
									First, we inserted a double terminator (<a href = "http://parts.igem.org/Part:BBa_B0015">BBa_B0015</a>) behind T4 Endolysin, and the pDapA promoter before a strong RBS (<a href = "http://parts.igem.org/Part:BBa_B0034">BBa_B0034</a>). Next, we wanted to assemble these parts together. Figure 25: shows a PCR gel check of the cloning products, where the correct PCR product is estimated to be ~1kb. 
								</p>
								<p class = "col-sm-12">
									Our future plans include confirming whether we have the correct safety device through sequencing. We also want to test if the device works; if no DAP acid is present, the bacteria should die.
								</p>
							</div>
							<figure class = "col-sm-6">
								<img src="http://2015.igem.org/wiki/images/5/50/Exp_safetygel.jpg">
								<figcaption class='darkblue'><b>Figure 25: Inserting T4 Endolysin behind pDapA.</b> PCR gel check showing cloning products. Lane 12 is the negative control (pDapA+RBS), which should be ~400bps. Lanes 4, 7, and 8 show bands at the estimated correct size of ~1kb.</figcaption>
							</figure>
							
						</div>
					</div>










					<div class="row" id='research'>
						<div class="col-sm-12">
							<h2 id='citations'>Citations</h2>
							<p>
								

								Sipione, S., Simmen, K., Lord, S., Motyka, B., Ewen, C., Shostak, I., . . . Bleackley, R. (2006). Identification of a Novel Human Granzyme B Inhibitor Secreted by Cultured Sertoli Cells. The Journal of Immunology, 5051-5058. doi:10.4049/jimmunol.177.8.5051 <br><br>

								Ang, L., Boivin, W., Williams, S., Zhao, H., Abraham, T., Carmine-Simmen, K., . . . Granville, D. (2011). Serpina3n attenuates granzyme B-mediated decorin cleavage and rupture in a murine model of aortic aneurysm. Cell Death & Disease, E209-E209. doi:10.1038/cddis.2011.88 <br><br>

								Marcet-Palacios, M., Ewen, C., Pittman, E., Duggan, B., Carmine-Simmen, K., Fahlman, R., & Bleackley, R. (2014). Design and characterization of a novel human Granzyme B inhibitor. Protein Engineering Design and Selection, 9-17. <br><br>

								Cottrell, J. (2014). Patent No. US 8652511 B2. US.<br><br>

								Funk, C., & Rainie, L. (2015, January 29). Public and Scientists’ Views on Science and Society. Retrieved from http://www.pewinternet.org/2015/01/29/public-and-scientists-views-on-science-and-society/<br><br>

								Prausnitz, M. (2004). Microneedles for transdermal drug delivery. Advanced Drug Delivery Reviews, 581-587.<br><br>

								Jin, P., Li, F., Ruan, R., Zhang, L., Man, N., Hu, Y., . . . Wen, L. (2014). Enhanced transdermal delivery of epidermal growth factor facilitated by dual peptide chaperone motifs. Protein & Peptide Letters, 21(6), 550-555. <br><br>

								Jain, S., Jain, P., Umamaheshwari, R., & Jain, N. (2003). Transfersomes--a novel vesicular carrier for enhanced transdermal delivery: Development, characterization, and performance evaluation. Drug Development and Industrial Pharmacy, 29(9), 1013-1026. <br><br>

								Segal, D., & Michelson, R. (2015, April 17). Phosphagenics Initiates Oxycodone Patch Dosing in. Retrieved from Phosphagenics: http://www.phosphagenics.com/wp-content/uploads/2015/04/2015-April-17-Phosphagenics-Initiates-Oxycodone-Patch-Dosing-in-Phase-2-Clinical-Trial.pdf<br><br>

								Young, R. (1992). Bacteriophage lysis: mechanism and regulation.Microbiological Reviews, 56(3), 430–481.<br><br>

								Acord, J., & Masters, M. (2004). Expression from the Escherichia coli dapA promoter is regulated by intracellular levels of diaminopimelic acid. FEMS Microbiol Lett., 235(1), 131-7.<br><br>

							</p>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<?php include("./footer.php"); ?>
	</body>
	</html>