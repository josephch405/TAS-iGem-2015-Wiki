<!DOCTYPE html>
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
				<div class="col-lg-3" style='padding-right:0;'>
					<div id="category_navbar">
						<ul class="nav nav-list" data-spy="affix" data-offset-top="150" style='-webkit-transform: translateZ(0);' >
						    <li><a href="#research">Project Overview</a></li>
						    <ul>
						    	<li><a href="#abstract">Abstract</a></li>
						    	<li><a href="#overview">Overview</a></li>
						    </ul>
						    <li><a href="#background">Background</a></li>
						    <ul>
						    	<li><a href="#cell_replication_process">Cell Replication Process</a></li>
						    	<li><a href="#telomeres">Telomeres</a></li>
						    	<li><a href="#telomerase">Telomerase</a></li>
						    </ul>							    
						</ul>
					</div>


				</div>

				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-12">
							<h1>Project Abstract and Background</h1>
						</div>
					</div>

					<div class="row" id='research'>
						<div class="col-lg-12">
							<h3 id='abstract'>Abstract</h3>
							<p>Telomeres are repeating sequences of TTAGGG nucleotides at the ends of somatic cell chromosomes. These sequences protect cellular genomes from harmful effects associated with chromosome shortening during cell replication. Due to the finite length of telomeres, telomere shortening is known to be a primary contributor to cellular senescence and cell death. To allow human somatic cells to replicate indefinitely, we have engineered a biological circuit with three primary components to regulate telomere length. (1) Expression of the reverse transcriptase enzyme telomerase to extend telomeres (2) Regulation of the amount of telomerase expressed using an oscillatory mechanism (3) Operation of a safety device to prevent possible cancerogenesis. Through the cooperation of these three mechanisms, and the tools of synthetic biology, lifespan extension is possible.</p>
							
							<h3 id='overview'>Overview</h3>
							<p>The goal of our project is to extend cell life-span by extending the length of telomeres. Telomeres are repeating nucleotides of TTAGGG at the ends of cell chromosomes. Telomeres serve as a buffer zone to protect the genome from inevitable chromosome shortening during DNA replication, so that the genes necessary for cell function are not harmed during the cell replication process. However, once telomeres reach from 4000-6000 bp, the cell induces its own death in order to prevent cellular malfunction associated with shortened chromosomes. Hence, since longer telomeres mean longer cell life span, we engineered biological circuits to extend telomeres to thus extend cell life.</p>
							<figure style='float:left;width:500px;padding:10px;'>
								<img src="http://2014hs.igem.org/wiki/images/d/d6/Plasmids.png">
								<figcaption class='darkblue'>Figure 1: The constructs of the three parts of our project are shown.  Telomeres are extended by telomerase, which we will express by inducing the hTERT promoter with c-Myc.  To express c-Myc in suitable doses, we are using a two-component oscillator which oscillates based on the behavior of the LacI self-regulation.  Finally, because telomerase is associated with cancer, we express BRCA1 and apoptin with the tumor-specific pSurvivin promoter to mitigate any side effects of our project.</figcaption>
							</figure>
							<p>To elongate cell life span, we express the enzyme that extends telomeres, telomerase. In a normal cell, the genes that transcribe telomerase are silenced, so to activate these genes, we express and upregulate the c-Myc protein that induces the hTERT promoter, which expresses the rate limiting subunit of telomerase downstream of it. Therefore, by expressing c-Myc, we express telomerase to extend telomeres.</p>
							<p>We want to maintain the length of telomeres, not to constantly increase it. Therefore, we have designed a two component oscillatory system in order to express doses of c-Myc, and thus doses of telomerase. This system is less affected by differences in promoter strengths, repressor half lives, and repressor dissociation, than the traditional three component repressilator. By employing this system, we express constant amounts of telomerase to maintain telomeres.</p>							
							<p>Finally, we have designed a safety mechanism in case telomerase is overexpressed, which possibly causes a cancerous cell. If a cell with our plasmids becomes cancerous, we use the cancer only activated pSurvivin promoter to shut down telomerase expression through using the protein BRCA1 to repress the hTERT promoter.  Additionally, we induce apoptosis in the cancerous cell using the apoptin protein, which only causes cell death in cancerous and not normal cells.</p>						
						</div>
					</div>

					<div class="row" id='research'>
						<div class="col-lg-12">
							<h2 id='background'>Background</h2>
							<h4 id='cell_replication_process'>Cell Replication Process</h4>
							<p>During the cell replication process, DNA condenses into chromosomes, which are tightly packed structures of nucleic acid and protein that allow for more efficient DNA replication. Primase enzymes attach RNA primers onto these condensed chromosomes, which signal the DNA polymerase to attach complementary base pairs to the template sense strand, thereby replicating DNA. However, the DNA polymerase enzyme can only replicate from the 5' to 3' end of the complementary strand. This means that for the DNA strand that stretches from 3' to 5', primase only has to attach an RNA primer once, before the DNA polymerase can continuously copy DNA. However, on the other template strand named the "lagging strand", which stretches from 5' to 3', it is necessary for primase to periodically attach primers to the template strand to allow DNA polymerase to replicate DNA. This forms Okazaki fragments, which are short, newly synthesized DNA strands on the lagging strands, which eventually are ligated together by the enzyme ligase.</p>
							<p>The lagging strand presents a problem for replication at the end of the chromosome, since there is no RNA primer to allow DNA polymerase to synthesize DNA. Thus, during replication, DNA on the newly synthesized lagging strand is lost, causing the chromosome to progressively shorten.</p>
							
							<h4 id='telomeres'>Telomeres</h4>
							<p>The ends of organisms' chromosomes contain repeating sequences of nucleotides called ‘telomeres'. Each telomere repeat is usually five to ten base pairs long, depending on the organism, and in total telomeres usually range from six to fifteen kilo base pairs. The purpose of telomeres is to serve as buffers against inevitable chromosome shortening during cell replication, so that no important genetic information is lost, and to prevent random telomere fusions.</p>
							<p>However, after the cell replication process causes the telomeres to be shortened to four to six kilo base pairs, the cell triggers apoptosis. The reason for this cellular suicide is to prevent cellular malfunction, should further chromosome shortening affect the genetic information essential to cellular operation. Leonard Hayflick, at the Wistar institute of Philadelphia, named the "Hayflick limit" as this set number of times a cell is able to divide before telomeres are reduced to so short a size as to trigger self-induced apoptosis.</p>
							<p>One dominant theory of aging is that the length of telomeres dictates the rate at which cells age and die. More specifically, if aging is perceived as the time at which cells start to die and thus cause organ malfunction, then telomere length would regulate aging as longer telomeres allow a longer time before cell self-induced apoptosis.</p>
							<figure style='width:50%;margin-left:25%;'>
								<img src="http://2014hs.igem.org/wiki/images/b/bc/Telomere-what-we-lose-with-age.gif">
								<figcaption class='darkblue'>Figure 2: Diagram depicting telomere shortening.</figcaption>
							</figure>

							<h4 id='telomerase'>Telomerase</h4>
							<figure style='float:right;width:40%;padding:10px;'>
								<img src="http://2014hs.igem.org/wiki/images/d/d7/Tert1.jpg">
								<figcaption class='darkblue'>Figure 3: Diagram showing telomerase extension of  telomeres on chromosomes.</figcaption>
							</figure>
							<p>Nevertheless, there is a mechanism that allows telomeres to be extended. The reverse transcriptase enzyme telomerase elongates the 3' end of telomeres that have been shortened, through adding the TTAGGG telomere DNA repeats to the single stranded leading strand. Hence, this enzyme offers possibilities of elongating the replicative lifespan of a cell, and thus to prolong aging, through extending telomeres.  However, this enzyme is rarely expressed in normal body cells; its expression is almost exclusively detected in stem cells and cancer cells, both of which are considered virtually immortal.</p>							

						
						</div>
					</div>

					<div class="row" id='research'>
						<div class="col-lg-12">
							<h3 id='background'>Citations</h3>
