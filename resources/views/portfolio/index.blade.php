@extends('portfolio.layout')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/portfolio.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/412a293917.js" crossorigin="anonymous"></script>
@endsection

@section('nav')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
	<div class="navbar-collapse justify-content-center" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="#about">About Me <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#skills">Skills</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#portfolio">Portfolio</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#contact">Contact Me</a>
			</li>
		</ul>
	</div>
</nav>
@endsection

@section('content')
<div class="container p-4 d-flex justify-content-center">
	<div>
		<img class="imageHover" src="{{ asset('image/dp.jpg') }}">
	</div>
</div>

<div class="container text-center">
	<div>
		<h1>Hi! I'm Gerald Jay Pasia Timtiman.</h1><br>
		<p class="pb-3">ASPIRING FULL STACK WEB DEVELOPER</p>
		<a href="https://www.fb.com/tim.timtiman/" class="text-decoration-none"><i class="fab fa-facebook-square fa-4x px-4"></i></a>
		<a href="https://www.linkedin.com/in/g-timtiman/"><i class="fab fa-linkedin fa-4x px-4"></i></a>
		<a href="https://github.com/gtim04/"><i class="fab fa-github-square fa-4x px-4"></i></a>
		<a href="https://stackoverflow.com/users/12824646/"><i class="fab fa-stack-overflow fa-4x px-4"></i></a>
	</div>
</div>

<div class="container text-center pt-5" id="about">
	<h3 class="mt-2">About Me</h3>
	<hr class="divider">
	<h4>Education, Training & Certification</h4>
	<div class="main-timeline">
		<!-- start experience section-->
		<div class="timeline">
			<div class="icon"></div>
			<div class="date-content">
				<div class="date-outer">
					<span class="date">
						<span class="year">2019</span>
					</span>
				</div>
			</div>
			<div class="timeline-content">
				<h5 class="title">Bachelor of Science in Information & Technology</h5>
				<p class="description">
					University of The East - Manila, City PH
				</p>
			</div>
		</div>
		<!-- end experience section-->

		<!-- start experience section-->
		<div class="timeline">
			<div class="icon"></div>
			<div class="date-content">
				<div class="date-outer">
					<span class="date">
						<span class="month">6 Months</span>
						<span class="year">2019</span>
					</span>
				</div>
			</div>
			<div class="timeline-content">
				<h5 class="title">Customer Service Representative</h5>
				<p class="description">
					AFNI Philippines Inc. - Quezon, City PH
				</p>
			</div>
		</div>
		<!-- end experience section-->

		<!-- start experience section-->
		<div class="timeline">
			<div class="icon"></div>
			<div class="date-content">
				<div class="date-outer">
					<span class="date">
						<span class="month">1 week</span>
						<span class="year">2019</span>
					</span>
				</div>
			</div>
			<div class="timeline-content">
				<h5 class="title">CCNA V3 200-125 Bootcamp</h5>
				<p class="description">
					Nexus IT Training Center - Manila, City PH
				</p>
			</div>
		</div>
		<!-- end experience section-->

		<!-- start experience section-->
		<div class="timeline">
			<div class="icon"></div>
			<div class="date-content">
				<div class="date-outer">
					<span class="date">
						<span class="year">2019</span>
					</span>
				</div>
			</div>
			<div class="timeline-content">
				<h5 class="title">MTA: Introduction to Programming Using HTML and CSS - Certified</h5>
				<p class="description text-center">
					Earners of the Microsoft Technology Associate: Introduction to Programming Using HTML and CSS validates the skills and knowledge to recognize and write syntactically correct HTML and CSS, structure data using HTML elements, and create and apply styles using CSS. Earners are expected to have at least 100 hours of instruction or hands-on experience with HTML and CSS, be familiar with their features and capabilities, and understand how to write, debug, and maintain well-formed HTML and CSS code.
				</p>
			</div>
		</div>
		<!-- end experience section-->

		<!-- start experience section-->
		<div class="timeline">
			<div class="icon"></div>
			<div class="date-content">
				<div class="date-outer">
					<span class="date">
						<span class="month">6 months</span>
						<span class="year">2015</span>
					</span>
				</div>
			</div>
			<div class="timeline-content">
				<h5 class="title">Reports Analyst Intern</h5>
				<p class="description">
					Alorica Philippines Inc. - Makati, City PH
				</p>
			</div>
		</div>
		<!-- end experience section-->

		<!-- start experience section-->
		<div class="timeline">
			<div class="icon"></div>
			<div class="date-content">
				<div class="date-outer">
					<span class="date">
						<span class="month">4 years</span>
						<span class="year">2015</span>
					</span>
				</div>
			</div>
			<div class="timeline-content">
				<h5 class="title">Subject Matter Expert</h5>
				<p class="description">
					Alorica Philippines Inc. - Makati, City PH
				</p>
			</div>
		</div>
		<!-- end experience section-->
	</div>
</div>

<div class="container text-center pt-5" id="skills">
	<h3 class="mt-2">Skills</h3>
	<hr class="divider">
	<h4 class="p-3">HTML5 <i class="fab fa-html5"></i></h4>
	<div class="progress">
		<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
	<h4 class="p-3">CSS <i class="fab fa-css3"></i></h4>
	<div class="progress">
		<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
	<h4 class="p-3">PHP <i class="fab fa-php"></i></h4>
	<div class="progress">
		<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
	<h4 class="p-3">JavaScript <i class="fab fa-js-square"></i></h4>
	<div class="progress">
		<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 70%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
	<h4 class="p-3">MySQL <i class="fas fa-book"></i></h4>
	<div class="progress">
		<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 73%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
	<h4 class="p-3">Laravel <i class="fab fa-laravel"></i></h4>
	<div class="progress">
		<div class="progress-bar progress-bar-striped bg-dark" role="progressbar" style="width: 15%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
</div>

<div class="container text-center pt-5" id="portfolio">
	<h3 class="mt-2">Portfolio</h3>
	<hr class="divider">
	<img src="{{ asset('image/kenyo.png') }}" class="image img-fluid rounded">
	<p>Reservation and Billing System created for educational purposes.</p>
	<a href="https://reservationandbilling.000webhostapp.com/index.php" target="_blank"><h5>Visit!</h5></a>
</div>

<div class="container text-center pt-5" id="contact">
	<h3 class="mt-2">Contact Me</h3>
	<hr class="divider">
	<h4>Gerald Jay Pasia Timtiman</h4>
	<p>ADDRESS: SITIO LUBIGAN BRGY. PLAZA ALDEA TANAY, RIZAL</p>
	<p>CONTACT #: +63 917 614 2429</p>
	<p>EMAIL: GERALD.TIMTIMAN@GMAIL.COM</p>

	<form id="form" class="p-3 topBefore bg-dark">
		<input id="name" type="text" placeholder="NAME">
		<input id="email" type="text" placeholder="E-MAIL">
		<textarea id="message" type="text" placeholder="MESSAGE"></textarea>
		<input id="submit" type="submit" value="GO!">
	</form>

</div>
@endsection

@section('foot')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="#">Copyright © 2020 Gerald Jay P. Timtiman <span class="sr-only">(current)</span></a>
			</li>
		</ul>
	</div>
</nav>
@endsection