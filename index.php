<html>
<head>
	<title>Evan Duffy's Video Server</title>
	<!-- Various bootstrap links here -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	
	<!-- Dark and Light themes-->
	<link rel="stylesheet" type="text/css" href="/css/new.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<!-- jquery for switching themes-->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

</head>
<body>
	<div class="header">
		<h1 class="headerText">Welcome to Movie Central</h1>
		<small>
				<?php
					$mult=100;
					echo round(disk_free_space("/Storage/video/")/(1024*1024*1024)*$mult)/$mult . " GB Free On The Disk In Use"
				?>
		</small>
	</div>
	<div class="container">
		<p style="text-align:center"><br><br></p>
		<h2 class="mainText">
		<?php 
                $dir = "/Storage/video/";
                $files = scandir($dir) or die ("FUCK something went wrong loading the files...");
                foreach ($files as $file){
                        if ($file != "index.php" && $file != "." && $file != ".." && $file != ".htaccess" && $file != "style.css")
                            echo "<center><a href='video/" . $file . "'><div class='well'><center>" . str_replace(".mp4", "", str_replace(".mkv", "", str_replace(".avi", "", $file))) . "</center></div></a></center>";
                        }
            ?>
		</h2>
	</div>
	<center class="mainText" style="font-size:12">Site Made By Evan Duffy<br></center>
	<div class="myfooter">
        <p class="mainText">December 2018</p>
    </div>
    <p class="version">Version 1.2</p>
</body>
</html>
<!-- CHANGELOG -->
<!-- 1.0 Initial release, everything works and I'm happy -->
<!-- 1.1 Made things fancier -->
<!-- 1.2 Made things slightly less gabage and set it up for the other computer -->
