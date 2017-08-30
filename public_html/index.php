<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatable" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
				rel="stylesheet"/>

		<!-- Custom CSS Here -->
		<link href="style.css" rel="stylesheet"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery v3.0 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<title>timothymichael.org</title>
	</head>
	<body class="sfooter">
		<div class="container">
			<header>
				<div class="sfooter-content">
					<!--NavBar Bootstrap Default Setting-->
					<nav class="navbar navbar-default navbar-fixed-top">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<a class="navbar-brand" href="#">Timothy Michael Williams</a>
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
										  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav navbar-right">
									<li><a href="#bio">Bio</a></li>
									<li><a href="#portfolio">Portfolio</a></li>
									<li><a href="#contact">Contact</a></li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>
				</div>
			</header>


			<!-- Home section with welcome message-->
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="jumbotron">
							<h1>Welcome to</h1>
							<br>
							<p>My Personal Website</p>
						</div>
					</div>
				</div>
			</div>


			<!-- Bio Section-->
			<section id="bio" class="bg-info text-center">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3">
							<img class="img img-circle" src="documentation/images/wedsolo.jpg" alt="profile"/>
						</div>
						<div class="col-md-7 col-md-offset-1"/>
						<h1><strong>Bio</strong></h1>
						<p>Hello, my name is Timothy Williams. I am an aspiring web developer.</p>
						<p>My passion is coming up with creative ways to express a message and there is no better way than
							in web developement.</p>
						<p>Thank your for visiting my website. Please view the contact form to request a copy of my resume
							and,
							leave any feed back!</p>
					</div>
				</div>
			</section>


			<!--Portfolio Section-->
			<section id="portfolio" class="bg-info text-center">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<h1 class="section-title"><span><strong>Portfolio</strong></span></h1>
							<img class="img-responsive" src="documentation/images/header_logo.png">
							<h2><strong>DeepDiveTutor</strong></h2>
							<p>Deep Dive Tutor is a web application that gives Deep Dive Bootcamp students the ability to
								reach out to Deep Dive Alumi for tutoring. Students can pair up with tutors based on their needs
								and the strengths of the tutors. This will help with the students success as well as keep the
								curriculum fresh in the alumni's mind.</p>
							<h2><strong>Technical Skills</strong></h2>
							<ul>
								<li>PHP</li>
								<li>mySQL</li>
								<li>HTML5</li>
								<li>CSS3</li>
								<li>Bootstrap
								<li>
								<li>JavaScript</li>
								<li>jQuery</li>
								<li>Angular</li>
							</ul>
						</div>
					</div>
				</div>
			</section>


			<!--contact form-->
			<section id="contact" class="bg-info text-center">
				<div class="container-fluid"
				<h1><strong>Contact</strong></h1>
				<div class="row">
					<div class="col-md-6">
						<iframe frameborder="0" style="border:0"
								  src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ3S4w_T1lIocRKTJ8_AXuQaw&key=AIzaSyAymMZP54-jl0-1p5PwnCqcRzDxqsurxZ8"
								  allowfullscreen></iframe>
					</div>
					<div class="col-md-5">
						<form id="contact" action="php/mailer.php" method="POST">
							<div class="form-group">
								<label for="name">Name <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="name" name="name" placeholder="Name">
								</div>
							</div>
							<div class="form-group">
								<label for="email">Email <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="subject">Subject</label></div>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-pencil" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
							</div>
					</div>
					<div class="form-group">
						<label for="message">Message <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-comment" aria-hidden="true"></i>
							</div>
							<textarea class="form-control" rows="5" id="message" name="message"
										 placeholder="Message (2000 characters max)"></textarea>
						</div>
					</div>

					<!-- Google reCAPTCHA -->
					<div class="g-recaptcha" data-sitekey="----"></div>

					<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
					<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
				</div>
			</section>
		</div>


		<!-- footer -->

		<footer>
			<div class="text-center">
				<p class="foot-content">Copyright &copy; Timothy Williams 2017
					<a href="https://github.com/TimW0614" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
					<a href="https://www.linkedin.com/in/tim-williams0614" target="_blank"><i class="fa fa-linkedin-square"
																													  aria-hidden="true"></i></a>
				</p>
			</div>
		</footer>

	</body>
</html>

