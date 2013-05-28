<?php
	session_start();
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
<style>
#players form, #loginform{margin-top: 50px;}

</style>
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
		<div id="tab">
			<ul>
				<li><a href="#about">Home</a></li>
				<li><a href="#reg">Schools</a></li>
				<li><a href="#players" >Players</a></li>
				<li><a href="#login" >Login</a></li>
			</ul>
			<div id="about">
			<h2>Welcome</h2>
		<p> Test your knowledge of animals in this fun and addicting quiz<br />
		are you the best in your class? or the best in your school?<br>
		<br>
		Have a go - teachers sign-up the school.<br> 
		-players sign in or register(school has to be registered to begin)
		</p>
			<div id="pics">
			<img src="img/giantpanda.jpg" alt="giant panda" width="120" height="120" title="giant panda">
			<img src="img/mouse.jpg" alt="mouse" width="120" height="120" title="mouse"><br>
			<img src="img/frog.jpg" alt="frog" width="120" height="120" title="tree frog">
			<img src="img/gorillas.jpg" alt="gorillas" width="120" height="120" title="gorilla and little one">
			<img src="img/polar.jpg" alt="polar bear cub" width="120" height="120" title="polar bear cub">
			</div>
		</div>
		<div id="reg">
        <h2><?php
        echo (isset($_SESSION['schooldone']))? $_SESSION['schooldone']: 'Register your school to begin';
        ?></h2>
			<?php
			if(isset($_SESSION['schooldone'])){
				
				}else {echo '<form action="controller/register.php" id="schform" method="POST">
			
				<label for="clName">Classroom</label><br>
				<input type="text" id="clName" name="clName" class="required clName" /><br />
				<label for="school">Name of School </label><br>
				<input type="text" id="school" name="schName" class="required schName" /><br />
				<label for="email">E-mail</label><br>
				<input type="text" id="email" name="email" class="required email" /><br />
				<label for="address">Address</label><br>
				<input type="text" id="address" name="address" class="required address" /><br />
				<label for="city">City</label><br>
				<input type="text" id="city" name="city" class="required city" /><br />
				<label for="phone">Phone</label><br>
				<input type="text" id="phone" name="phone" class="required phone" /><br />

				<input type="submit" value="submit" />
			
				
			</form>';
		}
			?>
			
		</div>
		<div id="players">
			<h2>Player registration</h2>
			<form id="playform" action="controller/register.php" method="post">
				<label for="username">Username</label><br />
				<input type="text" name="username" id="username"><br />
				<label for="login_pass">Password</label><br />
				<input type="password" id="login_pass" name="password" class="required login_pass" /><br />
				<label for="login_pass2">Password again</label><br />
				<input type="password" id="login_pass2" name="password2" class="required login_pass" /><br />
				<label for="clName">Classroom</label><br>
				<input type="text" id="clName" name="user" class="required clName" /><br />
				<br />
				<input type="submit" value="submit" />
			</form>		
		</div>
		
		<div id="login">
				<h2>Player sign in</h2>
			<form id="loginform" action="controller/login.php" method="post">
				<label for="username">Username</label><br />
				<input type="text" id="username" name="username" class="required username"><br />
				<label for="password">Password</label><br />
				<input type="password" id="login_pass" name="password" class="required login_pass" /><br />
				<br />
				<input type="submit" value="submit" />
			</form>		
		
		</div>
		</div>
	</div>
</body>
</html>
<?php unset($_SESSION['schooldone']);?>