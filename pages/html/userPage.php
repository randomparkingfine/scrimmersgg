<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="wrapper">
		
			<header id="header">
				<a href="index.html" class="logo">User Page</a>
			</header>
			
			<!-- Navbar -->
			<nav id = "nav">
				<ul class="links">
					<li><a href="/">Home</a></li>
					<li class="active"><a href="/about">About</a></li>
					<?php
					require __DIR__ . '/../../server/navbar.php';
					if(!empty($_SESSION)) {
						if(activeUser()) {
							loggedInNav();
						}
						else {
							defaultNav();
						}
					}
					else {
						defaultNav();
					}
					?>
				</ul><ul class="icons">
					<li><a href="https://github.com/smolltucc/scrimmersgg" class="icon fa-github"><span class="label">Github</span></a></li>
				</ul>
			</nav>
			<div id = "main">
				<section class = "post">
					<div class = "row">
						<div class ="col-6 col-12-small">
							<h2>User Bio</h2>
							<p>Felis sagittis eget tempus primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Magna sed etiam ante ipsum primis in faucibus vestibulum.</p>
							<h2>User Links</h2>
							<ul class="icons">
								<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
								<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							</ul>
						</div>
						<div class ="col-6 col-12-small">
							<h2>User Games</h2>
							<ul>
								<li>Dolor pulvinar etiam.</li>
								<li>Sagittis lorem eleifend.</li>
								<li>Felis feugiat dolore viverra.</li>
								<li>Dolor pulvinar etiam.</li>
							</ul>
							<h2>User Team</h2>
							<p>Felis sagittis eget tempus primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Magna sed etiam ante ipsum primis in faucibus vestibulum.</p>
						</div>
					</div>
				</section>
			</div>
			
		</div>
		
		<footer id="footer">
			<section>
				<form method="post" action="#">
					<div class="fields">
						<div class="field">
							<label for="name">Name</label>
							<input type="text" name="name" id="name" />
						</div>
						<div class="field">
							<label for="email">Email</label>
							<input type="text" name="email" id="email" />
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="3"></textarea>
						</div>
					</div>
					<ul class="actions">
						<li><input type="submit" value="Send Message" /></li>
					</ul>
				</form>
			</section>
			<section class="split contact">
				<section class="alt">
					<h3>Address</h3>
					<p>1234 Somewhere Road #87257<br />
					Nashville, TN 00000-0000</p>
				</section>
				<section>
					<h3>Phone</h3>
					<p><a href="#">(000) 000-0000</a></p>
				</section>
				<section>
					<h3>Email</h3>
					<p><a href="#">info@untitled.tld</a></p>
				</section>
				<section>
					<h3>Social</h3>
					<ul class="icons alt">
						<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
					</ul>
				</section>
			</section>
		</footer>

	<!-- Copyright -->
		<div id="copyright">
			<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
		</div>

</div>
		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
	</body>                        
</html>


<!-- <div class = "row"> -->
<!-- 	 -->
<!-- </div> -->