<p> Oh, Stephen T., Saturo Kyo, and Laimonis A. Laimins. "Telomerase Activation by Human Papillomavirus Type 16 E6 Protein: Induction of Human Telomerase Reverse Transcriptase Expression through Myc and GC-Rich Sp1 Binding Sites." Journal of Virology 75, no. 12 (June 2001): 5559-66.</p>
<p> University of California, Berkeley. "Telomeres." Molecular and Cell Biology.http://mcb.berkeley.edu/courses/mcb135k/telomeres.html.</p>
<p>Sun Yat-Sen University. "Project/Design." iPS Cells Safeguard. Last modified 2013.http://2013.igem.org/Team:SYSU-China/Project/Design.</p>
<p>Xiong, Jingbo, Saijun Fan, Qinghui Meng, Laura Schramm, Chenguang Wang, Boumedienne Bouzahza, Jinnian Zhou, Brian Zafonte, Itzhak D. Goldberg, Bassem R. Haddad, Richard G. Pestell, and Eliot M. Rosen. "BRCA1 Inhibition of Telomerase Activity in Cultured Cells."Molecular and Cellular Biology 23, no. 23 (December 2003): 8668-90.</p>
<p>http://stakerchiro.com/wp-content/uploads/2013/06/telomere-what-we-lose-with-age.gif </p>
<p>http://bioinfoworld.files.wordpress.com/2013/03/tert1.jpg</p>

						
						</div>
					</div>


				</div>

			</div>	

		<?php include("./footer.php"); ?>
	</div>

	<canvas id="canvas-container"></canvas>
	<script src='static\field.js'></script>
</body>

</html>