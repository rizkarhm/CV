<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

	<!--- basic page needs
   ================================================== -->
	<meta charset="utf-8">
	<title>Curiculum Vitae</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
   ================================================== -->
	<link rel="stylesheet" href="assets/css/base.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/vendor.css">

	<!-- script
   ================================================== -->
	<script src="assets/js/modernizr.js"></script>
	<script src="assets/js/pace.min.js"></script>

	<!-- favicons
	================================================== -->
	<link rel="icon" type="assets/images/bg.png" href="assets/favicon.png">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
	<header>
		<div class="row">

			<div class="top-bar">
				<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll" href="#intro" title="">Home</a></li>
						<li><a class="smoothscroll" href="#about" title="">About</a></li>
						<li><a class="smoothscroll" href="#resume" title="">Resume</a></li>
						<li><a class="smoothscroll" href="#portfolio" title="">Portfolio</a></li>
						<li><a class="smoothscroll" href="#services" title="">Services</a></li>
						<li><a class="smoothscroll" href="#contact" title="">Contact</a></li>
					</ul>
				</nav>
			</div> <!-- /top-bar -->

		</div> <!-- /row -->
	</header> <!-- /header -->

	<!-- intro section
   ================================================== -->
	<section id="intro">

		<div class="intro-overlay"></div>

		<div class="intro-content">
			<div class="row">
				<div class="col-twelve">
					<h5>Hello, World.</h5>
					<h1>I'm <?php echo $biodata['name']?>.</h1>
					<p class="intro-position">
						<span>Front-end Developer</span>
						<span>Web Developer</span>
					</p>
					<a class="button stroke smoothscroll" href="#about" title="">More About Me</a>

				</div>

			</div>
		</div> <!-- /intro-content -->

		<ul class="intro-social">
			<li><a href="https://www.facebook.com/rizka.rahma.399"><i class="fa fa-facebook"></i></a></li>
			<li><a href="<?php echo $contact['link']?>"><i class="fa fa-instagram"></i></a></li>
			<li><a href="https://twitter.com/rizkarhm67"><i class="fa fa-twitter"></i></a></li>
			<li><a href="https://www.linkedin.com/in/rizka-nur-rahma-286b08171/"><i class="fa fa-linkedin"></i></a></li>
		</ul> <!-- /intro-social -->

	</section> <!-- /intro -->


	<!-- about section
   ================================================== -->
	<section id="about">

		<div class="row section-intro">
			<div class="col-twelve">

				<h5>About</h5>
				<h1>Let me introduce myself.</h1>

				<div class="intro-info">

					<img src="assets/images/bg.png" alt="Profile Picture">

					<p class="lead">Hello, I'am <?php echo $biodata['nick_name']?>. Now I'am student in Vocational High School 5 Malang in major
						Software Engineering. This is my last year in High School. In here, I had many experience about
						Progamming and Leadership.</p>
				</div>

			</div>
		</div> <!-- /section-intro -->

		<div class="row about-content">

			<div class="col-six tab-full">

				<h3>Profile</h3>

				<ul class="info-list">
					<li>
						<strong>Fullname:</strong>
						<span><?php echo $biodata['name']?></span>
					</li>
					<li>
						<strong>Nickname:</strong>
						<span><?php echo $biodata['nick_name']?></span>
					</li>
					<li>
						<strong>Place and Birth Date:</strong>
						<span><?php echo $biodata['place']; echo ", ".$biodata['date']?></span>
					</li>
					<li>
						<strong>Gender:</strong>
						<span><?php echo $biodata['gender']?></span>
					</li>
					<li>
						<strong>Job:</strong>
						<span><?php echo $biodata['job']?></span>
					</li>
					<li>
						<strong>Phone Number:</strong>
						<span><?php echo $biodata['phone']?></span>
					</li>
					<li>
						<strong>Email:</strong>
						<span><?php echo $biodata['email']?></span>
					</li>
					<li>
						<strong>Address:</strong>
						<span><?php echo $biodata['address']?></span>
					</li>

				</ul> <!-- /info-list -->

			</div>

			<div class="col-six tab-full">

				<h3>Skills</h3>

				<ul class="skill-bars">
					<li>
						<div class="progress percent90"><span><?php echo $skills['percentage']?>%</span></div>
						<strong><?php echo $skills['name']?></strong>
					</li>
					<li>
						<div class="progress percent70"><span>70%</span></div>
						<strong>CSS3</strong>
					</li>
					<li>
						<div class="progress percent70"><span>70%</span></div>
						<strong>JQuery</strong>
					</li>
					<li>
						<div class="progress percent95"><span>95%</span></div>
						<strong>PHP</strong>
					</li>
					<li>
						<div class="progress percent30"><span>30%</span></div>
						<strong>Python</strong>
					</li>
					<li>
						<div class="progress percent50"><span>50%</span></div>
						<strong>Design</strong>
					</li>
					<li>
						<div class="progress percent60"><span>60%</span></div>
						<strong>Photography</strong>
					</li>
					<li>
						<div class="progress percent50"><span>50%</span></div>
						<strong>Java Mobile App</strong>
					</li>
					<li>
						<div class="progress percent45"><span>45%</span></div>
						<strong>Kotlin Mobile App</strong>
					</li>
					<li>
						<div class="progress percent80"><span>80%</span></div>
						<strong>React Native Mobile App</strong>
					</li>

				</ul> <!-- /skill-bars -->

			</div>

		</div>

		<div class="row button-section">
			<div class="col-twelve">
				<a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
				<a href="https://github.com/Rizkarhm" title="Github" class="button button-primary">See my Github</a>
			</div>
		</div>

	</section> <!-- /process-->


	<!-- resume Section
   ================================================== -->
	<section id="resume" class="grey-section">

		<div class="row section-intro">
			<div class="col-twelve">

				<h5>Resume</h5>
				<h1>You want to know me more? Let's check this out!</h1>

				<p class="lead"></p>

			</div>
		</div> <!-- /section-intro-->

		<div class="row resume-timeline">

			<div class="col-twelve resume-header">

				<h2>Experience</h2>

			</div> <!-- /resume-header -->

			<div class="col-twelve">

				<div class="timeline-wrap">

					<div class="timeline-block">
						<div class="timeline-ico">
							<i class="fa fa-briefcase"></i>
						</div>
						<div class="timeline-header">
							<h3>AWS</h3>
							<p>May 2019</p>
						</div>
						<div class="timeline-content">
							<h4>AWS Educate Programs</h4>
							<p>Experience about Cloud Computing as a Cloud Practitioner</p>
						</div>
					</div> <!-- /timeline-block -->

					<div class="timeline-block">
						<div class="timeline-ico">
							<i class="fa fa-briefcase"></i>
						</div>
						<div class="timeline-header">
							<h3>Junior IT</h3>
							<p>March 2019</p>
						</div>
						<div class="timeline-content">
							<h4>SMKN 5 Malang</h4>
							<p>Doing Troubleshoot and Preparation the computer during the School Exam</p>
						</div>
					</div> <!-- /timeline-block -->

					<div class="timeline-block">
						<div class="timeline-ico">
							<i class="fa fa-briefcase"></i>
						</div>
						<div class="timeline-header">
							<h3>SMK Coding</h3>
							<p>March 2019</p>
						</div>
						<div class="timeline-content">
							<h4>SMK Coding</h4>
							<p>Experience about Mobile Progamming using Android Studio with Java and Kotlin languange
							</p>
						</div>
					</div> <!-- /timeline-block -->


					<div class="timeline-block">
						<div class="timeline-ico">
							<i class="fa fa-graduation-cap"></i>
						</div>
						<div class="timeline-header">
							<h3><?php echo $experience['type']?></h3>
							<p><?php echo $experience['year']?></p>
						</div>
						<div class="timeline-content">
							<h4><?php echo $experience['name']?></h4>
							<p><?php echo $experience['about']?></p>
						</div>
					</div> <!-- /timeline-block -->
				</div> <!-- /timeline-wrap -->

			</div> <!-- /col-twelve -->

		</div> <!-- /resume-timeline -->

		<div class="row resume-timeline">

			<div class="col-twelve resume-header">

				<h2>Education</h2>

			</div> <!-- /resume-header -->

			<div class="col-twelve">
				<div class="timeline-wrap">
					<div class="timeline-ico">
						<i class="fa fa-briefcase"></i>
					</div>

					<div class="timeline-block">
						<div class="timeline-ico">
							<i class="fa fa-briefcase"></i>
						</div>
						<div class="timeline-header">
							<h3>High School</h3>
							<p>July 2017 - Present</p>
						</div>
						<div class="timeline-content">
							<h4>Vocational High School 5 Malang</h4>
							<p>Achive more specific code & programming languange . experiences. Learn more and more.
								Doing Industrial Practice. Getting
								my first project.</p>
						</div>
					</div> <!-- /timeline-block -->

					<div class="timeline-block">
						<div class="timeline-ico">
							<i class="fa fa-briefcase"></i>
						</div>
						<div class="timeline-header">
							<h3>Junior High School</h3>
							<p>July 2014 - June 2017</p>
						</div>
						<div class="timeline-content">
							<h4>SMPN 5 Malang</h4>
							<p>I start my Junior High School in here and graduate in 2017</p>
						</div>
					</div> <!-- /timeline-block -->

					<div class="timeline-block">
						<div class="timeline-ico">
							<i class="fa fa-briefcase"></i>
						</div>
						<div class="timeline-header">
							<h3>Elementary School</h3>
							<p>July 2011 - June 2014</p>
						</div>
						<div class="timeline-content">
							<h4>SDN Arjosari 1</h4>
							<p>I continue my fourth class in here, and graduate in 2014</p>
						</div>
					</div> <!-- /timeline-block -->

					<div class="timeline-block">
						<div class="timeline-ico">
							<i class="fa fa-briefcase"></i>
						</div>
						<div class="timeline-header">
							<h3><?php echo $education['type']?></h3>
							<p><?php echo $education['year']?></p>
						</div>
						<div class="timeline-content">
							<h4><?php echo $education['name']?></h4>
							<p><?php echo $education['about']?></p>
						</div>
					</div> <!-- /timeline-block -->

				</div> <!-- /timeline-wrap -->
			</div> <!-- /col-twelve -->
		</div> <!-- /resume-timeline -->

	</section>

	<!-- Portfolio Section
   ================================================== -->
	<section id="portfolio">

		<div class="row section-intro">
			<div class="col-twelve">

				<h5>Portfolio</h5>
				<h1>Check Out Some of My Works.</h1>

			</div>
		</div> <!-- /section-intro-->

		<div class="row portfolio-content">

			<div class="col-twelve">

				<!-- portfolio-wrapper -->
				<div id="folio-wrapper" class="block-1-2 block-mob-full stack">

					<div class="bgrid folio-item">
						<div class="item-wrap">
							<img src="assets/images/portfolio/remap.png" alt="Remap">
							<a href="#modal-01" class="overlay">
								<div class="folio-item-table">
									<div class="folio-item-cell">
										<h3 class="folio-title"><?php echo $portofolio['name']?> App</h3>
										<span class="folio-types">
											<?php echo $portofolio['type']?>
										</span>
									</div>
								</div>
							</a>
						</div>
					</div> <!-- /folio-item -->

					<div class="bgrid folio-item">
						<div class="item-wrap">
							<img src="assets/images/portfolio/supermarket.jpg" alt="Supermarket">
							<a href="#modal-02" class="overlay">
								<div class="folio-item-table">
									<div class="folio-item-cell">
										<h3 class="folio-title">Web Supermarket</h3>
										<span class="folio-types">
											Admin Web
										</span>
									</div>
								</div>
							</a>
						</div>
					</div> <!-- /folio-item -->

					<div class="bgrid folio-item">
						<div class="item-wrap">
							<img src="assets/images/portfolio/kalkulator.png" alt="Kalkulator">
							<a href="#modal-03" class="overlay">
								<div class="folio-item-table">
									<div class="folio-item-cell">
										<h3 class="folio-title">Kalkulator App</h3>
										<span class="folio-types">
											Mobile App
										</span>
									</div>
								</div>
							</a>
						</div>
					</div> <!-- /folio-item -->




					<!-- modal popups - begin
	            ============================================================= -->

					<div id="modal-01" class="popup-modal slider mfp-hide">

						<div class="media">
							<img src="assets/images/portfolio/modals/m-remap.png" alt="" />
						</div>

						<div class="description-box">
							<h4><?php echo $portofolio['name']?></h4>
							<p><?php echo $portofolio['about']?></p>

							<div class="categories"><?php echo $portofolio['type']?></div>
						</div>

						<div class="link-box">
							<a href="http://www.behance.net">Details</a>
							<a href="#" class="popup-modal-dismiss">Close</a>
						</div>
					</div> <!-- /modal-01 -->

					<div id="modal-02" class="popup-modal slider mfp-hide">

						<div class="media">
							<img src="assets/images/portfolio/modals/m-supermarket.jpg" alt="Supermarket" />
						</div>

						<div class="description-box">
							<h4>Web Admin Supermarket</h4>
							<p>Features : <br>
								Login/Register, Transaction, Accses Database, Add Officer, Selling Report.</p>

							<div class="categories">Web Developer</div>
						</div>

						<div class="link-box">
							<a href="C:\xampp\htdocs\CRUD\supermarket">Details</a>
							<a href="#" class="popup-modal-dismiss">Close</a>
						</div>

					</div> <!-- /modal-02 -->

					<div id="modal-03" class="popup-modal slider mfp-hide">

						<div class="media">
							<img src="assets/images/portfolio/modals/m-kalkulator.png" alt="Kalkulator" />
						</div>

						<div class="description-box">
							<h4>Kalkulator</h4>
							<p>The mobile application build with React Native</p>

							<div class="categories">Mobile App</div>
						</div>

						<div class="link-box">
							<a href="http://www.behance.net">Details</a>
							<a href="#" class="popup-modal-dismiss">Close</a>
						</div>

					</div> <!-- /modal-03 -->

					<div id="modal-04" class="popup-modal slider mfp-hide">

						<div class="media">
							<img src="assets/images/portfolio/modals/m-beetle.jpg" alt="" />
						</div>

						<div class="description-box">
							<h4>Beetle</h4>
							<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
								auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

							<div class="categories">Branding</div>
						</div>

						<div class="link-box">
							<a href="http://www.behance.net">Details</a>
							<a href="#" class="popup-modal-dismiss">Close</a>
						</div>

					</div> <!-- /modal-04 -->

					<div id="modal-05" class="popup-modal slider mfp-hide">

						<div class="media">
							<img src="assets/images/portfolio/modals/m-lighthouse.jpg" alt="" />
						</div>

						<div class="description-box">
							<h4>Lighthouse</h4>
							<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
								auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

							<div class="categories">Web Development</div>
						</div>

						<div class="link-box">
							<a href="http://www.behance.net">Details</a>
							<a href="#" class="popup-modal-dismiss">Close</a>
						</div>

					</div> <!-- /modal-05 -->

					<div id="modal-06" class="popup-modal slider mfp-hide">

						<div class="media">
							<img src="assets/images/portfolio/modals/m-salad.jpg" alt="" />
						</div>

						<div class="description-box">
							<h4>Salad</h4>
							<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
								auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

							<div class="categories">Branding</div>
						</div>

						<div class="link-box">
							<a href="http://www.behance.net">Details</a>
							<a href="#" class="popup-modal-dismiss">Close</a>
						</div>

					</div> <!-- /modal-06 -->


					<!-- modal popups - end
	            ============================================================= -->

				</div> <!-- /portfolio-wrapper -->

			</div> <!-- /twelve -->

		</div> <!-- /portfolio-content -->

	</section> <!-- /portfolio -->

	<!-- services Section
   ================================================== -->
	<section id="services">

		<div class="overlay"></div>

		<div class="row section-intro">
			<div class="col-twelve">

				<h5>Services</h5>
				<h1>What Can I Do For You?</h1>

			</div>
		</div> <!-- /section-intro -->

		<div class="row services-content">

			<div id="owl-slider" class="owl-carousel services-list">

				<div class="service">

					<span class="icon"><i class="icon-mobile"></i></span>

					<div class="service-content">

						<h3>Mobile Development</h3>

						<p class="desc">Build Mobile Application with React Native or Android Studio
						</p>

					</div>

				</div> <!-- /service -->

				<div class="service">

					<span class="icon"><i class="icon-window"></i></span>

					<div class="service-content">

						<h3>Web Development</h3>

						<p class="desc">Build Website with PHP, JS, MySQL, CSS, HTML
						</p>

					</div>

				</div> <!-- /service -->

				<div class="service">

					<span class="icon"><i class="icon-toggles"></i></span>

					<div class="service-content">

						<h3>Back End Developer</h3>

						<p class="desc">Build database with MySQL
						</p>

					</div>

				</div> <!-- /service -->

			</div> <!-- /services-list -->

		</div> <!-- /services-content -->

	</section> <!-- /services -->


	<!-- stats Section
   ================================================== -->
	<section id="stats" class="count-up">

		<div class="row">
			<div class="col-twelve">

				<div class="block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list">

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-pencil-ruler"></i>
						</div>

						<h3 class="stat-count">
							4
						</h3>

						<h5 class="stat-title">
							Projects Completed
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-users"></i>
						</div>

						<h3 class="stat-count">
							5
						</h3>

						<h5 class="stat-title">
							Happy Clients
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-badge"></i>
						</div>

						<h3 class="stat-count">
							2
						</h3>

						<h5 class="stat-title">
							Awards Received
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-light-bulb"></i>
						</div>

						<h3 class="stat-count">
							5
						</h3>

						<h5 class="stat-title">
							Event
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-cup"></i>
						</div>

						<h3 class="stat-count">
							1500
						</h3>

						<h5 class="stat-title">
							Coffee Cups
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-clock"></i>
						</div>

						<h3 class="stat-count">
							7200
						</h3>

						<h5 class="stat-title">
							Hours
						</h5>

					</div> <!-- /stat -->

				</div> <!-- /stats-list -->

			</div> <!-- /twelve -->
		</div> <!-- /row -->

	</section> <!-- /stats -->


	<!-- contact
   ================================================== -->
	<section id="contact">

		<div class="row section-intro">
			<div class="col-twelve">

				<h5>Contact</h5>
				<h1>I'd Love To Hear From You.</h1>
			</div>
		</div> <!-- /section-intro -->

		<div class="row contact-form">

			<div class="col-twelve">

				<!-- form -->
				<form name="contactForm" id="contactForm" method="post" action="">
					<fieldset>

						<div class="form-field">
							<input name="contactName" type="text" id="contactName" placeholder="Name" value=""
								minlength="2" required="">
						</div>
						<div class="form-field">
							<input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value=""
								required="">
						</div>
						<div class="form-field">
							<input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
						</div>
						<div class="form-field">
							<textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10"
								cols="50" required=""></textarea>
						</div>
						<div class="form-field">
							<button class="submitform">Submit</button>
							<div id="submit-loader">
								<div class="text-loader">Sending...</div>
								<div class="s-loader">
									<div class="bounce1"></div>
									<div class="bounce2"></div>
									<div class="bounce3"></div>
								</div>
							</div>
						</div>

					</fieldset>
				</form> <!-- Form End -->

				<!-- contact-warning -->
				<div id="message-warning">
				</div>
				<!-- contact-success -->
				<div id="message-success">
					<i class="fa fa-check"></i>Your message was sent, thank you!<br>
				</div>

			</div> <!-- /col-twelve -->

		</div> <!-- /contact-form -->

		<div class="row contact-info">

			<div class="col-four tab-full">

				<div class="icon">
					<i class="icon-pin"></i>
				</div>

				<h5>Where to find me</h5>

				<p>
					Perum. Mondoroko Raya AL-34<br>
					Singosari, Kab. Malang<br>
					65153 ID
				</p>

			</div>

			<div class="col-four tab-full collapse">

				<div class="icon">
					<i class="icon-mail"></i>
				</div>

				<h5>Email Me At</h5>

				<p>rizkarahma67@gmail.com <br>
					rizkarhm67@gmail.com <br>

				</p>

			</div>

			<div class="col-four tab-full">

				<div class="icon">
					<i class="icon-phone"></i>
				</div>

				<h5>Call Me At</h5>

				<p>Phone: (+62) 8785 9159 058<br>
				</p>

			</div>

		</div> <!-- /contact-info -->

	</section> <!-- /contact -->


	<!-- footer
   ================================================== -->

	<footer>
		<div class="row">

			<!-- <div class="col-six tab-full pull-right social">

				<ul class="footer-social">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-behance"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				</ul>

			</div> -->

			<div class="col-eight tab-full">
				<div class="copyright">
					<span>© Copyright 2019 </span>
					<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>
					<span>Distributed by <a href="https://themewagon.com/">Rizka</a></span>
				</div>
			</div>

			<div id="go-top">
				<a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
			</div>

		</div> <!-- /row -->
	</footer>

	<div id="preloader">
		<div id="loader"></div>
	</div>

	<!-- Java Script
   ================================================== -->
	<script src="assets/js/jquery-2.1.3.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>