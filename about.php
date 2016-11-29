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
				<li><a href="home.php"><h5>Home</h5></a></li>
				<li><a href="transport.php"><h5>Transport</h5></a></li>
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
			<h1 class="text-center">Dublin Transport Strikes</h1>
		</div>
	</div>
	
	<div class="alt1">
	<div class="container">
		<div class="row">
			<h1 class="text-center">About Us</h1>
			<div class="col-md-3">
				<p class="text-justify" class="text-center">
				</p>
			</div>
			<div class="col-md-6">
				<p class="text-justify" class="text-center">
				Dublin Transport Strikes is an information holding Website. DTS tarcks and updates 
				transport Stikes happening/approaching within the Greater Dublin Area. DTS supports updates from the following 
				transport modes Luas, Dublin Bus and Irish Rail. DTS website will develope in the future 
				due to the incoming new transport additions arriving within the Greater Dublin Area, For Example: New Luas Lines and New Bus routes.
				DTS also holds a feature that will find your current location if a strikes arises, using your current location will 
				calculate your new destination arrival time due to the strike.
				</p>
			
		<div class="alt1">
	    <div class="container">
		<div class="row">	
			<h1 class="text-center">What we do with your infomation?</h1>
			<div class="col-md-3">
				<p class="text-justify" class="text-center">
				</p>
			</div>
			<div class="col-md-6">
				<p class="text-justify" class="text-center">
				Dublin Transport Strikes is committed to information security. We will use all
                reasonable endeavours to keep Registrants personal information in a secure
                environment. For instance, each Registrants personal information is encrypted
                whilst being sent to our server at the time of registration. However, security
                cannot be guaranteed due to the nature of the internet. Dublin Transport Strikes
                security measures are designed to assist in Registrants personal information not
                being accessed by unauthorised personnel, lost or misused. If you reasonably 
                believe that there has been an unauthorised use or disclosure of your personal
                information please let us know by contacting our Privacy and Data Protection
                Officer (contact details below).
				</p>
				<br></br>
				
					<div class="alt1">
	<div class="container">
		<div class="row">
			<h1 class="text-center">Cookies?</h1>
			<div class="col-md-3">
				<p class="text-justify" class="text-center">
				</p>
			</div>
			<div class="col-md-6">
				<p class="text-justify" class="text-center">
			A cookie is a little piece of information handed to a web browser from a web
            server that contains information that can be retrieved from the server later. When
            you visit the Site the server may attach a cookie to your computers memory.
            Digital Maths Academy uses cookies only to the limited extent to recognise the
            Registrant when they visit the Site and pairing that Registrant with the account
            (and account preferences) that the Registrant created. However, this information
            is not linked to any personal information that Registrant may provide and cannot
            be used to identify Registrants. You should be able to configure your computer so
            that it disables cookies. To help us better understand you needs and better share
            content, we also use analytical software. This software will save a cookie to your
            computers hard drive in order to track and monitor your engagement and usage
            of the website but will not store, save or collect personal information. You can
            read Google's privacy policy here for further information. Other cookies may
            be stored to your computers hard drive when this website uses referral programs,
            sponsored links or adverts which is extremely rare. Such cookies typically
            expire after 30 days, though some may take longer. No personal information is
            stored, saved or collected without your consent.
			</p>
			</div>
			<div class="col-md-3">
				<p class="text-justify" class="text-center">
				</p>
			</div>
			</div>
		
		<br><br><br><br><br><br><br><br><br>
	  <div class="alt2">
		<div class="container">
		<center><footer>&copy; Team Project Group P<br />
		<a href="#home">Back to Top</footer></center>
		</div>
		</div>
		
		<br>
	
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.js"></script>
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