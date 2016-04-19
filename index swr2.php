<html>
<head>
    <title>Evan Duffy's Video Server</title>
    <!-- Various bootstrap links here -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    
    <!-- Dark and Light themes-->
    <link rel="stylesheet" type="text/css" href="../../SWRstyle.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- jquery for switching themes-->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

</head>

<body>
    <ul class="pager left" style="padding-left: 50px">
        <li><a href="../../" class="red">&#x2190 Back to Movie Central</a></li>
    </ul>    
    <div class="container">
      <center><img style="width:80%" src="../../resources/rebels.png"></center>
      <center><h1>Star Wars Rebels<br>Season 2</h1></center>
      <p style="text-align:center"><br><br></p>
      <h2>
          <?php 
          $dir = "/var/www/html/video/Star Wars Rebels Season 2/";
          $files = scandir($dir) or die ("FUCK something went wrong loading the files...");
          foreach ($files as $file){
            if ($file != "index.php" && $file != "." && $file != ".." && $file != ".htaccess" && $file != "style.css")
                echo "<center><div class='well' style='width: 60%'><center><a class='red' href='" . $file . "'>" . str_replace(".mp4", "", str_replace(".mkv", "", str_replace(".avi", "", $file))) . "</a></center></div></center>";
        }
        ?>
    </h2>
</div>
<center style="font-size:12">Site Made By Evan Duffy<br>(<a href="https://www.reddit.com/user/DuffyEvan/">duffyevan</a> on reddit)</center>
<p style="color:#444444">Version 1.0</p>
</body>
</html>
<!-- CHANGELOG -->
<!-- 1.0 Initial release, everything works, I'm happy -->
