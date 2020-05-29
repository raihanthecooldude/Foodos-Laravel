
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="shortcut icon" href="assets/tab-logo.png">
	
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="assets/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="assets/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="assets/component.css"> <!-- Resource style -->
	<link rel="stylesheet" href="assets/animated-bg.css"> <!-- Resource style -->
	
	<link rel="stylesheet" href="assets/login.css"> <!-- Login Dialog style -->
	
	<script src="assets/modernizr.js"></script> <!-- Modernizr -->
	
	<title>Foodo's</title>
</head>
<body class="cd-body">
<div class="cd-header">
	<div class="cd-logo"><!-- <img src="" alt="Logo"> --><a href="/"><div class="main-head">Foodo's</div></a></div>
	
	<a class="cd-primary-nav-trigger" href="#0">
		<span class="cd-menu-text"></span>
		<span class="cd-menu-icon"></span>
	</a><!-- cd-primary-nav-trigger -->
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
		
		<li class="cd-label"><a href="admin/administrative-work">Administrative Work</a></li>
		<%
		if(uname == "")
		{ %>
		<li class="cd-label" onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer;">Log In</li>
		<%
		}
		
		%>
		
		<li class="cd-label"><a href="/logout">Log Out</a></li>
		<!--
		<li class="cd-label"><a href="/signup">Sign UP!</a></li>
		-->
		
		<div id="id01" class="modal">
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<form class="modal-content animate" action="/login" method="POST">
				<div class="img-container">
					<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
				</div>
				<div class="container">
					<label><b>Username</b></label>
					<input type="text" placeholder="Enter Username" name="un" required class="usernames">
					<br>
					<label><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="pw" required class="passwords">
					<br>
					<button type="submit">Login</button><br>
					<!-- <label>
					  <input type="checkbox" checked="checked" name="remember"> Remember me
				   </label> -->
				</div>
				
				<div class="container" style="background-color:#f1f1f1">
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
				</div>
			</form>
		</div>
	</ul>
</nav>

<div id="large-header" class="large-header">
	<canvas id="demo-canvas"></canvas>
	<h1 class="main-title" style="font-family: Calibri;"><b> Always say <i style="color: #ffcc00;">Hello</i> to Food</b></h1>
	<h1 class="">
		<form name = "index" method="Post">
			<select name="area" class="area-bar">
				<option value="Dhaka">Area</option>
				<% for(var i = 0; i < area.length; i++){ %>
				<option value="<%=area[i].area_name%>"><%= area[i].area_name %> </option>
								
								<% } %>
							</select>

							<select name="food" class="food-bar" required>
								<option value="">Food Name</option>
								<% var x = 'hello';
								for(var i = 0; i < food.length; i++)
								{
									if (food[i].food_name != x)
									{
								%>
									<option value="<%=food[i].food_name%>"><%= food[i].food_name %> </option>
								<%
									x = food[i].food_name;
									}
								}
								%>
							</select>
							<input type="number" name="price" placeholder="Price" class="price-bar price-text" required>
							<button type="submit" name="submit" class="search-button">Search</button>
						</form>
					</h1>
				</div>
				<br><br><br>


<!-- Main Body start after the cover photo to upside of footer -->

<!-- <body class="cd-body"> -->

<!-- Section 1 (Tell The World About Yourself) -->
	
	<!-- <main id="more" class="cd-main-content" style="margin-top: 8rem;"> -->
	<div class="cd-main-body cd-main-content box-shadow">
	


<!-- Section 2 (The Amazing People Behind This) -->
		
		<!--<div class="cd-container" style="margin-top: 10rem;">-->
			<!--<h4 style="color: rgb(212,175,55);">Who We Are</h4>-->
			<!--<h1 style="font-family: Calibri;">The Amazing People Behind This</h1>-->
			<!--<p style="line-height: 1.6; font-family: Calibri;"><br>There are 5 amazing people of <span style="font-weight: bold;">American International University - Bangladesh (AIUB)</span> from <span style="font-weight: bold; font-style: italic;">Bangladesh</span> who made this website.<br>&nbsp</p>-->
			<!---->
			<!--<div class="cd-container-people">-->
				<!--<div class="cd-container-people-clmn-1">-->
						<!--<img src="img/raihan.jpg">-->
					<!--<div class="cd-container-people-info">-->
						<!--<h4>The Cool Dude</h4>-->
						<!--<h2 style="font-weight: bold;">Raihan Gafur</h2>-->
						<!--<p style="line-height: 1.6; font-family: Calibri; font-size: 16px; color: black;"><br>A Jack of all Trades guy who loves being pampered.<br>&nbsp</p>-->
					<!--</div>-->
				<!--</div>-->
				<!--<div class="cd-container-people-clmn-2">-->
						<!--<img src="img/tishan.jpg">-->
					<!--<div class="cd-container-people-info">-->
						<!--<h4>The Leonider</h4>-->
						<!--<h2 style="font-weight: bold;">Tawhidur R Tishan</h2>-->
						<!--<p style="line-height: 1.6; font-family: Calibri; font-size: 16px; color: black;"><br>A hardcore programmer who thinks only programming is life and the rest is "Babaji ka Thullu".</p>-->
					<!--</div>-->
				<!--</div>		-->
				<!--<div class="cd-container-people-clmn-3">-->
						<!--<img src="img/nashif.jpg">-->
					<!--<div class="cd-container-people-info">-->
						<!--<h4>The Vella Illa Bhai</h4>-->
						<!--<h2 style="font-weight: bold;">Nashif Iftekhar</h2>-->
						<!--<p style="line-height: 1.6; font-family: Calibri; font-size: 16px; color: black;"><br>A senti khor Dhanush fan who always thinks about the future but do nothing for the future.</p>-->
					<!--</div>-->
				<!--</div>-->
			<!--</div>-->
		<!--</div>-->
		<!--<div class="cd-container" style="margin-top: 3rem;">-->
			<!--<div class="cd-container-people">-->
				<!--<div class="cd-container-people-clmn-3">-->
						<!--<img src="img/faysal.jpg">-->
					<!--<div class="cd-container-people-info">-->
						<!--<h4>The Designer Nazi</h4>-->
						<!--<h2 style="font-weight: bold;">Najib Faysal</h2>-->
						<!--<p style="line-height: 1.6; font-family: Calibri; font-size: 16px; color: black;"><br>That person who watches web series all the time and fascinate about that type of "Ishq Wala Love".</p>-->
					<!--</div>-->
				<!--</div>-->
				<!--<div class="cd-container-people-clmn-3">-->
						<!--<img src="img/mili.jpg">-->
					<!--<div class="cd-container-people-info">-->
						<!--<h4>Beauty with Brain</h4>-->
						<!--<h2 style="font-weight: bold;">Mahima Mili</h2>-->
						<!--<p style="line-height: 1.6; font-family: Calibri; font-size: 16px; color: black;"><br>The girl who can code also.<br>&nbsp<br>&nbsp<br>&nbsp</p>-->
					<!--</div>-->
				<!--</div>-->
			<!--</div>-->
		<!--</div>-->
	</div>


