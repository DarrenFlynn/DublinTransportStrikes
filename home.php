<?php
	include 'header.php';
?>
<body>
    <div class="navbar-static-top navbar-inverse" id="home">
		<div class="container">
			<div class="navbar-brand">
				<a href="home.php"><h4>DTS</h4></a>
			</div>
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">Menu</button>
			<div class="collapse navbar-collapse navHeaderCollapse" style="min-height:65px;">
				<ul class="nav navbar-nav navbar-right navHover">
				<li><a href="transport.php"><h5>Transport Services</h5></a></li>
				<li><a href="about.php"><h5>About Us</h5></a></li>
				<li><a href="contact.php"><h5>Contact Us</h5></a></li>
				<li><a><form action="includes/logout.inc.php">
			    	<button class="btn btn-danger">Log Out</button>
			    </form></a></li>
				</ul>
			</div>
		</div>
	</div>
	
		<div class="jumbotron" style="background-image: url('img/green.jpg');">
		<div class="container" id="transport">
			<h1 class="text-center">Dublin Transport Strikes</h1><br>
			<p class="text-center">Check out scheduled Strikes below </p>
			<!--<p class="text-center"><a href="location.php">	<target="_blank" class="btn btn-primary btn-lg"> Check Out your Current Location</a></p>-->
		</div>
		</div>
	

	
	<div class="container" id="about">
		<div class="row padding" id="one">
			<div class="col-md-6">
				<img src="img/Luas.png" class= "img-responsive" alt="circular holding image"/>
			</div>
			<div class="col-md-6">
			<h2> Luas </h2>
				<p class="text-justify"><b>No Scheduled Strikes</b></p><br>
				<p class="text-justify">Red Line Service:<b><i>On Time</i></b><br> Green Line Service:<b><i>On Time</i></b><br></br>
				<b><i>CHECK BACK SOON FOR UPDATES!</i></b><br></br><a href="#" class="btn btn-default">New Route Launching 2017</a></p>
		</div>
	</div>
	<hr />
	</div>
	
	<br></br>
		<div class="row padding" id="two">
			<div class="col-md-1"></div>
			<div class="col-md-5">
			<h2> Dublin Bus </h2>
				<p class="text-justify"><b>December Strike Days:</b><br></br>2nd Decemeber<br></br>5th December<br></br>6th December<br></br><b>All Service Routes Affected</b>
										<br></br><b><i>CHECK BACK SOON FOR UPDATES!</i></b></p>
			</div>
			
			
			<div class="row padding" id="three">
				<img src="img/Bus.png" class="img-responsive" alt="circular holding image"/>
			</div>
			<hr />
		</div>
	<br></br>
	
	<div class="row padding">
		<div class="col-md-1"></div>
			<div class="col-md-5">
				<img src="img/Dart.png" class="img-responsive" alt="circular holding image"/>
			</div>
			<div class="col-md-6">
			<h2> Irish Rail </h2>
				<p class="text-justify"><b>No Scheduled Strikes</b></p><br>
				<p class="text-justify">All NorthBound Services:<br><b><i>23 Minute Delay</i></b><br></br>All SouthBound Services:</br>
				<b><i>On Time</i></b><br></br><b><i>CHECK BACK SOON FOR UPDATES!</i></b><br></br><a href="#" class="btn btn-default">Commuter Strikes Update Coming 2017</a></p>
		</div>
	</div>
	<br>
	<!--Google Maps-->
	<p class="text-center"><a href="map.html">	<target="_blank" class="btn btn-warning btn-lg"> Need to plan another route? Click here!</a></p>
	<!--Hailo-->
	<p class="text-center"><a href="test.html">	<target="_blank" class="btn btn-warning btn-lg"> Or need a cab? Then click here!</a></p>
	<br>
	<hr>
	<div class="alt1">
		<div class="container">
			<div class="col-sm-2">
				<center><img src="img/fb.png"><img></center>
			</div>
			<div class="col-sm-1"></div>
			<div class="col-sm-4">
			<div id="fb-root">
			<div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="true" data-auto-logout-link="true">
			</div>
			</div>
			</div>
			<div class="col-sm-1"></div>
			<div class="col-sm-3">
			<div
			  class="fb-like"
			  data-share="true"
			  data-width="450"
			  data-show-faces="true">
			</div>
			</div>
			<div class="col-sm-1"></div>
		</div>
		</div>

	<hr />


	<div class="container padding" id="contact">
		<form role="form">
			<div class="form-group">
				<label for="form">Sign Up Here for Promotional Offers</label>
				<br></br>
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="example@example.com"/>
			</div>
			<div class="form-group">
			<label for="email">Name:</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name here"/>
			</div>
			<div class="form-group">
			<label for="message">Message:</label>
				<textarea class="form-control" name="message" id="message "placeholder="Your message here"></textarea>
			</div>
			<div class="form-group">
			<input type="checkbox" /> Send me Promotions
			</div>
			<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
	
	<br><br>

	<div class="alt2">
	<div class="container">
	<center><footer>&copy; Team Project Group P<br />
	<a href="#home">Back to Top</footer></center>
	</div>
	</div>
	
	<br>
	<script>
	$(function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
	</script>
    </body>
</html>