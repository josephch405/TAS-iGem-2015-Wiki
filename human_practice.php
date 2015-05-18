<!DOCTYPE html>
	<html>

		<head>
			<title>Human Practice - TAS Taipei iGEM Wiki</title>
			<?php include("./head.php"); ?>
			<link href='http://fonts.googleapis.com/css?family=Sansita+One' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
			<style>
			h6 {
			text-align:center;
			font-weight: bolder;
			font-size: 1.17em; 
			margin: .83em 0;
			}
			#igem_poem p {
			font-family: 'Open Sans', sans-serif;
			}
			#igem_poem h4 {
			font-family: 'Sansita One', cursive;
			}
			*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
			line-height: 1.5em
			}

			body{
			box-sizing: border-box;
			/*  */
			}
			section{
			padding: 10% 20%;
			}
			.animate{
			transition: all .3s;
			}

			input[name=question]{
			display: none;
			}
			input[name=question] + label{
			position: relative;
			display: block;
			padding: 20px 20px;
			font-size: 1.2em;
			cursor: pointer;
			background: rgba(66, 139, 202, 1);
			color: #ffffff;
			z-index: 2;
			box-shadow: 0 0 10px rgba(0,0,0,.1);
			border-radius: 3px;
			}

			.response{
			position: relative;
			background-color:rgba(0,0,0,00);
			color: #ffffff;
			padding: 10px 20px;
			-webkit-transform: translate3d(0,-40px, 0) rotate(-.5deg);
			z-index: 1;
			opacity: 0;
			border-radius: 3px;
			}

			input[name=question]:checked + label{
			background: #428bca;
			color: #ffffff;
			}
			input[name=question]:checked + label + .response{
			opacity: 1;
			visibility: visible;
			padding: 10px 20px;
			-webkit-transform: translate3d(0, 0, 0) rotate(0deg);
			-webkit-filter: blur(0px);
			margin-bottom: 20px;
			background-color:rgba(0,0,0,00);
			opacity: 1 !important;
			overflow: hidden;
			}

			.fixed-height{
			height: 50px;
			overflow: hidden;
			opacity: 0 !important;
			}
			</style>
		</head>


		<body data-spy="scroll" data-target="#category_navbar">
			<div class="container" style='z-index:10;position:relative;'>
				<?php include("./navigation.php"); ?>

				<div id='bodycontainer' class='row'>
						<div class="col-lg-2" style='padding-right:0;'>
							<div id="category_navbar">
								<ul class="nav nav-list" data-spy="affix" data-offset-top="150" style='-webkit-transform: translateZ(0);' >
									<li><a href="#research">Research</a></li>
									<ul>
										<li><a href="#senior_interviews">Senior Interviews</a></li>
										<li><a href="#yolo_survey">YOLO Survey</a></li>
										<li><a href="#guest_lectures">Guest Lecturers</a></li>
										<li><a href="#collaborations">Collaborations</a></li>
										<li><a href="#cancer_specialist_interview">Specialist Interview</a></li>
										<li><a href="#ethics_panel">Ethics Panel</a></li>
									</ul>							    
									<li><a href="#outreach">Outreach</a></li>
									<ul>
										<li><a href="#public_awareness">Public Awareness</a></li>
										<li><a href="#syn_bio_education">Syn Bio Education</a></li>
										<li><a href="#research_symposium">Research Symposium</a></li>
										<li><a href="#school_fairs">School Fairs</a></li>
										<li><a href="#media">Media Outlets</a></li>
										<li><a href="#igem_hs_meetup">iGEM HS Meetup</a></li>
									</ul>							    
									<li><a href="#entertainment">Entertainment</a></li>
									<ul>
										<li><a href="#music_video">Music Video</a></li>
										<li><a href="#2048_igem">iGEM 2048</a></li>
										<li><a href="#montage_video">Montage Video</a></li>
										<li><a href="#igem_poem">iGEM Poem</a></li>
									</ul>	
								</ul>
							</div>


						</div>

					<div class="col-lg-9">
						<div class="row">
							<div class="col-lg-12">
								<h1>Human Practice</h1>
								<p>Science is not complete without considering its ethical and social ramifications, as well as relaying its intricacies and promoting it to the general public.</p>
								<p>What we discovered through our findings in human practice helped shaped the trajectory of our project. Rather than focus on the unattainable goal of immortality, we realized that an even more desired and tangible goal is to use our project to increase healthy life span.</p>
								<p>Human Practice is organized into three sections: Research, Outreach, and Entertainment. We first sought to collect opinions from experts in the field and from all age groups in the public, and also debate the ethical considerations. Our next step was to bring synthetic biology and our project to the community. The last section deals with having a little bit of fun with our project and spreading the joy of iGEM.</p>
							</div>
						</div>
						<span style="border-bottom:solid #000000; display:block; height: 50px;"></span>
						<span style="display:block; height: 25px;"></span>
						<p>Q: Is death a necessary aspect of nature?</p>
						<p>&ldquo;The short answer would be.......................yes.&rdquo;</p>
						<div class="text-center">
							<p>&#151; Mr. Jaami Franklin</p>
						</div>
						<span style="border-top:solid #000000; display:block; height: 50px;"></span>
						<div class="row" id='research'>
							<div class="col-lg-12">
								<h1>Research</h1>
								<p>This first component of human practice focuses on collecting opinions from experts in the field and from all age groups in the public on the topics surrounding our project such as immortality, science, synthetic biology, and life. Whether it is through collaboration with other iGEM teams, surveys, interviews, or panel debates, we reached out to a wide variety of people from all walks of life.</p>
							</div>
						</div>
						<div class="row" id='senior_interviews'>
							<div class="col-lg-5">
								<img src="http://igemphotos.nfshost.com/RetirementHome/DSC01589.jpg" alt="" title="iGEM Double Date">

							</div>
							<div class="col-lg-7">
								<h4>Interviewing Senior Citizens</h4>
								<p>We visited a retirement home and interviewed the senior citizens living there. This experience was extremely inspiring as we got to know the residents on a personal level, and obtained some surprising answers. We discovered that these senior citizens had comments such as &ldquo;We are all sitting here waiting to die&rdquo;, rather than wanting to live forever. These responses helped us reshape our project to focus on extending human lifespan and sparked further research on public opinion.</p>
							</div>
						</div>
						<div class="row" id='yolo_survey'>
							<div class="col-lg-12">
								<h2>YOLO Survey</h2>
								<p>In order to gain more opinions on our project from a larger sample group, we set up a survey with questions about immortality and synthetic biology. In the end, we collected over 200 responses, which gave us valuable insights into the public&#39;s opinions of our project. This feedback steered us away from our focus on immortality into a more widely supported consensus of extending life with emphasis on good health.</p>
							</div>
						</div>
						<span style="display:block; height: 25px;"></span>
						<div class="row">
							<div class="col-lg-12">
								<input class="animate" type="radio" name="question" id="q1"/>
								<label class="animate" for="q1">Q: If you are given a potion that gives you immortality, will you take it?</label>
								<div class="response animate row">
									<div class="pagination-center" id="piechart1" style="width: 815px; height: 520px;"></div>
								</div>
								<input class="animate" type="radio" name="question" id="q2"/>
								<label class="animate" for="q2">Q: If you only have 24 hours left, you better live it up. What will you do?</label>
								<div class="response animate row">
									<div class="pagination-center" id="piechart2" style="width: 815px; height: 520px;"></div>
								</div>
								<input class="animate" type="radio" name="question" id="q3"/>
								<label class="animate" for="q3">Q: What age group do you belong in?</label>
								<div class="response animate row">
									<div class="pagination-center" id="piechart3" style="width: 815px; height: 520px;"></div>
								</div>
								<input class="animate" type="radio" name="question" id="q4"/>
								<label class="animate" for="q4">Give your current life a grade.</label>
								<div class="response animate row">
									<div class="pagination-center" id="piechart4" style="width: 815px; height: 520px;"></div>
								</div>
								<input class="animate" type="radio" name="question" id="q5"/>
								<label class="animate" for="q5">Q: How do you think this grade can change if you can have immortality?</label>
								<div class="response animate row">
									<div class="pagination-center" id="piechart5" style="width: 815px; height: 520px;"></div>
								</div>
								<input class="animate" type="radio" name="question" id="q6"/>
								<label class="animate" for="q6">Q: How much do you know about synthetic biology?</label>
								<div class="response animate row">
									<div class="pagination-center" id="piechart6" style="width: 815px; height: 520px;"></div>
								</div>
								<input class="animate" type="radio" name="question" id="q7"/>
								<label class="animate" for="q7">Q: Do you think synthetic biology can devise a solution for mortality?</label>
								<div class="response animate row">
									<div class="pagination-center" id="piechart7" style="width: 815px; height: 520px;"></div>
								</div>
								<input class="animate" type="radio" name="question" id="q8"/>
								<label class="animate" for="q8">Q: If you could change your genes, a part of you, what would you change? </label>
								<div class="response animate row">
									<div class="pagination-center" id="piechart8" style="width: 815px; height: 520px;"></div>
								</div>
								<input class="animate" type="radio" name="question" id="q9"/>
								<label class="animate" for="q9">Q: Do you have any idea what a telomere is?</label>
								<div class="response animate row">
									<div class="pagination-center" id="piechart9" style="width: 815px; height: 520px;"></div>
								</div>
								<input class="animate" type="radio" name="question" id="q10"/>
								<label class="animate" for="q10">Q: Do you know what the relationship is between telomeres and immortality?</label>
								<div class="response animate row">
									<div class="pagination-center" id="piechart10" style="width: 815px; height: 520px;"></div>
								</div>
								<input class="animate" type="radio" name="question" id="q11"/>
								<label class="animate" for="q11">Q: Do you think longevity is beneficial for the human race?</label>
								<div class="response animate row">
									<div class="pagination-center" id="piechart11" style="width: 815px; height: 520px;"></div>
								</div>
							</div>
						</div>
						<span style="display:block; height: 25px;"></span>
						<div class="row" id='guest_lectures'>
							<div class="col-lg-5">
								<img src="http://2014hs.igem.org/wiki/images/a/a9/DrLi.JPG" alt="iGEM Interview">
							</div>
							<div class="col-lg-7">
								<h4>Guest Lectures</h4>
								<p>Throughout the year, we were extremely fortunate to have Stanford professor Dr. Boxer, National Yang Ming University professors Dr. Li and Dr. Tsai, and previous MIT iGEM member Charles Hsu, come present on various research in their fields of expertise. Their lectures included topics such as green fluorescent protein, regenerative stem cell medicine, neuronal cell migration, and past experiences. These talks helped us along in our planning and research and allowed us to gain first&#45;hand experience from professors.</p>
							</div>
						</div>
						<span style="display:block; height: 25px;"></span>
						<div class="row" id='collaborations'>
							<div class="col-lg-7">
								<h4>Collaboration</h4>
								<p>Science is foremost and should be a collaborative and communicative affair. We formed a friendship with the National Taiwan University and National Yang Ming University iGEM teams through presenting our projects to one another, receiving constructive feedback, and inspiring one another.</p>
							</div>
							<div class="col-lg-5">
								<div class='row'>
										<div id="slides" class='col-lg-12 full'>
											<iframe width="326" height="217" src="//www.youtube.com/embed/JKiOUpEhwLA" frameborder="0" allowfullscreen></iframe>
											<iframe width="326" height="217" src="//www.youtube.com/embed/4IGK4EqaiFI" frameborder="0" allowfullscreen></iframe>
										</div>
								</div>
							</div>
						</div>
						<span style="display:block; height: 25px;"></span>					
						<div class="row">
							<div class="col-lg-6">
							<img src="http://2014hs.igem.org/wiki/images/b/ba/NYMU1.JPG" width="428" height="230" alt="">
							</div>
							
							<div class="col-lg-6">
							<img src="http://2014hs.igem.org/wiki/images/2/27/NYMU2.JPG" width="428" height="230" alt="">
							</div>
						</div>
						<span style="display:block; height: 25px;"></span>	
						<div class="row">
							<div class="col-lg-4">
								<img src="http://2014hs.igem.org/wiki/images/6/66/NYMU3.JPG" width="255" height="170" alt="">
							</div>
							
							<div class="col-lg-4">
								<img src="http://2014hs.igem.org/wiki/images/7/7d/NTU1.JPG" width="255" height="170" alt="">
							</div>
							
							<div class="col-lg-4">
								<img src="http://2014hs.igem.org/wiki/images/d/de/NTU2.JPG" width="255" height="170" alt="">
							</div>
						</div>
						<span style="display:block; height: 25px;"></span>
						<div class="row" id='cancer_specialist_interview'>
							<div class="col-lg-7">
								<h4>Interviewing A Cancer Specialist</h4>
								<p>We reached out to a professional radiation oncologist, Dr. Yen, who is working at Cathay General Hospital, to discuss the impact and practicality of our project in her field. Through a thoughtful conversation, we learned about the process of how cancer drugs get approved and implemented, and what our project means for society in the future.</p>
							</div>
							<div class="col-lg-5">
								<iframe width="326" height="217" src="//www.youtube.com/embed/c-nNTFiv6uI" frameborder="0" allowfullscreen></iframe>

							</div>
						</div>
						<span style="display:block; height: 25px;"></span>
						<div class="row" id='ethics_panel'>
								<div class="col-lg-5">
									<iframe width="326" height="217" src="//www.youtube.com/embed/0Q2CPqhv19w" frameborder="0" allowfullscreen></iframe>

								</div>
								<div class="col-lg-7">
								<h4>Ethics Panel</h4>
								<p>In order to collect opinions from multiple angles in a collaborative environment on the ethical issues, we invited professionals from varying fields in Science, History, Math, and English. It was an hour-long, heated, debate and discussion on topics such as the impact of immortality on society, the state of modern science, and whether or not longevity is desired. It was an open event attended by many students, teachers, and administrators, who also had the opportunity to ask questions of their own.</p>
								</div>
						</div>
						<span style="border-bottom:solid #000000; display:block; height: 50px;"></span>
						<span style="display:block; height: 25px;"></span>
						<p>&ldquo;Do I want to die from natural causes... or do I want to witness the heat death of the universe and watch my cells fall apart as entropy just takes over everything?&rdquo;</p>
						<div class="text-center">
							<p>&#151; Dr. Allan Bayntun</p>
						</div>
						<span style="border-top:solid #000000; display:block; height: 50px;"></span>
						<div class="row" id='outreach'>
							<div class="col-lg-12">
								<h1>Outreach</h1>
								<p>Overview: A crucial aspect of human practice is reaching out to the community, at school, in the local neighborhood, throughout the country, and beyond. This section deals with our efforts in promoting synthetic biology, iGEM, our project, both in and outside of school. This was achieved through teaching kids of various ages, handing out fliers during an exploration of the city, fun activities, and a plethora of media outlets for publicity.</p>
							</div>
						</div>
						<span style="display:block; height: 25px;"></span>
						<div class="row" id='public_awareness'>
							<div class="col-lg-3">
								<img src="http://2014hs.igem.org/wiki/images/2/2d/Poster1.JPG" width="152" height="217" alt="">
							</div>
							<div class="col-lg-4">
								<h4>Public Awareness</h4>
								<p>To promote our project to the Taipei city public and to showcase our cultural heritage to the world through the introduction of famous destinations in Taipei, we travelled throughout the city, passing out fliers to people and explaining our project to them. It turned out to be a great success, and a lot of fun. Check out our video!</p>
							</div>
							<div class="col-lg-5">
								<iframe width="326" height="217" src="//www.youtube.com/embed/smai4njKY-M" frameborder="0" allowfullscreen></iframe>

							</div>
						</div>
						<span style="display:block; height: 25px;"></span>
						<div class="row" id='syn_bio_education'>
							<div class="col-lg-5">
								<iframe width="326" height="217" src="//www.youtube.com/embed/77fbE6yxn5Y" frameborder="0" allowfullscreen></iframe>
							</div>
							<div class="col-lg-7">
								<h4>Synthetic Biology Education</h4>
								<p>We organized classes for kids from 8th Grade, 5th grade, and Kindergarten to spark their interest in science. We introduced them to topics such as DNA, synthetic biology, and our project. Also, we showed them around our lab and taught them lab skills such as pipetting and loading gels. To spice things up, there was a competition to see who could make the coolest design with colored water using pipettes. For kindergarteners, we performed various skits and taught them basic knowledge on bacteria and the importance of washing hands.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
							<img src="http://2014hs.igem.org/wiki/images/7/78/Kindergarten.JPG" width="428" height="230" alt="">
							</div>
							
							<div class="col-lg-6">
							<img src="http://2014hs.igem.org/wiki/images/e/ee/Teach1.JPG" width="428" height="230" alt="">
							</div>
						</div>
						<span style="display:block; height: 25px;"></span>
						<div class="row">
							<div class="col-lg-6">
							<img src="http://2014hs.igem.org/wiki/images/9/97/Teach3.JPG" width="428" height="230" alt="">
							</div>
							
							<div class="col-lg-6">
							<img src="http://2014hs.igem.org/wiki/images/c/c2/Teach4.JPG" width="428" height="230" alt="">
							</div>
						</div>
						
						<span style="display:block; height: 50px;"></span>
						<div class="row" id='research_symposium'>
							<div class="col-lg-7">
								<h4>Research Symposium</h4>
								<p>We hosted a science symposium and fair every semester of school to showcase our research results and findings to the TAS community and to gain experience in presenting to audiences. These presentations spread excitement and knowledge of iGEM and our project. It was a fun and interesting experience to have all sorts of different booths filled with passionate discoveries.</p>
							</div>
							<div class="col-lg-5">
								<img src="http://2014hs.igem.org/wiki/images/1/1a/Clapper-Awesome.jpg" width="255" height="170" alt="">
							</div>
						</div>
						<span style="display:block; height: 25px;"></span>
						<div class="row" id='school_fairs'>
							<div class="col-lg-12">
								<h4>School Fairs</h4>
								<p>During an annual spring fair hosted by our school, we set up a fair booth that people from all over Taipei could visit. By doing this, we hoped to spread awareness about synthetic biology throughout the community. We taught children and adults alike about DNA and telomeres through our &ldquo;Pin the Telomeres on the Chromosome&rdquo; game. We also gained helpful data from the public regarding their opinions towards synthetic biology and our project.</p>
							</div>
						</div>
						<span style="display:block; height: 25px;"></span>
						<div class="row">
							<div class="row">
								<div class="col-lg-4">
									<img src="http://2014hs.igem.org/wiki/images/5/53/Fair1.JPG" width="255" height="170" alt="">
								</div>
								<div class="col-lg-4">
									<iframe width="255" height="170" src="//www.youtube.com/embed/_4DtHsqHmSE" frameborder="0" allowfullscreen></iframe>
								</div>
								<div class="col-lg-4">
									<img src="http://2014hs.igem.org/wiki/images/1/13/Fair3.JPG" width="255" height="170" alt="">
								</div>
							</div>
							<span style="display:block; height: 25px;"></span>
							<div class="row" margin-top="-200px">
								<div class="col-lg-4">
									<img src="http://2014hs.igem.org/wiki/images/9/9f/Fair4.JPG" width="255" height="170" alt="">
								</div>
								<div class="col-lg-4">
									<img src="http://2014hs.igem.org/wiki/images/0/02/Fair5.JPG" width="255" height="170" alt="">
								</div>
								<div class="col-lg-4">
									<img src="http://2014hs.igem.org/wiki/images/d/d5/Fair6.JPG" width="255" height="170" alt="">
								</div>
							</div>
						</div>
						<span style="display:block; height: 50px;"></span>
						<div class="row" id='media'>
							<div class="col-lg-7">
								<h4>Media Outlets</h4>
								<p>We utilized different mediums, generating excitement throughout the school and the larger Taiwan community. Some ways we accomplished this were through publishing articles in several widely&#45;circulated newspapers and magazines, featuring on a Facebook page, and participating in an exclusive interview on Taiwan Television.</p>
							</div>
							<div class="col-lg-5">
								<img src="http://2014hs.igem.org/wiki/images/c/c5/FB.jpg" width="326" height="217" alt="">
							</div>
						</div>
						<span style="display:block; height: 25px;"></span>
						<div id='bodycontainer' class='row' style=''>
							<div id="slides" class='col-lg-12 full'>
								<div class="heroImageContainer slidesjs-slide" img width="855" height="800" src="http://2014hs.igem.org/wiki/images/d/d0/Media1.JPG" alt=""">
									<h3 class="bottomleft red">SOME TEXT<span></span></h3>
								</div>
								<div class="heroImageContainer slidesjs-slide" style="background-image: url(http://2014hs.igem.org/wiki/images/9/9d/Media2.JPG);">
									<h3 class="bottomright green">MORE TEXT<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, doloremque, praesentium quod accusamus quasi nulla incidunt aliquid aut corporis recusandae numquam hic culpa alias debitis consequatur! Blanditiis, minus tenetur reprehenderit.</span></h3>
								</div>
								<div class="heroImageContainer slidesjs-slide" style="background-image: url(http://2014hs.igem.org/wiki/images/c/c2/Media8.JPG);">
									<h3 class="bottomright blue">AND MORE TEXT...<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, doloremque, praesentium quod accusamus quasi nulla incidunt aliquid aut corporis recusandae numquam hic culpa alias debitis consequatur! Blanditiis, minus tenetur reprehenderit.</span></h3>
								</div>
							</div>
						</div>	
						<div class='row'>
								<div class='col-lg-12 full'>
									<div id="slides" class='col-lg-12 full'>
									<img width="855" height="800" src="http://2014hs.igem.org/wiki/images/d/d0/Media1.JPG" alt="">
									<img width="855" src="http://2014hs.igem.org/wiki/images/9/9d/Media2.JPG" alt="">
									<img width="855" src="http://2014hs.igem.org/wiki/images/c/c2/Media8.JPG" alt="">
									<img width="855" src="http://2014hs.igem.org/wiki/images/d/d1/Media5.JPG" alt="">
								</div>
								</div>
						</div>
						<span style="display:block; height: 25px;"></span>
						<div class="row" id='igem_hs_meetup'>
							<div class="col-lg-12">
								<h4>iGEM High School Meet&#45;Up</h4>
								<p>In order to learn more about different iGEM team projects and to prepare for the June Jamboree, we invited the Taipei Mingdao team to our school. We presented our project and tried to gain perspective on the other team&#39;s topic. It was a great pleasure to host Taiwan&#39;s first iGEM high school meet&#45;up.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<img src="http://2014hs.igem.org/wiki/images/b/b0/Mingdao2.JPG" width="397" height="217" alt="">
							</div>
							<div class="col-lg-6">
								<img src="http://2014hs.igem.org/wiki/images/7/76/Mingdao1.JPG" width="397" height="217" alt="">
							</div>
						</div>
						<span style="display:block; height: 25px;"></span>
						<div class="row">
							<div class="col-lg-6">
								<img src="http://2014hs.igem.org/wiki/images/3/30/Mingdao4.JPG" width="397" height="217" alt="">
							</div>
							<div class="col-lg-6">
								<img src="http://2014hs.igem.org/wiki/images/e/ea/Mingdao3.JPG" width="397" height="217" alt="">
							</div>
						</div>
						<span style="display:block; height: 25px;"></span>
						<div class="row" id='igem_club'>
							<div class="col-lg-12">
								<h4>iGEM Club</h4>
								<p>We founded a new iGEM club to gather interest for this competition and to ensure that there is a continuous stream of incoming students who are interested in joining us in the future.</p>
							</div>
						</div>
						<span style="display:block; height: 25px;"></span>
						<div class="row">
							<div class="col-lg-6">
								<img src="http://2014hs.igem.org/wiki/images/a/a0/Club1.JPG" alt="">
							</div>
							<div class="col-lg-6">
								<img src="http://2014hs.igem.org/wiki/images/0/0d/Club2.jpg" alt="">
							</div>
						</div>
						<span style="border-bottom:solid #000000; display:block; height: 50px;"></span>
						<span style="display:block; height: 25px;"></span>
						<p>&ldquo;If I had the opportunity to live forever with pharmaceutical aid, then I would take that and let my next course of death be a truck... or a cliff...&rdquo;</p>
						<div class="text-center">
							<p>&#151; Mr. Matt Fagen</p>
						</div>
						<span style="border-top:solid #000000; display:block; height: 50px;"></span>
						<div class="row" id='entertainment'>
							<div class="col-lg-12">
								<h1>Entertainment</h1>
								<p>Overview: Science doesn&#39;t have to be too serious all the time. This facet of human practice deals with spreading the word through mainstream media, games and art, and ultimately having some fun!</p>
							</div>
						</div>
						<span style="display:block; height: 25px;"></span>
						<div class="row" id='music_video'>
							<div class="col-lg-12">
									<h4>Music Video</h4>
									<p>We created a music video for our original song named &ldquo;Let it Grow&rdquo;, a playful parody of Frozen&#39;s &ldquo;Let it Go&rdquo;, in order to exhibit our lab and stimulate interest towards iGEM and our project. We spent several days filming and editing our music video, and had a blast in the process!</p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<iframe width="825" height="464" src="//www.youtube.com/embed/KbvPzcFUcuM" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<span style="display:block; height: 50px;"></span>
						<div class="row" id='2048_igem'>
							<div class="col-lg-12">
								<div class="text-center">
								<h4> <a href="http://cookiefairy.web.fc2.com/iGem2048/">iGEM 2048</a></h4>
								<p>Through customizing the game &ldquo;2048&rdquo; into iGEM members&#39; pictures, we not only created an outlet to relieve stress after frustrating failures in the lab, but also allowed others to learn more about the team members through an interesting approach. </p>
								</div>
							</div>	
						</div>
						<div class="row">
							<div class="col-lg-12">
								<iframe src="http://cookiefairy.web.fc2.com/iGem2048/"  width="825" height="1200"></iframe>
							</div>	
												
						</div>
						<span style="display:block; height: 25px;"></span>
						<div class="row" id='montage_video'>
							<div class="col-lg-5">
								<iframe width="326" height="217" src="//www.youtube.com/embed/azYyhOAJYbI" frameborder="0" allowfullscreen></iframe>
							</div>	
							<div class="col-lg-7">
								<h4>Montage Video</h4>
								<p>We created a video to capture daily events in the lab, including documentations of our experiments and of our team members in action. This video captures the progress we have made throughout the year and the long hours we&#39;ve spent in our lab.</p>
							</div>						
						</div>
						<span style="display:block; height: 25px;"></span>
						<div class="row" id='igem_poem'>
							<div class="col-lg-12">
								<div class="text-center">
								<h4><u>Riders of Rohan</u></h4>
								<p>After an age of absence</p>
								<p>The alchemists have returned</p>
								<p>Except this time</p>
								<p>Not in fine linen robes</p>
								<p>But in pristine white lab coats</p>
								<p>Armed with their <i>prima materia</i>&#151;bacteria</p>
								<p>&#151;To solve the ultimate mystery</p>
								<p>And create the philosopher&#39;s stone</p>
								<p>To confront this daunting task</p>
								<p>We need the true creed of a researcher</p>
								<p>Arise, arise</p>
								<p>Riders of Rohan!</p>
								<p>Mortal foes galore: cancer and death!</p>
								<p>Pipette shall be paraded, plasmid be purified</p>
								<p>A gel made</p>
								<p>A plate poured</p>
								<p>Ere the clock chimes!</p>
								<p>Ride for research...and a new beginning!</p>
								<p>Death! Death!</p>
								<p>Forth iGEMers!</p>
								</div>
							</div>
						</div>
					</div>
				</div>	
				<footer class='row'>
				<div class="cornered">
				<img src="static/tas_igemlogo.png" alt="" style="width: 67px;margin-top: -88px;margin-left: 188px;">
				</div>
				<div class='footer_right'>
				<a href="#">Taipei American School</a>
				<span>/</span>
				<a href="#">iGEM</a>
				</div>
				</footer>
			</div>


			
			



			<div class="canvas-container"></div>
			<script>NUM_PARTICLES = 1000;</script>
			<script src='http://2014hs.igem.org/Team:TAS_Taipei/js/field_homepage.js?action=raw&ctype=text/javascript'></script>
			<script>sketchItem.start();</script>
			<script type="text/javascript" src="https://www.google.com/jsapi"></script>
			<script type="text/javascript">
			  google.load("visualization", "1", {packages:["corechart"]});
			  google.setOnLoadCallback(drawChart);
			  function drawChart() {
				var data = google.visualization.arrayToDataTable([
				  ['Task', 'Hours per Day'],
				  ['Yes! I want to live forever! There are too much things I want to do!',     32],
				  ['Hmmm....Sounds good...but only if my quality of life is good.',      66],
				  ['I\'\m not sure if immortality will be such a great thing.',  51],
				  ['No. I want to live a normal mortal life.', 40],
				]);

				var options = {
				  title: 'Immortality?'
				};

				var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
				chart.draw(data, options);
			  }
			</script>
			<script type="text/javascript">
			  google.load("visualization", "1", {packages:["corechart"]});
			  google.setOnLoadCallback(drawChart);
			  function drawChart() {
				var data = google.visualization.arrayToDataTable([
				  ['Task', 'Hours per Day'],
				  ['Thank all that had made your life more interesting',     47],
				  ['Volunteer for an altruistic cause',      9],
				  ['Do something juvenile',  6],
				  ['Spend all you money', 13],
				  ['Do something reckless', 29],
				  ['Tell the love of your life you love them', 41],
				  ['Eat all you want', 16],
				  ['Other', 25],
				]);

				var options = {
				  title: '24 Hours to Live'
				};

				var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
				chart.draw(data, options);
			  }
			</script>
			<script type="text/javascript">
			  google.load("visualization", "1", {packages:["corechart"]});
			  google.setOnLoadCallback(drawChart);
			  function drawChart() {
				var data = google.visualization.arrayToDataTable([
				  ['Task', 'Hours per Day'],
				  ['0-10',     4],
				  ['11-20',      96],
				  ['21-30',  21],
				  ['31-40', 27],
				  ['41-50', 28],
				  ['61-70', 10],
				]);

				var options = {
				  title: 'Age Group'
				};

				var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
				chart.draw(data, options);
			  }
			</script>
			<script type="text/javascript">
			  google.load("visualization", "1", {packages:["corechart"]});
			  google.setOnLoadCallback(drawChart);
			  function drawChart() {
				var data = google.visualization.arrayToDataTable([
				  ['Task', 'Hours per Day'],
				  ['A',     84],
				  ['B',      87],
				  ['C',  13],
				  ['D', 2],
				  ['F', 1],
				]);

				var options = {
				  title: 'Life Grade'
				};

				var chart = new google.visualization.PieChart(document.getElementById('piechart4'));
				chart.draw(data, options);
			  }
			</script>
			<script type="text/javascript">
			  google.load("visualization", "1", {packages:["corechart"]});
			  google.setOnLoadCallback(drawChart);
			  function drawChart() {
				var data = google.visualization.arrayToDataTable([
				  ['Task', 'Hours per Day'],
				  ['I can definitely do better.',     71],
				  ['I don\'\t think I will do as well.	',      42],
				  ['I think nothing will change',  76],
				]);

				var options = {
				  title: 'Immortality Grade Changer'
				};

				var chart = new google.visualization.PieChart(document.getElementById('piechart5'));
				chart.draw(data, options);
			  }
			</script>
			<script type="text/javascript">
			  google.load("visualization", "1", {packages:["corechart"]});
			  google.setOnLoadCallback(drawChart);
			  function drawChart() {
				var data = google.visualization.arrayToDataTable([
				  ['Task', 'Hours per Day'],
				  ['I\'\m an expert.',     5],
				  ['I probably know more about synthetic biology than the general population.	',      41],
				  ['I guess I have some idea what it\'\s about.',  77],
				  ['Say what?', 66],
				]);

				var options = {
				  title: 'Synthetic Biology Knowledge'
				};

				var chart = new google.visualization.PieChart(document.getElementById('piechart6'));
				chart.draw(data, options);
			  }
			</script>
			<script type="text/javascript">
			  google.load("visualization", "1", {packages:["corechart"]});
			  google.setOnLoadCallback(drawChart);
			  function drawChart() {
				var data = google.visualization.arrayToDataTable([
				  ['Task', 'Hours per Day'],
				  ['Definitely!',     25],
				  ['Meh. Maybe?',      120],
				  ['Immortality is not possible.',  43],
				]);

				var options = {
				  title: 'Can Synthetic Biology Solve Death?'
				};

				var chart = new google.visualization.PieChart(document.getElementById('piechart7'));
				chart.draw(data, options);
			  }
			</script>
			<script type="text/javascript">
			  google.load("visualization", "1", {packages:["corechart"]});
			  google.setOnLoadCallback(drawChart);
			  function drawChart() {
				var data = google.visualization.arrayToDataTable([
				  ['Task', 'Hours per Day'],
				  ['Physical appearance',     28],
				  ['Personality',      19],
				  ['Health',  68],
				  ['Intelligence', 49],
				  ['Other', 16],
				]);

				var options = {
				  title: 'Changing Genes'
				};

				var chart = new google.visualization.PieChart(document.getElementById('piechart8'));
				chart.draw(data, options);
			  }
			</script>
			<script type="text/javascript">
			  google.load("visualization", "1", {packages:["corechart"]});
			  google.setOnLoadCallback(drawChart);
			  function drawChart() {
				var data = google.visualization.arrayToDataTable([
				  ['Task', 'Hours per Day'],
				  ['NOPE',     119],
				  ['Yes!',      65],
				]);

				var options = {
				  title: 'Telomeres?'
				};

				var chart = new google.visualization.PieChart(document.getElementById('piechart9'));
				chart.draw(data, options);
			  }
			</script>
			<script type="text/javascript">
			  google.load("visualization", "1", {packages:["corechart"]});
			  google.setOnLoadCallback(drawChart);
			  function drawChart() {
				var data = google.visualization.arrayToDataTable([
				  ['Task', 'Hours per Day'],
				  ['Okay... I have no clue whatsoever',     128],
				  ['Yep!',      55],
				]);

				var options = {
				  title: 'Telomeres and Immortality'
				};

				var chart = new google.visualization.PieChart(document.getElementById('piechart10'));
				chart.draw(data, options);
			  }
			</script>
			<script type="text/javascript">
			  google.load("visualization", "1", {packages:["corechart"]});
			  google.setOnLoadCallback(drawChart);
			  function drawChart() {
				var data = google.visualization.arrayToDataTable([
				  ['Task', 'Hours per Day'],
				  ['Yes!',     39],
				  ['Maybe?',      88],
				  ['No',  58],
				]);

				var options = {
				  title: 'Is Longevity Beneficial?'
				};

				var chart = new google.visualization.PieChart(document.getElementById('piechart11'));
				chart.draw(data, options);
			  }
			</script>
			<script>
				$(function () {
					$("#slides").slidesjs({
					width: 940,
					height: 500,
						play: {
							active: false,
							effect: "slide",
							interval: 5000,
							auto: true,
							swap: false,
							pauseOnHover: false,
							restartDelay: 2500
						},
						navigation: false
					})
				});
			</script>
			<script>
			 $(function(){
				
				function setHeight(){
					$(".response").each(function(index,element){
						var target = $(element);
						target.removeClass("fixed-height");
						var height = target.innerHeight();
						target.attr("data-height", height)
							  .addClass("fixed-height");
					});
				};
				
				$("input[name=question]").on("change", function(){
					$("p.response").removeAttr("style");
					
					var target = $(this).next().next();
					target.height(target.attr("data-height"));
				})
				
				setHeight();
			});
			</script>
		</body>
	</html>