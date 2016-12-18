<?php
    include 'header.php';

	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if(strpos($url, 'error=username') !== false){
		echo "<br><center><b>That username already exists! Please enter another one</b></center>";
	} elseif(strpos($url, 'error=empty') !== false){
		echo "<br><center><b>You MUST fill out both fields to Sign Up!</b></center>";
	}
	
?>
<body style="background-image:url(img/dublinbridge2.jpg);">
	<br>
	
	<center><h3><b>Sign Up with us here!</b></h3></center>
	
	<br>
    	<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<form action="includes/signup.inc.php" method="POST">
			<label for="username">Create a Username:</label>
			<input type="text" name="username" class="form-control" placeholder="Username"/>
			<label for="password">Your Password:</label>
			<input type="password" name="password" class="form-control" placeholder="Password"/>
			<br>
			<center><button type="submit" class="btn btn-primary">Sign Up</button></center>
			</form>
		</div>
		<div class="col-sm-2"></div>
		<center>
		<div class="col-sm-12">
		<form action="index.php">
		<br>
		<button type="submit" class="btn btn-danger">Back</button>
		</form>
		</center>
		</div>

		