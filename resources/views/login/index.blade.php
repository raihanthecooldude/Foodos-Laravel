<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="shortcut icon" href="img/tab-logo.png">
	
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/component.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/animated-bg.css"> <!-- Resource style -->
	
	<link rel="stylesheet" href="css/searchstyle.css"> <!-- Search Result Page style -->
	<link rel="stylesheet" href="css/login.css"> <!-- Login Dialog style -->
	
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	
	<title>Login</title>
	
	{{--<style>--}}
		{{--input[type=text] {--}}
			{{--width: 130px;--}}
			{{--box-sizing: border-box;--}}
			{{--border: 2px solid #ccc;--}}
			{{--#border-radius: 4px;--}}
			{{--font-size: 16px;--}}
			{{--border-top-left-radius: 4px;--}}
			{{--border-top-right-radius: 4px;--}}
			{{--background-color: white;--}}
			{{--/*background-image: url('img/search-icon.png');*/--}}
			{{--background-position: 10px 10px;--}}
			{{--background-repeat: no-repeat;--}}
			{{--padding: 12px 20px 12px 40px;--}}
			{{---webkit-transition: width 0.4s ease-in-out;--}}
			{{--transition: width 0.4s ease-in-out;--}}
		{{--}--}}
		{{----}}
		{{--input[type=text]:focus {--}}
			{{--width: 100%;--}}
	{{----}}
	{{--</style>--}}


</head>

<body class="cd-body">
<div class="cd-header">
	<div class="cd-logo"><!-- <img src="" alt="Logo"> --><a href="index.php"><div class="main-head">Foodo's</div></a></div>
	
	<a class="cd-primary-nav-trigger" href="#0">
		<span class="cd-menu-text"></span><span class="cd-menu-icon"></span>
	</a> <!-- cd-primary-nav-trigger -->
</div>

<nav>
	<ul class="cd-primary-nav">
		<li class="cd-label">Who</li>
		
		<li><a href="#">About Us</a></li>
		
		<li class="cd-label">What</li>
		
		<li><a href="#">Project Page</a></li>
		
		<li class="cd-label">Where</li>
		
		<li><a href="#">Contact Us</a></li>
		
		<li class="cd-label">Follow us</li>
		
		<li class="cd-social cd-facebook"><a href="#0">Facebook</a></li>
		<li class="cd-social cd-instagram"><a href="#0">Instagram</a></li>
		<li class="cd-social cd-dribbble"><a href="#0">Dribbble</a></li>
		<li class="cd-social cd-twitter"><a href="#0">Twitter</a></li>
		
		@if (session('logged') == null)
			<li class="cd-label"><a href="{{route('login.index')}}">Log In</a></li>
		@endif
		@if (session('logged') != null)
			<li class="cd-label"><a href="{{route('admin.index')}}">Administrative Work</a></li>
			<li class="cd-label"><a href="{{route('logout.index')}}">Log Out</a></li>
		@endif
	</ul>
</nav>


{{--<div id="large-header" class="large-header-search">--}}
	{{--<canvas id="demo-canvas"></canvas>--}}
	{{--<h1 class="main-title-search"><b style="color: black; font-style: italic;"> Good Food brings<i style="color: #ffcc00;"><br>Good Luck</i></b></h1>--}}
{{--</div>--}}
<br><br><br><br><br><br>

<div class="cd-main-body cd-main-content box-shadow">
	<br><br><br><br><br><br>
	{{--<div class="cd-container" style="margin-top: 10rem;">--}}
	<form method="post">
		@csrf
		
		<fieldset>
			<h2><b>Login</b></h2>
			<br><br>
			<table align="center">
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr><td><br></td></tr>
				<tr><td><br></td></tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr><td><br></td></tr>
				<tr><td><br></td></tr>
				<tr>
					<td></td>
					<td><input type="submit" name="" value="Submit"></td>
				</tr>
			</table>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</fieldset>
	{{--</form>--}}
	</div>

</div>

</body>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5wGdqrTcgLdOPzMbASsbiHkloxc6v2rE"></script>

<script src="js/TweenLite.min.js"></script>
<script src="js/EasePack.min.js"></script>
<script src="js/rAF.js"></script>
<script src="js/demo-1.js"></script>

<!-- Script for smooth scrolling -->
<script>
	$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});
	
	// Login Dialog
	var modal = document.getElementById('id01');
	
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>

</body>
</html>