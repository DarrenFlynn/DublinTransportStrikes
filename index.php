<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<title>
			Dublin Transport Strikes
		</title>
			<link rel="shortcut icon" href="img/Bridge.png"/>
		   	<meta name="viewport" content="width=device-width, initial-scale=1">
	   		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	   		<!--Carousel-->
	   		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 70%;
            margin: auto;
        }
        </style>
	</head>
	<body style="background-color: #98FB98;">
	<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>


	<div class="col-sm-12">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="img/logo.png" alt="logo" width="460" height="345">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="img/LuasP.jpg" alt="Luas" width="460" height="345">
        <div class="carousel-caption">
          <h3>DTS</h3>
          <p>Luas</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/Dbus.jpg" alt="DubBus" width="460" height="345">
        <div class="carousel-caption">
          <h3>DTS</h3>
          <p>Dublin Bus</p>
        </div>
      </div>

      <div class="item">
        <img src="img/irishrail.jpg" alt="IrishRail" width="460" height="345">
        <div class="carousel-caption">
          <h3>DTS</h3>
          <p>Irish Rail</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</div>

		<br>
		
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<form action="includes/login.inc.php" method="POST">
		    <label for="username">Username:</label>
			  <input type="text" name="username" class="form-control" placeholder="Enter your username"/>
			  <label for="password">Password:</label>
			  <input type="password" class="form-control" name="password" placeholder="Enter your password"/>
			  <br>
			  <button type="submit" class="btn btn-primary">Log In</button>
		</form>
		<form action="signup.php">
    	  <button type="submit" class="btn btn-danger" style="float:right;">Sign up</button>
    </form>
		</div>
		<div class="col-sm-2"></div>
		<br>
	</body>
</html>