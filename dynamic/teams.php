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
            <a href="#" class="logo"><?php echo $_GET['game']; ?></a>
        </header>
        <!-- Navbar -->
        <nav id="nav">
            <ul class="links">
                <li><a href="/">Home</a></li>
            </ul>
        </nav>
        <!-- Regions -->
        <div id="main">
            <!-- Filters -->
            <section class="post">
                <form method="post">
                    <select name="region" id="select-region">
                        <option value="none">Select Region</option>
                        <option value="na">North America</option>
                        <option value="sa">South America</option>
                        <option value="eu">Europe</option>
                    </select>
                    <input id="submit-filters" type="button" value="Set change" class="primary"/>
                </form>
            </section>
            <section>
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <th>Team</th>
                            <th>Schedule</th>
                            <th>Looking for</th>
                        </thead>
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
    </body>                        
    <div>Icons made by <a href="https://www.flaticon.com/<?=_('authors').'/'?>freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 		    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 		    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    <div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    <div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
</html>