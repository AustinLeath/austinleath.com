<!DOCTYPE HTML>
<html>
	<head>
		<title>Austin Leath | Resume</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keywords" content="HTML,CSS,XML,JavaScript,Web,Engineer,Resume,CSS3,HTML5,Austin,Leath,Lethal,Game,Studios,LethalGameStudios">
		<meta name="description" content="Austin is a young web engineer looking for work. If you would like to contact him send him an email at austinleath18@gmail.com">
		<meta name="author" content="Austin Leath">
		<meta name='copyright' content='Lethal Game Studios'>
		<meta name='owner' content='Austin Leath'>
		<link rel="shortcut icon" href="images/main/favicon.ico" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="home/assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="">Austin Leath | Resume</a></h1>
					<nav id="nav">
						<ul>
							<li>
								<a href="">Other Information</a>
								  <ul>
									 <li><a href="git/github.html">GitHub Code</a></li>
									 <li><a href="tools.html">Development Tools</a></li>
									 <li><a href="rcs/index.html">Rileigh Sayen</a></li>
									 <li><a href="info/aboutdeveloper.html">About Me</a></li>
									 <li><a href="vrsenal/index.html">VRsenal</a></li>
									 <li><a href="#">Return Home</a></li>
								  </ul>
							<!--DIVIDER-->
										 <li>
											<a href="">Legal</a>
											 <ul>
												 <li><a href="legal/apachelicense.html">Apache License</a></li>
												 <li><a href="legal/mitlicense.html">MIT License</a></li>
											 </ul>
											</li>
							 <!--DIVIDER-->
									 <li>
										 <a href="">Streaming</a>
											 <ul>
												<li><a href="streaming/gamesweplay.html">Games We Play</a></li>
 												<li><a href="streaming/streamerswewatch.html">Streamers We Watch</a></li>
 												<li><a href="streaming/streaming.html">Streaming</a></li>
												<li><a href="streaming/form.html">Form</a></li>
											 </ul>
										  </li>
							 <!--DIVIDER-->
										 </li>
									  </ul>
							     </li>
						   <!-- Add Another Button Here -->
						 </ul>
					 </nav>
	  		 </header>
			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Austin Leath | Resume</h2>
							<h1><?php $today = date("F j, Y, g:i a"); echo "Current Time: " . $today; ?></h1>
							<h5 id="cycletxt-1">The following page contains a compiled list of my skills and experiences</h5>
							<h5 id="cycletxt-2">Welcome to my site</h5>
							<h5 id="cycletxt-3">Use the menu at the top of the page to see my entire site</h5>
							<h5 id="cycletxt-4"><?php $today = date("F j, Y, g:i a"); echo "Current Time: " . $today; ?></h5>
						</header>
										<!-- Content -->

							 <?php
								 echo '<h1>This is a PHP script</h1>';
							 ?>

							<?php
							$t = date("H");
								echo "<p>The hour (of the server) is " . $t;
								echo ", and will give the following message:</p>";

								if ($t < "10") {
								    echo "Have a good morning!";
								} elseif ($t < "20") {
								    echo "Have a good day!";
								} else {
								    echo "Have a good night!";
								}
							?>


							<?php
								$a = 1;
								$b = 2;
								$c = 3;
								echo ($a + $b + $c);
							?>

					</div>
				</div>
			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="https://twitter.com/austinzleath" target="_blank" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/AustinZacharyLeath" target="_blank" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.linkedin.com/in/austin-leath-30a39a106/" target="_blank" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="https://www.instagram.com/austin_leath/" target="_blank" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="https://github.com/AustinLeath/main" target="_blank" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="mailto:austinleath18@gmail.com" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; austinleath.com / lethalgamestudios.ddns.net - All rights reserved. Lethal Game Studios&trade;</li>
						<li><a href="legal/apachelicense.html" /a>Apache License</li>
						<li><a href="legal/mitlicense.html" /a>MIT License</li>
						<li><a href="javascript:history.go(-1)">Go Back</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="home/assets/js/jquery.min.js"></script>
			<script src="home/assets/js/jquery.scrolly.min.js"></script>
			<script src="home/assets/js/jquery.dropotron.min.js"></script>
			<script src="home/assets/js/jquery.scrollex.min.js"></script>
			<script src="home/assets/js/skel.min.js"></script>
			<script src="home/assets/js/util.js"></script>
			<script src="home/assets/js/cycletxt.js"></script>
			<!--[if lte IE 8]><script src="home/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="home/assets/js/main.js"></script>

	</body>
</html>
