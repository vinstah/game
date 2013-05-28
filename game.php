<?php 
header('Location: gba/index.html');
exit();
session_start();
	isset($_SESSION['username'])? $username =  $_SESSION['username'] : header('Location:default.php');
unset($_SESSION['username']);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Animal Quiz</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <!-- on live page use google CDN for scripts -->
  <link rel="styleseet" href="css/reset.css" media="screen" />
  <link rel="stylesheet" href="css/grid.css" media="screen" />
  <link rel="stylesheet" href="css/default.css" media="screen" />
	<link rel="stylesheet" href="css/smoothness/jquery-ui.css">
	<!-- jquery offline -->
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	
  <!-- JQuery Online--  >
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" media="screen" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  
  <!--validator -->
	<script type="text/javascript" src="js/validate.js"></script>
	<!-- Jquery ajaxForm() 
	<script src="http://malsup.github.com/jquery.form.js"></script>-->
	<!-- overlay -->
	
	
	<!--<script type='text/javascript'   src='http://getfirebug.com/releases/lite/1.2/firebug-lite-compressed.js'><script>-->
  <script type="text/javascript" src="js/js.js"></script>

<style type="text/css">
.hidden{visibility:hidden;}
</style>
<script>

</script>
</head>
<body>

<!-- header of page -->
	<div id="header">
		<h1>Animals Quiz</h1>
		<span>What things do you know about animals?</span>
	</div>
<!-- start main wrapper div -->      
	<div id="main">
	<!--	<div style="text-align:center;margin-left:5%;width:90%;" ><a href="#" class="click">click me</a>
        	<marquee id="scroll" class="hidden">I'll go this way &lt; ---</marquee>
		</div>-->
		
	<!-- the navigation tab starts-->	
		<div id="game">
		<div id="welcome">
			<h2>Welcome to the game, <?php echo (isset($username))?$username:'Who are you?'; ?></h2>
			
		</div>
			<div id="pics">
			<img src="img/giantpanda.jpg" alt="giant panda" width="120" height="120" title="giant panda">
			<img src="img/mouse.jpg" alt="mouse" width="120" height="120" title="mouse"><br>
			<img src="img/frog.jpg" alt="frog" width="120" height="120" title="tree frog">
			<img src="img/gorillas.jpg" alt="gorillas" width="120" height="120" title="gorilla and little one">
			<img src="img/polar.jpg" alt="polar bear cub" width="120" height="120" title="polar bear cub">
			</div>
		</div>
		
	</div>
</body>
</html>
