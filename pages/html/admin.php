<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="/assets/css/noscript.css" /></noscript>
	</head>
	<body>
		<!-- Header -->
		<header id="header">
			<a href="#" class="logo">ADMIN</a>
		</header>
		<!-- Navbar  -->
		<nav id="nav">
			<ul class="links">
				<li><a href="/logout">Logout</a></li>
			</ul>
		</nav>
		<!-- Regions -->
		<div id="main">
			<!-- Filters -->
			<section><!--class="post"-->
				<?php
                // Grabbing some data about our database
                require __DIR__ . '/../../vendor/autoload.php';
                require __DIR__ . '/../../server/db.php';
                use Medoo\Medoo;
                $agg = new Medoo($cleardb_config);

                $count_users = $agg->query(
                    "SELECT COUNT(username) FROM users;"
                )->fetchAll()[0][0];
                echo '<p>There are <em>' . $count_users . '</em> users signed up</p>';

                // how many users don't have a schedule setup yet?
                $count_schedule = $agg->query(
                    "SELECT COUNT(user_schedule) FROM users WHERE  user_schedule IS NOT NULL"
                )->fetchAll()[0][0];
                echo '<p>' . $count_schedule . ' users have a schedule setup</p>';

                // Finally how many admins do we have
                $count_admins = $agg->query(
                    "SELECT COUNT(username) FROM admins;"
                )->fetchAll()[0][0];
                echo "<p>Out of <em>$count_users</em> users there are <em>$count_admins</em> admins";
				?>

				<form method="post">
				<input type="text" id="search"/>
				<br>
					<input id="filter" type="button" value="Set change" class="primary"/>
				</form>
				<!-- Some data about our table -->
				<div class="table-wrapper">
					<table id = "filteredTeams">
						<thead>
							<th>Username</th>
							<th>Email</th>
							<th>Options</th>
						</thead>
						<tbody id ="results">
							
						</tbody>
						
					</table>
				</div>
			</section>
		</div>
		<!-- Scripts -->
		<script src="/assets/js/jquery.min.js"></script>
		<script src="/assets/js/jquery.scrollex.min.js"></script>
		<script src="/assets/js/jquery.scrolly.min.js"></script>
		<script src="/assets/js/browser.min.js"></script>
		<script src="/assets/js/breakpoints.min.js"></script>
		<script src="/assets/js/util.js"></script>
		<script src="/assets/js/main.js"></script>
		<script src = "/pages/js/admin.js"></script>
	</body>
	<div>Icons made by <a href="https://www.flaticon.com/<?=_('authors').'/'?>freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 		    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 		    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
	<div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
	<div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
</html>
