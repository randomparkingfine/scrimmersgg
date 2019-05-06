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
					<li><a href="/about">About</a></li>
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
							<h2>Bio</h2>
							<?php 
							if($user_data['user_bio'] != null) {
								echo htmlspecialchars($user_data['user_bio']);
							}
							else {
								echo '<p>User has no bio</p>';
							}
							?>
							<h2>Links</h2>
							<?php 
							if($user_data['user_links']) {
								echo htmlspecialchars($user_data['user_links']);
							}
							else {
								echo '<p>No links here ;O;</p>';
							}
							?>
						</div>
						<div class ="col-6 col-12-small">
							<h2>Games</h2>
							<?php 
							if($user_data['user_games'] != null) {
								echo htmlspecialchars($user_data['user_games']);
							}
							else {
								echo '<p>No games found here ;-;</p>';
							}
							?>
						</div>
					</div>
				</section>
				<section id="user-schedule" class="post">
					<header>
						<h2>Available Times</h2>
					</header>
				</section>
			</div>
			
		</div>
		
		<footer id="footer">
			<section>
				<form method="post" action="#">
					<div class="fields">
						<div class="field">
							<h2 id="response">Send you're message here</h2>
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="3"></textarea>
						</div>
					</div>
					<ul class="actions">
						<li><input type="submit" id ="msg" value="Send Message" /></li>
					</ul>
				</form>
			</section>
		</footer>
		<!-- Scripts -->
		<script src="/assets/js/jquery.min.js"></script>
		<script src="/assets/js/jquery.scrollex.min.js"></script>
		<script src="/assets/js/jquery.scrolly.min.js"></script>
		<script src="/assets/js/browser.min.js"></script>
		<script src="/assets/js/breakpoints.min.js"></script>
		<script src="/assets/js/util.js"></script>
		<script src="/assets/js/main.js"></script>
	</body>                        
</html>


<!-- <div class = "row"> -->
<!-- 	 -->
<!-- </div> -->
