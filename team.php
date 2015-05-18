<!DOCTYPE html>
<html>

<head>
	<title>Team - TAS Taipei iGEM Wiki</title>
	<?php include("./head.php"); ?>
	
	<script>
		$(document).ready(function() {
			var bio_data = [{"name":"Christopher Yen","photo_url":"http://2014hs.igem.org/wiki/images/a/ae/Chris_s.png","question_1":"The power and potential to manipulate life like machines.","question_2":"Learn, experience, and help.","question_3":"I can move my ears."},
{"name":"Rohan Sinha","photo_url":"http://2014hs.igem.org/wiki/images/c/cc/Rohan_s.png","question_1":"I love the fact that every living thing in the world is coded by the same language, DNA, and that with synthetic biology we are now able to not only read it, but also write it.","question_2":"Honestly, I do not want to live forever. But if I could live for longer I would try to develop close and meaningful relationships, want to see all the amazing places in the world, and try my best to help others. Things I try to do now. And I would try and learn different languages.","question_3":"I play tennis and do lots of MUN. I'm pretty sure I can beat most people in refilling tip boxes."},
{"name":"Andy Wang","photo_url":"http://2014hs.igem.org/wiki/images/b/ba/Andy_s.png","question_1":"I love that synthetic biology allows me to create new lifeforms with tangible results. It opens up another realm of possibilities for advances in fields such as medicine that I never thought I'd be able to get involved in as a student in high-school.","question_2":"Explore the universe. One day, we'll get there!","question_3":"Memorize the element song."},
{"name":"Julie Wong","photo_url":"http://2014hs.igem.org/wiki/images/1/15/Julie_s.png","question_1":"It is super fun!","question_2":"I would go earn a lot of money, and then travel around the world! :D","question_3":"I can crack my pinky. (Like, nonstop)"},
{"name":"Edward Hsieh","photo_url":"http://2014hs.igem.org/wiki/images/f/f2/Edward_s.png","question_1":"I like that we are able to modify stuff in the same way as engineering. Machines and people are obviously made up of molecules that behave in different ways, so it's kind of neat that we can operate engineering principles universally.","question_2":"Learn more stuff and acquire more knowledge- there's too much in the world to learn!","question_3":"Manufacturing burps - not glamorous at all"},
{"name":"Rachel Kwak","photo_url":"http://2014hs.igem.org/wiki/images/4/4c/Rachel_s.png","question_1":"I like how we're able to manipulate organisms. It sort of makes me feel like I'm playing God.","question_2":"I would master every skill known on earth, including the ability to visualize the fourth dimension. ","question_3":"I can fold my tongue horizontally."},
{"name":"Bethany Shieh","photo_url":"http://2014hs.igem.org/wiki/images/2/2f/Bethany_s.png","question_1":"I think it's incredible how much potential this field has in curing diseases and helping humans! :)","question_2":"I would spend my time with the people I love, travel to every country, and learn something new everyday. I would also eat a lot of zucchinis (LOVE THEM).","question_3":"Ummm... I get cramps in almost every body part. Toe cramps, cheek cramps (super painful), tongue cramps, back cramps, etc."},
{"name":"Phillip Teng","photo_url":"http://2014hs.igem.org/wiki/images/9/9b/Phillip_s.png","question_1":"Synthetic biology is a relatively new field of science, so that means that there is more to be discovered. To me, that signifies a chance that I may have a bigger impact in the field.","question_2":"I would teach philosophy and attempt to solve the meaning of life.","question_3":"I have quite a few hidden talents, but if I tell everyone, it's not hidden anymore."},
{"name":"Dean Huang","photo_url":"http://2014hs.igem.org/wiki/images/0/08/Dean_s.png","question_1":"My favorite thing about synthetic biology is the range of applications that it can have. It makes me proud to tell people that science is the most diverse and enabling subject of all. Whattup historians.","question_2":"If I could live forever, I would try to learn as much about the world as possible. I would travel the world and learn as much as possible in order to develop my own understandings and theories. I would also earn a Nobel prize and become the smartest person in the world.","question_3":"Handstand pushups"},
{"name":"Brian Winters","photo_url":"http://2014hs.igem.org/wiki/images/c/c0/Brian_s.png","question_1":"For me, the best thing about synthetic bio is that it sounds smart.","question_2":"If I could live forever I would sleep in a lot later on weekends.","question_3":"Starting riots"},
{"name":"Xiaoyang Kao","photo_url":"http://2014hs.igem.org/wiki/images/1/18/Xiao_s.png","question_1":"I like how much synthetic biology resembles traditional engineering.","question_2":"Wait until I can go to Mars and live there!","question_3":"I can work for a very long time before sleeping."},
{"name":"Jude Clapper","photo_url":"http://2014hs.igem.org/wiki/images/6/6e/Clapper_s.png","question_1":" I like, because of synthetic biology, that biological parts are becoming increasingly standardized.  This allows for the design process of synthetic biology to really add a lot of creativity when trying to solve industrial, environmental or health related problems.","question_2":"I think that I would try out many different careers if I could live forever.  I’ve always wanted to be a scuba diver instructor, an adventure travel guide or a gourmet chef.  If I could live forever, I’d have the time to test out many different careers.","question_3":"I’m a classically trained singer, amature radio operator (KB3AVY), passed the ground school test for flying small aircraft, have advanced open water scuba certification and can juggle."},
{"name":"","photo_url":"","question_1":"","question_2":"","question_3":""}];


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
				$("#spotlight_question_3 p").html(bio_data[index]["question_3"]);
				$("#spotlight_image").attr('src', bio_data[index]["photo_url"]);
			});

		});
	</script>
