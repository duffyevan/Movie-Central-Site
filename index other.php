<html>
<head>
	<title>Evan Duffy's Video Server</title>
	<!-- Various bootstrap links here -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	
	<!-- Dark and Light themes-->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<!-- jquery for switching themes-->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

</head>
	<div class="container">
		<center><img style="width:80%" src="resources/movie.png" style="width:50%"></center>
		<center><h1>Welcome to Movie Central</h1></center>
		<h2>
		<?php 
                $dir = "/var/www/html/video/";
                $files = scandir($dir) or die ("FUCK something went wrong loading the files...");
                foreach ($files as $file){
			//$moviename = str_replace(".mp4","",$file);
			//$htmlcode = '<center><div class="well"><center><a class="red" href="video/' . $file . '">' . $filename . '</a></center></div></center>';
                 	$htmlcode = "Neeg";
			//if ($file != "index.php" && $file != "." && $file != ".." && $file != ".htaccess" && $file != "style.css"){
                        	echo $htmlcode;
                        //}
		}
                ?>
		</h2>
	</div>
	<center style="font-size:12">Site Made By Evan Duffy<br>(<a href="https://www.reddit.com/user/DuffyEvan/">duffyevan</a> on reddit)</center>
	<p style="color:#444444">Version 2.0</p>
</body>
</html>
<!-- CHANGELOG -->
<!-- 1.0 Initial release -->
<!-- 1.1 Added BS Wells to put each video in and also made it so on first load of this page it creats any uncreated thumbnails -->
<!-- 1.2 Added the navbar -->
<!-- 2.0 Completely overhauled the site to use mySQL instead of embedding descriptions within the filename -->