<!-- Section 3 (We Like To Write) -->
	
		<!-- <div class="cd-container" style="margin-top: 10rem;">
			<h4 style="color: rgb(212,175,55);">Last Post</h4>
			<h1>We Like to Write</h1>

			
			<div class="cd-container-home-blog">
				<div class="cd-container-blog-clmn-1">
						<img src="http://demo.select-themes.com/stockholm15/wp-content/uploads/2014/06/office3.jpg">
				</div>
				<div class="cd-container-blog-clmn-2">
					<div class="cd-container-blog-info">
						<h4>14 September 2014</h4>
						<h2>Change Your Space</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						
						<a href="#"><div class="read-more-btn-small">Read</div></a>
					</div>
				</div>
			</div>
		</div>
		
			<div class="cd-container-blog-read-posts">
				<a href="#"><div class="read-more-posts-btn">More From Our Blog</div></a>
			</div> -->
			

<!-- Section 4 (Work With Us) -->
	
		<!-- <div class="cd-container">
			<h4 style="color: rgb(212,175,55);">Contact Us</h4>
			<h1>Work With Us</h1>

			
			<div class="cd-container-contact">
				<div class="cd-container-contact-clmn-1">
					<section id="cd-google-map">
						<div id="google-container"></div>
						<div id="cd-zoom-in"></div>
						<div id="cd-zoom-out"></div>
						<address>Rua Serpa Pinto, Lisbon, Portugal</address>
					</section>
				</div>
				<div class="cd-container-contact-clmn-2" style="padding-bottom: 0px;">
					<div class="contact-1">
						<div class="contact-clmn-content">
							<h4>Location</h4>
							<p>Rua Serpa Pinto, Lisbon, Portugal</p>
						</div>
					</div>
					<div class="contact-2">
						<div class="contact-clmn-content">
							<h4>Phone</h4>
							<p>
								+88 (0) 101 0000 000
								<br>
								+88 (0) 101 0000 000
							</p>
						</div>
					</div>
				</div>
				
				<div class="cd-container-contact-clmn-2">
					<div class="contact-1">
						<div class="contact-clmn-content">
							<h4>Fax</h4>
							<p>
							   +88 (0) 202 0000 000
							   <br>
							   +88 (0) 202 0000 000
							</p>
						</div>
					</div>
					<div class="contact-2">
						<div class="contact-clmn-content">
							<h4>Email</h4>
							<p>
							   e@elegant.com
							   <br>
							   c@elegant.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div> -->


<!-- Section 5 (Footer) -->
		
		<!-- <div class="footer">
			<div class="footer-content">
					<div class="footer-clmn1">© 2014 Designed and Developed by <a href="#">Diogo Dantas</a></div>
					<div class="footer-clmn2">Email: <a href="#">imdiogodantas@gmail.com</a></div>
			</div>
		</div> -->
	<!-- </div> -->
	
	<!-- </main> -->
	<!-- </body> -->
	<footer class="footer">
  		<div class="footer-content">
			<div class="footer-clmn1">© Design is inpired from <a href="http://diogodantas.com" target="_blank">Diogo Dantas</a> and Developed by <a href="#"><i class="footer-end">Foodo's</i></a></div>
			<div class="footer-clmn2">Email: <a href="mailto:raihanthecooldude@gmail.com" target="_blank">support.foodos@gmail.com</a></div>
		</div>
	</footer>
</body>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="assets/jquery-2.1.1.js"></script>
<script src="assets/main.js"></script> <!-- Resource jQuery -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5wGdqrTcgLdOPzMbASsbiHkloxc6v2rE"></script>

		<script src="assets/TweenLite.min.js"></script>
		<script src="assets/EasePack.min.js"></script>
		<script src="assets/rAF.js"></script>
		<script src="assets/demo-1.js"></script>

<!-- Script for smooth scrolling -->
<script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
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
</script>

</html>