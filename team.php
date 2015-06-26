<html>

<head>
	<title>Team - TAS Taipei iGEM Wiki</title>
	<?php include("./head.php"); ?>
	
	<script>
		$(document).ready(function() {
			var bio_data = [{"name":"Dylan Chiu","photo_url":"http://2015.igem.org/wiki/images/c/c3/DChiu.JPG","question_1":"","question_2":""},
			{"name":"Bryan Tseng","photo_url":"http://2015.igem.org/wiki/images/e/e0/BTseng.JPG","question_1":"","question_2":""},
			{"name":"Andrew Chen","photo_url":"http://2015.igem.org/wiki/images/b/b4/AWiggins.JPG","question_1":"","question_2":""},
			{"name":"Joseph Chuang","photo_url":"http://2015.igem.org/wiki/images/2/25/JChuang.JPG","question_1":"","question_2":""},
			{"name":"Daphne Liu","photo_url":"http://2015.igem.org/wiki/images/2/2f/DLiu.JPG","question_1":"","question_2":""},
			{"name":"Leon Yim","photo_url":"http://2015.igem.org/wiki/images/8/8e/LYim.JPG","question_1":"","question_2":""}];


$('#portrait_container img').click(function() {
	index = $(this).data('index');

	$("#spotlight_question_1 p").show();
	$("#spotlight_question_2 p").show();
	$("#spotlight_question_3 p").show();
	$("#spotlight_image").show();
	$("#spotlight_name").show();
	$("#spotlight_question_intro").hide();
	$("#spotlight_question_1").removeClass('intro_large');
	$("#spotlight_question_2").removeClass('intro_large');
	$("#spotlight_question_3").removeClass('intro_large');


	$("#spotlight_name").html(bio_data[index]["name"]);
	$("#spotlight_question_1 p").html(bio_data[index]["question_1"]);
	$("#spotlight_question_2 p").html(bio_data[index]["question_2"]);
	$("#spotlight_image").attr('src', bio_data[index]["photo_url"]);
});

});
</script>
</head>


<body data-spy="scroll" data-target="#category_navbar">
	<div class="container" style='z-index:10;position:relative;'>
		<?php include("./navigation.php"); ?>
