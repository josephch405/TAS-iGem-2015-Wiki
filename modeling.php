<!DOCTYPE html>
<html>

<head>
	<title>Modeling - TAS Taipei iGEM Wiki</title>
	<?php include("./head.php"); ?>

</head>

<body data-spy="scroll" data-target="#category_navbar">
	<div class="container" style='z-index:10;position:relative;'>
		<?php include("./navigation.php"); ?>
			<br>
			<div class="row card" id='bodycontainer' class='row'>
				<div class="col-lg-3" style='padding-right:0;'>
					<div id="category_navbar">
						<ul class="nav nav-list" data-spy="affix" data-offset-top="150" style='-webkit-transform: translateZ(0);width:260px;' >
						    <li><a href="#research">Overview</a></li>
						    <ul>
						    	<li><a href="">Equation Format</a></li>
						    	<li><a href="">General Concepts</a></li>
						    </ul>						    
						    <li><a href="#circuit_regulation">Circuit Regulation</a></li>
						    <ul>
						    	<li><a href="">Alternatives</a></li>
						    	<ul>
						    		<li><a href="">blah-blah</a></li>
						    		<li><a href="">blah</a></li>
						    		<li><a href="">Conclusion</a></li>
						    	</ul>
						    </ul>
						    <li><a href="#safety_switch">Safety Termination</a></li>
						</ul>
					</div>


				</div>

				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-12">
							<h1>Modeling</h1>
							<p>The aim of modeling in our project is to try to simulate the interactions between the different parts of our project: telomere extension, circuit regulation, and safety.  In telomere extension, we mapped out the induction of the hTERT promoter by c-Myc and used that to quantify the minimum number of c-Myc molecules needed to maintain telomeres.  In circuit regulation, we simulated the behaviors of different oscillator designs and compared their attributes to help decide on our construct.  Finally, in safety termination, we constructed a qualitative analysis of means by which our construct ensures safety.  Through the predicted results with certain parameters, modeling can be used to guide the direction of the project and determine what tweaks should be made to achieve our goal.  We graphed all the models using  numerical integration in Wolfram Mathematica.</p>
							<h3>General Format for Equations</h3>
							<p>For our project, we are modeling the rate of change in the number of proteins.  This is dependent on translation of mRNA and the degradation rate of the proteins.</p>
							<p>The amount of mRNA depends on the activity of the promoter transcribing the mRNA and the degradation rate of the mRNA.  Promoter activity is described by the Hill equation, which can describe the effect of activation or repression by a transcription factor. </p>
							
							<h3 id='telomere_extension'>TOPIC</h3>
							<h4>Quantifying telomerase expression</h4>
							<p>The results of the conversions are shown in the following table:</p>
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
							<!--<figure style=''>
								<img src='http://2014hs.igem.org/wiki/images/3/36/C-Myc_induction_of_hTERT.jpg'>
								<figcaption class='darkblue'>CAPTION</figcaption>
							</figure>-->
							

							<p>General form of equations:</p>
							<p>Equations with values:</p>
							<p>At this point, telomere extension is dependent on circuit regulation because c-Myc is regulated by the oscillator.  The exact tweaks will be discussed in the next section, but here a graph of optimal results is shown after altering LacI and hTERT half-life by a factor of five with an ssRA tag:</p>
							<h4>Conclusion</h4>
							<p>Our experience with the three component oscillator showed that it was a plausible approach towards expressing c-Myc, but we were afraid of its applicability in real life.  After all, the model presented by Elowitz and Leibler was based on ideal values that had a high probability to be different in real life.  We thus explored other designs that were better suited for our project.</p>


							<h3>Alternatives to the three component oscillator</h3>
							<h4>Self-Repressilator</h4>
							<p>We first attempted to model the self-repressilator, which we know was an early design. The self-repressilator is significant because it lays the groundwork for the model of the two-component oscillator, which is really an expansion on the self-repressilator.  The groundwork includes establishing the need for an explicit time delay, which is elaborated in the paper “Design Principles of Biochemical Oscillators” by Novak and Tyson.  In this model, transcription is based on protein concentration in a previous point in time, to compensate for the time delay in transcription and translation.  The explicit time delay was not needed in the three component oscillator because it established a time delay through a series of intermediates.  The equations are as follows:</p>

							<h4>Two Component Oscillator</h4>

							<h4>Conclusion</h4>
							
							<h3 id='safety_switch'>Safety Termination</h3>
							<p>For the safety termination portion of our circuit, we express BRCA1 and Apoptin behind pSurvivin, which is a tumor-specific promoter.[23]  We were unable to produce a definite model that featured quantitative analysis, but were able to map out the mechanism for the safety mechanism.  Apoptin induces apoptosis only in cancer cells, thus eliminating threat of metastasis.[24] The wtBRCA1 protein product has been shown to interact with c-Myc.[25]  From the literature we have read, it seems to inhibit the hTERT promoter in multiple ways.  BRCA1 has been shown to bind to c-Myc partially and inhibit its transcriptional and transformational activity in cells. BRCA1 is also suggested to inhibit hTERT promoter activity by binding to it.[26][27]  Thus, we have been able to piece together the following mechanism:</p>						
						</div>
						<h3>Citations</h3>
				</div>

				</div>

			</div>	

		<?php include("./footer.php"); ?>
	</div>

	<canvas id="canvas-container"></canvas>
	<script src='http://2015.igem.org/Template:TAS_Taipei/js/field.js?action=raw&ctype=text/javascript'></script>
</body>

</html>
