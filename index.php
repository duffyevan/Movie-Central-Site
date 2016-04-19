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
		<center><img style="width:80%" src="resources/movieT.png" style="width:50%"></center>
		<center><h1>Welcome to Movie Central</h1></center>
		<p style="text-align:center"><br><br></p>
		<h2>
		<?php 
                $dir = "/var/www/html/video/";
                $files = scandir($dir) or die ("FUCK something went wrong loading the files...");
                foreach ($files as $file){
                        if ($file != "index.php" && $file != "." && $file != ".." && $file != ".htaccess" && $file != "style.css")
                            echo "<center><div class='well' style='width: 60%'><center><a class='red' href='video/" . $file . "'>" . str_replace(".mp4", "", str_replace(".mkv", "", str_replace(".avi", "", $file))) . "</a></center></div></center>";
                        }
            ?>
		</h2>
	</div>
	<center style="font-size:12">Site Made By Evan Duffy<br>(<a href="https://www.reddit.com/user/DuffyEvan/">duffyevan</a> on reddit)</center>
	<div class="myfooter">
        <a href="https://www.reddit.com/user/DuffyEvan/"><img src="http://vectorlogofree.com/wp-content/uploads/2014/07/49434-reddit-logo-icon-vector-icon-vector-eps.png" class="link-icon"></a>
        <a href="https://github.com/duffyevan"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Octicons-mark-github.svg/2000px-Octicons-mark-github.svg.png" class="link-icon"></a><br>
        <p>March 2016</p>
    </div>
    <p class="version" style="color:#444444">Version 1.1</p>
</body>
</html>
<!-- CHANGELOG -->
<!-- 1.0 Initial release, everything works and I'm happy -->
<!-- 1.1 Made things fancier -->