<html>

<head>
	<title>Human Practice - TAS Taipei iGEM Wiki</title>
	<?php include("./head.php"); ?>
	<link href='http://fonts.googleapis.com/css?family=Sansita+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>


<body  data-spy="scroll" data-target="#category_navbar" style = "text-align:center">

	<div class="container" style='z-index:10;position:relative;'>
		<?php include("./navigation.php"); ?>
		<br>
		<div id='bodycontainer' class='row card'>
			<div class="col-lg-2" style='padding-left:8px;'>
				<div id="category_navbar">
					<ul class="nav nav-list" data-spy="affix" data-offset-top="150" style='-webkit-transform: translateZ(0);width:168px;' >
						<li><a href="#outreach">Outreach</a></li>
						<!--<ul>
							<li><a href="#schon">CC</a></li>
						</ul>	-->
						<li><a href="#research">Research</a></li>
						<li><a href="#change">Change</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-10">
				<div class="row">
					<div class="col-lg-12">
						<h1>Human Practice</h1>
						<p>Science is not complete without considering its ethical and social ramifications, as well as relaying its intricacies and promoting it to the general public.</p>
					</div>
				</div>
				<div class="row" id='outreach'>
					<div class="col-lg-12">
						<h2>Outreach</h2>
						<p>Reaching out</p>
					</div>
				</div>

				<div class="row" id='research'>
					<div class="col-lg-7">
						<h2>Research</h2>
					</div>
				</div>

				<div class="row" id='change'>
					<div class="col-lg-7">
						<h2>Change</h2>
					</div>
				</div>

				<div class="row" id='entertainment'>
					<div class="col-lg-12">
						<h2>Entertainment</h2>
					</div>
				</div>
				<span style="display:block; height: 50px;"></span>
			</div>
		</div>
	</div>
</body>

<canvas id="canvas-container"></canvas>
<script type="text/javascript" src='http://2015.igem.org/Template:TAS_Taipei/js/field.js?action=raw&ctype=text/javascript'></script>


</html>