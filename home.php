<?php
	include 'header.php';
	date_default_timezone_set('Europe/Dublin');
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
		
		
		<div class="jumbotron" id="image" style="background-image: url('img/green.jpg');">
		<div class="container" id="transport">
			<h1 class="text-center">Dublin Transport Strikes</h1><br>
			<p class="text-center">Check out scheduled Strikes below </p>
		</div>
		</div>
		
	<div class="container">
		<div class="row padding" style="background-color:white;border-radius:50px;">
			<div class="col-md-6">
				<center><img src="img/luaslogo.jpg" style="width:85%"/></center>
			</div>
			<div class="col-md-6">
			<br>
			<h3 class="text-center" id="luas"></h3>
			<br>
		</div>
	</div>
	</div>

	<br>
	
	<div class="container">
		<div class="row padding" style="background-color:white;border-radius:50px;">
			<div class="col-md-6">
			<br>
			<h3 class="text-center" id="bus"></h3>
			<br>
			</div>
			
			<div class="col-md-6">
				<center><img src="img/dbuslogo.jpg" style="width:85%"/></center>
			</div>
		</div>
	</div>
	
	<br>
	
	<div class="container">
		<div class="row padding" style="background-color:white;border-radius:50px;">
			<div class="col-md-6">
				<center><img src="img/raillogo.jpg" style="width:85%"/></center>
			</div>
			<div class="col-md-6">
			<br>
			<h3 class="text-center" id="rail"></h3>
			<br>
			</div>
		</div>
	</div>
	<br>
	<hr />
	<!--Google Maps API-->
	<div class="col-md-6">
		<center><img src="img/googlelogo.jpg" style="width:40%"/></center>
	</div>
	<div class="col-md-6">
	<p class="text-center"><a href="map.php" target="map.php" class="btn btn-success btn-lg"> Click here to find another route!</a></p>
	</div>
	<br><br>
	<hr />
	
	<!--Facebook API-->
	<div class="alt1">
		<div class="container">
			<div class="col-sm-1">
				<center><img src="img/fblogo.jpg"><img></center>
				<br>
			</div>
			<div class="col-sm-2"></div>
			<div class="col-sm-4">
			<div id="fb-root">
			<br>
			<div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="true" data-auto-logout-link="true">
			</div>
			</div>
			</div>
			<div class="col-sm-1"></div>
			<div class="col-sm-3">
			<br>
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
	<h1 class="text-center"><u>Comments Section</u></h1><br>
	<div class="container padding">
	<?php
	include 'db.php';
	include 'includes/comments.inc.php';
	if(isset($_SESSION['id'])){
	echo "<form role='form' method='POST' action='".setComment($conn)."'>
        <input type='hidden' name='username' value='".$_SESSION['id']."'/> 
        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'/> 
        <label for='comment'>Write a comment:</label> 
        <textarea name='message' class='form-control' rows='5' maxlength='1000'
        placeholder='Enter your comment here...' style='resize:none;'></textarea><br />
        <button type='submit' name='commentSubmit' value='submit' 
        class='btn btn-success'>Comment</button>
    </form><br>";
	}
    
    getComment($conn);
    
    ?>
	</div>
	
	<br><br>

	<div class="alt2">
	<div class="container">
	<center><footer>&copy; Team Project Group P<br />
	<a href="#home">Back to Top</footer></center>
	</div>
	</div>
	
	<br>
	
	<script src="https://www.gstatic.com/firebasejs/3.6.4/firebase.js"></script>
	<script>
	    // Initialize Firebase
	    var config = {
	      apiKey: "AIzaSyAmMvLV56hFxZJtG3aeEavIazpoZo6Veis",
	      authDomain: "strikes-aeab0.firebaseapp.com",
	      databaseURL: "https://strikes-aeab0.firebaseio.com",
	      storageBucket: "strikes-aeab0.appspot.com",
	      messagingSenderId: "905368545738"
	    };
	    firebase.initializeApp(config);
	    
	    var luas = document.getElementById('luas');
	    var dbRef = firebase.database().ref().child('luasStrike');
	    dbRef.on('value', snap => luas.innerText = snap.val());
	    
	    var bus = document.getElementById('bus');
	    var dbRef = firebase.database().ref().child('busStrike');
	    dbRef.on('value', snap => bus.innerText = snap.val());
	    
	    var rail = document.getElementById('rail');
	    var dbRef = firebase.database().ref().child('railStrike');
	    dbRef.on('value', snap => rail.innerText = snap.val());
	</script>
	
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