</head>


<body data-spy="scroll" data-target="#category_navbar">
	<div class="container" style='z-index:10;position:relative;'>
		<?php include("./navigation.php"); ?>

			<div id='bodycontainer' class='row'>
				<div class="col-lg-3" style='padding-right:0;'>
					<div id="category_navbar">
						<ul class="nav nav-list" data-spy="affix" data-offset-top="150" style='-webkit-transform: translateZ(0);width:260px;' >
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

				<div class="col-lg-9">
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
						<div class="col-lg-6 col-md-6 col-sm-6 container" id="portrait_container">
							<div class="row">
								<img data-index='0' src="http://2014hs.igem.org/wiki/images/a/ae/Chris_s.png">
								<img data-index='1' src="http://2014hs.igem.org/wiki/images/c/cc/Rohan_s.png">
								<img data-index='2' src="http://2014hs.igem.org/wiki/images/b/ba/Andy_s.png">
							</div>
							<div class="row">
								<img data-index='3' src="http://2014hs.igem.org/wiki/images/1/15/Julie_s.png">
								<img data-index='4' src="http://2014hs.igem.org/wiki/images/f/f2/Edward_s.png">
								<img data-index='5' src="http://2014hs.igem.org/wiki/images/4/4c/Rachel_s.png">
							</div>
							<div class="row">
								<img data-index='6' src="http://2014hs.igem.org/wiki/images/2/2f/Bethany_s.png">
								<img data-index='7' src="http://2014hs.igem.org/wiki/images/9/9b/Phillip_s.png">
								<img data-index='8' src="http://2014hs.igem.org/wiki/images/0/08/Dean_s.png">
							</div>
							<div class="row">
								<img data-index='9' src="http://2014hs.igem.org/wiki/images/c/c0/Brian_s.png">
								<img data-index='10' src="http://2014hs.igem.org/wiki/images/1/18/Xiao_s.png">
								<img data-index='11' src="http://2014hs.igem.org/wiki/images/6/6e/Clapper_s.png">
							</div>
						</div>
						<div class="col-lg-6" id='member_spotlight'>
							<div class="row">
								<div class="col-lg-10">
									<img id='spotlight_image' src="http://2014hs.igem.org/wiki/images/a/ae/Chris_s.png" style='display:none;width:70%;margin-left:15%;'>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-10">
									<h3 id='spotlight_name' style='text-align:center;display:none;'>Christopher Yen</h3>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-10">
									<div class='intro_large' id='spotlight_question_1'>
										<h5 style=''>What do you like best about synthetic biology?</h5>
										<p style='display:none;'></p>
									</div>
									<div class='intro_large' id='spotlight_question_2'>
										<h5 style=''>What would you do if you could live forever?</h5>								
										<p style='display:none;'></p>								
									</div>
									<div class='intro_large' id='spotlight_question_3'>
										<h5 style=''>Hidden Talents?</h5>
										<p style='display:none;'></p>
									</div>
									<div class='intro_large' id='spotlight_question_intro'>
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



	<div class="canvas-container"></div>
	<script>NUM_PARTICLES = 1000;</script>
	<script src='http://2014hs.igem.org/Team:TAS_Taipei/js/field_homepage.js?action=raw&ctype=text/javascript'></script>
	<script>sketchItem.start();</script>
</body>

</html>
