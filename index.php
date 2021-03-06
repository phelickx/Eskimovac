<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div id="hero">
	<div class="load"></div>
	<div class="content">
		<div class="header">
			<div class="toggle-btn" onclick="myFunction();">
				<span></span>
				<span></span>
				<span></span>
			</div>

			<div class="logo">
				<img src="./img/esk_logo.png" class="logo" alt="Logo">
			</div>
			
			<nav id="nav">
				<ul>
					<li><a href="#hero">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#services">Join Us</a></li>
				</ul>
			</nav>
		</div>

		<div class="hero-text">
			<h1>Eskimo Vacation</h1>
			<p>Win $10,000 worth vacation from <br> ESKIMO Token distribution Vacation contest</p>
			<div class="hero-icon" style="padding: 20px;">
				<a href="" class="fav"><i class="fa fa-telegram"></i></a>
				<a href="" class="fav"><i class="fa fa-twitter"></i></a>
			</div>
			<a href="#features" type="button" class="cta">TOUR</a>
		</div>
			
	</div>
</div>

<section id="features">
	<div class="title-text">
		<p>CRITERIA</p>
		<h1>TO PARTICIPATE</h1>
	</div>

	<div class="feature-box">
		<div class="feature-con">
			<h1>In order to qualify to win the Destination Vacation Contest:</h1>
			<div class="feature-desc">
				<div class="feature-icon">
					<i class="fa fa-hand-o-right"></i>
				</div>
				<div class="feature-text">
					<p>You must hold at least 0.1ETH worth of ESKIMO.</p>
					
				</div>
			</div>
			<div class="feature-desc">
				<div class="feature-icon">
					<i class="fa fa-hand-o-right"></i>
				</div>
				<div class="feature-text">
					<p>Only holders that have at least 0.1 ETH worth of ESKIMO will be able to vote.</p>
				</div>
			</div>
			<div class="feature-desc">
				<div class="feature-icon">
					<i class="fa fa-hand-o-right"></i>
				</div>
				<div class="feature-text">
					<p>You must be part of our Telegram group, follow us on Twitter and Instagram for at least three months.</p>
				</div>
			</div>
		</div>
		<div class="feature-img"><img src="./img/countdown-img.png" alt=""></div>
	</div>
</section>

<section id="about">
	<div class="title-text">
		<p>ABOUT</p>
		<h1>ESKIMO TOKEN</h1>
	</div>
	<div class="about-box">
		<div class="about-img"><img src="./img/esk_logo.png" alt=""></div>
		<div class="feature-con">
			<!-- <h1>In order to qualify to win the Destination Vacation Contest:</h1> -->
			<div class="about-desc">
				<div class="about-text">
					<p>ESKIMO is a peer-to-peer cryptocurrency with built-in Automated Rewards Farming (ARF) technology. Just hold ESKIMO in your wallet, and watch your balance grow!</p>
					<br>
					<p>Participate in the ESKIMO Token Contest and get an opportunity to win $10,000 Worth Vacation to a location in the world
					that the community will vote and determine. Don???t miss out!</p>
				</div>
			</div>
		</div>
		
	</div>
</section>


<div class="footer">
	<div class="container" class="text-white text-center">
		<div class="row">
				<div class="footer-icon" style="padding: 20px;">
					<a href="" class="fav"><i class="fa fa-telegram"></i></a>
					<a href="" class="fav"><i class="fa fa-twitter"></i></a>
				</div>
				<div class="last" style="font-size: 14px; color: #e5c543;">
					&copy 2021 All Right Reserved,<br><a href="#" style="color: gray;">EskimoVacation.com</a></div>
			</div>
		</div>
	</div>
</div>


<script>
	function myFunction(){

		var navbar = document.getElementById('nav');
		navbar.classList.toggle('show');

	}
</script>
</body>
</html>
