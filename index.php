<html>
<head>
	<title>Evan Duffy's Video Server</title>
	<!-- Various bootstrap links here -->

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	
	<!-- Dark and Light themes-->
	<link rel="stylesheet" type="text/css" href="/css/new.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<!-- jquery for switching themes-->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

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
        <input class="form-control" placeholder="Search" id="search-box">
	</div>
	<div class="container">
		<p style="text-align:center"><br><br></p>
		<h2 class="mainText">
		<?php 
                $dir = "/Storage/video/";
                $files = scandir($dir) or die ("FUCK something went wrong loading the files...");
                foreach ($files as $file){
                        if ($file != "index.php" && $file != "." && $file != ".." && $file != ".htaccess" && $file != "style.css")
                            echo "<center><a href='video/" . $file . "'><div class='well hoverwell'><center><div class='title'>" . str_replace(".mp4", "", str_replace(".mkv", "", str_replace(".avi", "", $file))) . "</div></center></div></a></center>";
                        }
            ?>
		</h2>
	</div>
	<center class="mainText" style="font-size:12pt">Site Made By Evan Duffy<br></center>
	<div class="myfooter">
        <p class="mainText"><?php echo date('F Y') ?></p>
    </div>
    <p class="version">Version 1.2</p>
    <p class="version">Client IP: <?php echo $_SERVER['REMOTE_ADDR'] ?> </p>
</body>
<script type="text/javascript" src="js/search.js"></script>
</html>
<!-- CHANGELOG -->
<!-- 1.0 Initial release, everything works and I'm happy -->
<!-- 1.1 Made things fancier -->
<!-- 1.2 Made things slightly less gabage and set it up for the other computer -->
