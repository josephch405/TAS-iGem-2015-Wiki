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
				<div class="col-lg-2" style='padding-left:8px;'>
					<div id="category_navbar">
						<ul class="nav nav-list" data-spy="affix" data-offset-top="150" style='-webkit-transform: translateZ(0);width:168px' >
						    <li><a href="#overview">Overview</a></li>
						    <li><a href="#inhibVsGzmb">Inhibitor vs. GZMB</a></li>
						    <li><a href="#gzmbVsCell">GZMB vs. Cell Viability</a></li>
						    <!--<ul>
						    	<li><a href="">Alternatives</a></li>
						    	<ul>
						    		<li><a href="">blah-blah</a></li>
						    		<li><a href="">blah</a></li>
						    		<li><a href="">Conclusion</a></li>
						    	</ul>
						    </ul>-->
						    <li><a href="#safety_switch">Safety Termination</a></li>
						</ul>
					</div>


				</div>

				<div class="col-lg-10">
					<div class="row">
						<div class="col-lg-12">
							<h1 id='overview'>Modeling</h1>
							<p>The aim of modeling in our project is to </p><br><br><br><br><br><br><br>
							<h3 id = 'inhibVsGzmb'>Inhibitor vs. GZMB</h3><br><br><br><br><br><br><br>
							<!--<table class="table table-bordered" style='width: 70%;margin-left:15%;'>
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
							<figure style=''>
								<img src='http://2014hs.igem.org/wiki/images/3/36/C-Myc_induction_of_hTERT.jpg'>
								<figcaption class='darkblue'>CAPTION</figcaption>
							</figure>-->
							
							<h3 id='gzmbVsCell'>Granzyme B vs Cell Viability</h3><br><br><br><br><br><br><br>
							<h3 id='safetySwitch'>Safety Termination</h3><br><br><br><br><br><br><br>
						</div>
						<h3>Citations</h3><br><br><br><br><br><br><br>
				</div>

				</div>

			</div>	

		<?php include("./footer.php"); ?>
	</div>

	<canvas id="canvas-container"></canvas>
	<script src='http://2015.igem.org/Template:TAS_Taipei/js/field.js?action=raw&ctype=text/javascript'></script>
</body>

</html>
