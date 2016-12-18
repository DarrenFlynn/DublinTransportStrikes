<?php 
	include 'header.php';
?>
<body style="background-color:#C0C0C0;">
	<div class="navbar-static-top navbar-default" id="home">
		<div class="container">
			<div class="navbar-brand">
				<a href="home.php"><h4>DTS</h4></a>
			</div>
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
			<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-right navHover">
				<li><a href="home.php"><h5>Home</h5></a></li>
				<li><a href="transport.php"><h5>Transport</h5></a></li>
				<li><a href="about.php"><h5>About Us</h5></a></li>
				<li><a><form action="includes/logout.inc.php">
			    	<button class="btn btn-danger">Log Out</button>
			    </form></a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="jumbotron" style="background-image: url('img/green.jpg');">
		<div class="container" id="transport">
			<h1 class="text-center">Contact Us</h1>
		</div>
	</div>
	
	<div class="alt1">
	<div class="container padding">
		<div class=" row medPadding">
			<h1 class="text-center">Questions or Comments?</h1>
			
		  <h2 class="text-center">Fill in the section below and we will get back to you!</h2>

      <?php
      include 'db.php';
      echo "<form role='form' method='POST' action='includes/query.inc.php'>
        <label for='name'>Name:</label> 
        <input type='text' name='name' class='form-control' placeholder='Your name here' /> 
        <label for='email'>Email:</label>
        <input type='email' name='email' class='form-control' placeholder='example@example.com' /> 
        <label for='query'>Comment:</label> 
        <textarea name='query' class='form-control' rows='5' maxlength='255'
        placeholder='Enter your comment here...' style='resize:none;'></textarea><br />
        <button type='submit' name='querySubmit' value='submit' 
        class='btn greenHoverBtn roundBtn'>Send Query</button>
      </form>";
      ?>
    </div>
    
   <div class="container padding">
    <div class="col-md-12 text-center smlPadding darkGreyText">
      <h2 class=""><strong>Check us out on Social Media :)</strong></h2>
    </div>

    <div class="col-md-2 text-center smlPadding"></div>

    <div class="col-md-2 text-center smlPadding">
      <a href="https://www.facebook.com/" target="_blank"><img src=
      "img/facebook.png" class="imgContact" /></a>

      <h4 class="darkGreyText"><a href="https://www.facebook.com/" target=
      "_blank">Message Us</a></h4>
    </div>

    <div class="col-md-2 text-center smlPadding">
      <a href="https://twitter.com/?lang=en" target="_blank"><img src=
      "img/twitter.png" class="imgContact" /></a>

      <h4 class="darkGreyText"><a href="https://www.twitter.com/" target="_blank">Follow
      Us</a></h4>
    </div>

    <div class="col-md-2 text-center smlPadding">
      <a href="https://www.youtube.com/" target="_blank"><img src=
      "img/youtube.png" class="imgContact" /></a>

      <h4 class="darkGreyText"><a href="https://www.youtube.com/" target=
      "_blank">Subscribe</a></h4>
    </div>

    <div class="col-md-2 text-center smlPadding">
      <a href="https://www.instagram.com/" target="_blank"><img src=
      "img/instagram.png" class="imgContact" /></a>

      <h4 class="darkGreyText"><a href="https://www.instagram.com/" target="_blank">Keep
      Up To Date</a></h4>
    </div>
    
    <hr class="shortHr" />

  <div class="container padding">
    <div class=" row medPadding">
      <div class="col-md-12 text-center smlPadding darkGreyText">
        <h2><strong>Our Office Location!</strong></h2><br />
        <iframe src=
        "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1190.8382655543317!2d-6.2438445334783745!3d53.349046329908234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e8cd86e97e7%3A0x6d51b774ee7fa935!2sNational+College+of+Ireland!5e0!3m2!1sen!2sie!4v1455882696428"
        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=
        ""></iframe>
      </div>
    </div>
  </div>

    <div class="col-md-2 text-center smlPadding"></div>
  </div>
			<div class="col-md-4">
				<p class="text-justify" class="text-center">

            
  <div class="alt2">
	<div class="container padding">
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