<br>
		<div id='bodycontainer' class='row card'>
			<div class="col-lg-2" style='padding-left:8px;'>
				<div id="category_navbar">
					<ul class="nav nav-list" data-spy="affix" data-offset-top="150" style='-webkit-transform: translateZ(0);width:168px;' >
						<li><a href="#members">Members</a></li>
						<ul>
						</ul>							    
						<li><a href="#">About</a></li>
						<ul>
							<li><a href="#tas">Taipei American School</a></li>
							<li><a href="#the_lab">The Lab</a></li>
							<li><a href="#synthetic_biology">Synthetic Biology</a></li>
						</ul>							    

					</ul>
				</div>


			</div>

			<div class="col-lg-10">
				<div class="row">
					<div class="col-lg-12">
						<h1>Team</h1>
						<p> We are the Taipei American School iGEM team, Taiwan's first high school team, one of 12 from Asia. Our team consists of 18 dedicated members, 10 of whom will be attending the jamboree in MIT. This is our first year participating in the iGEM competition, and we look forward to continuing for years to come!</p>
					</div>
				</div>

				<div class="row" id='members'>
					<div class="col-lg-12">
						<h2>Members</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12 col-md-6 col-sm-6" id="portrait_container">
						<div class="row">
							<img data-index='0' src="http://2015.igem.org/wiki/images/c/c3/DChiu.JPG">
							<img data-index='1' src="http://2015.igem.org/wiki/images/e/e0/BTseng.JPG">
							<img data-index='2' src="http://2015.igem.org/wiki/images/b/b4/AWiggins.JPG">
							<img data-index='3' src="http://2015.igem.org/wiki/images/2/25/JChuang.JPG">
							<img data-index='4' src="http://2015.igem.org/wiki/images/2/2f/DLiu.JPG">
							<img data-index='5' src="http://2015.igem.org/wiki/images/8/8e/LYim.JPG">
						</div>
						<div class="row">
						</div>
					</div>
					<div class="col-lg-12" id='member_spotlight'>
						<div class="row">
							<div class="col-lg-4">
								<div class="col-lg-12">
									<img id='spotlight_image' src="http://2014hs.igem.org/wiki/images/a/ae/Chris_s.png" style='display:none;width:70%;margin-left:15%;'>
								</div>
								<div class="col-lg-12">
									<h3 id='spotlight_name' style='text-align:center;display:none;'>Christopher Yen</h3>
								</div>
							</div>
							<div class="col-lg-8">
								<div class='intro_large col-lg-6' id='spotlight_question_1'>
									<h5 style=''>What got you interested in synthetic biology?</h5>
									<p style='display:none;'></p>
								</div>
								<div class='intro_large col-lg-6' id='spotlight_question_3'>
									<h5 style=''>Dream career or lifegoal?</h5>
									<p style='display:none;'></p>
								</div>
								<div class='intro_large col-lg-6' id='spotlight_question_intro'>
									<h5 style=''>Click on each member to see their responses!</h5>
									<p style='display:none;'></p>
								</div>
							</div>
						</div>							

					</div>
				</div>


				<div class="row" id='tas'>
					<div class="col-lg-12">
						<h2>About Taipei American School</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3">
						<img src="http://2014hs.igem.org/wiki/images/0/03/Tas_logo.png" style='float:right;width:150px;'>
					</div>
					<div class="col-lg-8">
						<p>Taipei American School is a private independent school with an American-based curriculum located in Tianmu (T'ien-mu), Shilin District (Shih-lin), Taipei City. Most graduates of TAS go on to attend colleges and universities in United States, although some choose to attend schools in other countries. Elite high schools, such as TAS, are constantly trying to stay ahead of the curve in STEAM education. The most difficult aspect of STEAM education to teach is the 'E', which stands for engineering. Besides robotics (we participate in VEX, FRC, ROV, RoboCup), most high schools are at a loss for how to add additional engineering components to their curriculum. However, Dr. Hartzell, our high school principal, met this challenge by revamping our scientific research department and supporting the creation of an iGEM team.</p>
					</div>
				</div>

				<div class="row" id='the_lab'>
					<div class="col-lg-12">
						<h2>About The Lab</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-11">
						<img src="http://2014hs.igem.org/wiki/images/0/0c/Lab.png" style='float: right;width: 263px;margin: 10px;'>							
						<p>We work in the Sandy R. Puckett Memorial Research Lab, which was completely renovated over the summer to provide a world class, fully functional research laboratory for our students to perform real research on campus, including synthetic biology and nanotechnology. It is fully equipped with basic lab tools for research, along with equipment such as an Atomic Force Microscope, Scanning Electron Microscope, Planetary Ball Mill, Carbon Nanotube Furnace, UV transilluminator, -80 degree freezer, Millipore water purification system, Infrared spectrometer, Incubating shakers and a multitude of reagents and small instruments for the iGEM competition. We truly have a world class high school research laboratory. Our laboratory rivals most college labs. The students have the opportunity to be creative and exploratory in many areas of scientific research at TAS.</p>

					</div>
				</div>

				<div class="row" id='synthetic_biology'>
					<div class="col-lg-12">
						<h2>Synthetic Biology</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-11">
						<p>The fusion between biological research and engineering has culminated in the creation of synthetic biology. This interdisciplinary area was facilitated by the recent advances in technology, allowing humans to actually design and construct biological devices as if they were machinery. However, the advent of synthetic biology has raised concerns with biosafety and biosecurity, which is why iGEM places such importance on "safety".</p>
					</div>
				</div>



			</div>

		</div>	








		<?php include("./footer.php"); ?>
	</div>

</body>
<canvas id="canvas-container"></canvas>
<script type="text/javascript" src='http://2015.igem.org/Template:TAS_Taipei/js/field.js?action=raw&ctype=text/javascript'></script>

</html>
