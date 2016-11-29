<?php 
	include 'header.php';
?>

	<div class="navbar-static-top navbar-inverse" id="home">
		<div class="container">
			<div class="navbar-brand">
				<a href="home.php">Dublin Transport Strikes Website</a>
			</div>
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">Menu</button>
			<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-right navHover">
				<li><a href="home.php">Home</a></li>
				<li><a href="transport.php">Transport</a></li>
				<li><a href="about.php">About Us</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="jumbotron">
		<div class="container" id="transport">
			<h1 class="text-center">Current Location</h1>
		</div>
	</div>
	

  <div class="container">
    <div class=" row medPadding">
      <div class="col-md-12 text-center smlPadding darkGreyText">
        <h2><strong><i>You Are Here!</i></strong></h2><br />
        <iframe src=
        "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1190.8382655543317!2d-6.2438445334783745!3d53.349046329908234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e8cd86e97e7%3A0x6d51b774ee7fa935!2sNational+College+of+Ireland!5e0!3m2!1sen!2sie!4v1455882696428"
        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=
        ""></iframe>
      </div>
    </div>
  </div>
  
	<div class="alt1">
	<div class="container">
		<div class="row">
			<h1 class="text-center">Need a Taxi?</h1>
			<div class="col-md-4">
				<h2 class="text-center">Hailo</h2>
				<p class="text-justify"><img src="img/hailologo.jpg" alt="circular holding image"/>
				</p>
				<a href="#one" class="btn btn-default">Sign Up & Order</a>
			</div>
			<div class="col-md-4">
				<h2 class="text-center">UBER</h2>
				<p class="text-justify"><img src="img/uberlogo.jpg" alt="circular holding image"/></p>
				<a href="#three" class="btn btn-default">Sign Up & Order</a>
			</div>
			<div class="col-md-4">
				<h2 class="text-center">CabApp</h2>
				<p class="text-justify" class="text-center"><img src="img/cabapp.png" alt="circular holding image"/></p>
				<a href="#three" class="btn btn-default">Sign Up & Order</a>
			</div>
			
		</div>
	</div>
	</div>

    <div class="col-md-2 text-center smlPadding"></div>
  </div>
			<div class="col-md-4">
				<p class="text-justify" class="text-center">

            
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