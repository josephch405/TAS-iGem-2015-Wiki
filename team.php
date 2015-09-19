<html>

<head>
	<title>Team - TAS Taipei iGEM Wiki</title>
	<?php include("./head.php"); ?>
	
	<script>
		$(document).ready(function() {
			var bio_data = [
			{"name":"Dylan Chiu","photo_url":"http://2015.igem.org/wiki/images/c/c3/DChiu.JPG","question_1":"I signed up iGem due to my passion for computer science and biology. Computer science allowed me to engineer anything with the simple mechanics of \"if\" and \"else\", while biology allowed me to study the energy and structure of all forms of life. Synthetic biology allowed me to do both. Plus, it sounds really cool.","question_2":"Something along the lines of being a programmer."},
			{"name":"Bryan Tseng","photo_url":"http://2015.igem.org/wiki/images/e/e0/BTseng.JPG","question_1":"I became interested in iGem and synthetic biology because I am amazed by how engineering can be used as an approach to understand biology. The diverse range of ideas that iGem spurs is also phenomenal.","question_2":"Something impactful to the world"},
			{"name":"Andrew Chen","photo_url":"http://2015.igem.org/wiki/images/b/b4/AWiggins.JPG","question_1":"I was given an opportunity to intern under a immuno-therapy professor. I really liked working under him so I decided to give iGEM a shot.","question_2":"LCS player... just kidding. My dream job would anything that makes me good $$"},
			{"name":"Joseph Chuang","photo_url":"http://2015.igem.org/wiki/images/2/25/JChuang.JPG","question_1":"I appreciate the interdisciplinary aspect of iGEM. Aside from its strong focus on science which I really enjoyed, iGEM also incorporates human, design and technological elements. I learned what synthetic biology meant for humanity as a whole.","question_2":"First man on Mars - though I wear contacts and that might be a problem. Hope I can get Lasik."},
			{"name":"Daphne Liu","photo_url":"http://2015.igem.org/wiki/images/2/2f/DLiu.JPG","question_1":"Every time I passed by the lab last year, I saw iGEMers mesmerized, cheered and frustrated over bottles of water-like liquid. I asked myself “what kind of magic portion is that? I have to find out!”  So I joined iGEM.  (turns out to be E. coli- not disappointed) I also joined iGEM because of the growing role synthetic biology plays in health, food, and environmental issues. Rather than passively letting it seep into my life, I joined iGEM to be a part of current and future trend!","question_2":" I have many ambitions and I am open to all opportunities. I am fascinated by many occupations such as \"pharmacist\", \"biotechnology patent lawyer\", \"big data scientist\" and \"WHO agent\". I will stay proactive, committed and flexible to find out what is right for me. Above all, I want to embrace my family motto \"Do what you love, and Love what you do.\" My life goal is to balance between career and personal hobbies, and do something spontaneous and crazy once in a while!"},
			{"name":"Leon Yim","photo_url":"http://2015.igem.org/wiki/images/8/8e/LYim.JPG","question_1":"I first heard about iGEM from our instructor, Mr. Clapper. At the time, he was putting in orders for primers and explaining how you can literally synthesize DNA fragments if needed. Since then, I thought of iGEM as building new animals or hacking DNA to create your own super power. The power to play was available.","question_2":"I would like to become a scientist. Maybe I'll be a researcher in a lab. I want to live long doing what I love: science."},
			{"name":"Evonne Pei","photo_url":"http://2015.igem.org/wiki/images/4/4b/EPei.jpg","question_1":"Through iGEM, I am able to create, plan, and build together a SynBio project with people of the same passion. I've always been interested in biology, and synthetic biology just takes it to the next level. It is amazing how we can use biology to assemble parts and create things that can help the people around us or the environment we are in.","question_2":"Have 10 pugs and a big backyard. Not exactly kidding about the previous statement- but to add to that, I would like to have a job in a biology related field."},
			{"name":"Monica Lu","photo_url":"http://2015.igem.org/wiki/images/b/bf/MLu.jpg","question_1":"During the summer before my senior year, I was interning at a research lab at NYMU and found it quite interesting so I wanted to continue it somehow during the school year. From that experience, I found out that I wanted to be part of the whole research process, including coming up with the project which was something I did not get to do at NYMU. So I found that I would be able to get that opportunity by joining iGEM. And to me, synthetic biology just sounded fun in the sense that I could learn to manipulate genes to allow us to make bacteria do things that they were not originally able to do. So, I decided to give iGEM a try.","question_2":"Musician!"},
			{"name":"Jonathan Chen","photo_url":"http://2015.igem.org/wiki/images/a/a8/JChen.jpg","question_1":"I got involved in iGem and synthetic biology because I like the topic of biology and I thought syn-bio could provide me with more knowledge and understanding on the subject. Also iGem made me feel like I'm part of a team working towards one goal; it's something very special.","question_2":"Professional baller"},
			{"name":"Paul Chevassus","photo_url":"http://2015.igem.org/wiki/images/b/b2/PChevassus.jpg","question_1":"I got interested in the program via the iGEM club at our school. The science that was being presented captivated me and therefore I joined the program. ","question_2":"Not sure yet"},
			{"name":"Kevin Huang","photo_url":"http://2015.igem.org/wiki/images/2/20/KHuang.jpg","question_1":"Synthetic biology is the forefront of STEM and - more importantly - the future of the medicine in the greater picture. My natural interest in biology is a key stepping stone that got me interested in iGEM, as it represents the best medium that bridges me with synthetic biology.","question_2":"Unnamed/Be Happy"},
			{"name":"Phillip Teng","photo_url":"http://2015.igem.org/wiki/images/5/5b/PTeng.png","question_1":"It was a coincidence. I had to swim after school so I couldn't go off campus for research. As I started learning more and more about synthetic biology, I fell in love with it, and this is my second year participating in the iGEM competition!","question_2":"My dream career is to work on automating medical diagnosis and treatment. My life goal is to be a good person and hopefully influence a few people around me to live a meaningful life."},
			{"name":"Jude Clapper","photo_url":"http://2015.igem.org/wiki/images/3/33/JClapper.JPG","question_1":"I'm a chemist by training, but I really got interested in synthetic biology because of the relatively straightforward approach to designing biological contructs.  I really enjoy the engineering aspect to synthetic biology and iGEM is the perfect competition in which to test yourself.","question_2":"Dream career is to be a scuba diving instructor in the South Pacific islands."},
			{"name":"Teresa Chiang","photo_url":"http://2015.igem.org/wiki/images/0/04/TChiang.jpg","question_1":"My passion is in cellular and molecular biology, and I love the process of research: coming up with a fresh idea, designing (and redesigning) experiments to solve a problem, and finally getting an answer. iGEM offers students an amazing opportunity, not only to learn and grow as a researcher, but also to have fun!","question_2":"What I'm doing now-- teaching research!"},
			{"name":"Edward \"Sabotage\" Hsieh","photo_url":"http://2015.igem.org/wiki/images/8/87/EHsieh.png","question_1":"Taking a class in the STEM fields which did not entail just learning material.    You have to think so much more in research than in other science classes, which makes it all the more interesting.","question_2":"As of now some sort of engineer, researcher, or health professional but might change given that I'm a freshman in college.  It's all about finding your passion."},
			{"name":"Richard Brundage","photo_url":"http://2015.igem.org/wiki/images/4/43/RBrundage.jpg","question_1":"I got interested in synthetic biology because both of my parents work in pharmaceuticals and because I really enjoyed seeing what our students were doing in the lab. I thought this was impossibly cool; how can I be a part of it?","question_2":"My life goal is to leave the world a better place than I found it."},
			{"name":"Sean Tsao","photo_url":"http://2015.igem.org/wiki/images/7/72/STsao.jpg","question_1":"iGEM is fun and creative!","question_2":"My life goal is to travel around the world."}
			];

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
					<ul class="nav nav-list" data-spy="affix" data-offset-top="150" style='-webkit-transform: translateZ(0);width:168px;margin-left:0' >
						<li><a href="#members">Members</a></li>
						<ul>
						</ul>							    
						<li><a href="#tas">About</a></li>
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
						<p> We are the Taipei American School iGEM team, Taiwan's first high school team. Our team consists of 14 dedicated members, 9 of whom will be attending the jamboree in MIT. This is our second year participating in the iGEM competition, and we look forward to continuing for years to come!</p>
					</div>
				</div>

				<div class="row" id='members'>
					<div class="col-lg-12">
						<h2>Members</h2>
						<p>Click and scroll down for descriptions</p>
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
							<img data-index='6' src="http://2015.igem.org/wiki/images/4/4b/EPei.jpg">
							<img data-index='7' src="http://2015.igem.org/wiki/images/b/bf/MLu.jpg">
							<img data-index='8' src="http://2015.igem.org/wiki/images/a/a8/JChen.jpg">
							<img data-index='9' src="http://2015.igem.org/wiki/images/b/b2/PChevassus.jpg">
							<img data-index='10' src="http://2015.igem.org/wiki/images/2/20/KHuang.jpg">
							<img data-index='11' src="http://2015.igem.org/wiki/images/5/5b/PTeng.png">
							<img data-index='12' src="http://2015.igem.org/wiki/images/3/33/JClapper.JPG">
							<img data-index='13' src="http://2015.igem.org/wiki/images/0/04/TChiang.jpg">
							<img data-index='14' src="http://2015.igem.org/wiki/images/8/87/EHsieh.png">
							<img data-index='15' src="http://2015.igem.org/wiki/images/4/43/RBrundage.jpg">
							<img data-index='16' src="http://2015.igem.org/wiki/images/7/72/STsao.jpg">
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
								<div class='intro_large col-lg-6' id='spotlight_question_2'>
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
						<img src="http://2015.igem.org/wiki/images/1/18/Team_page.JPG" style='float: right;width: 263px;margin: 10px;'>							
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
	</div>
	<?php include("./footer.php"); ?>

</body>
</html>
