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
		   	<meta name="viewport" content="width=device-width, initial-scale=1">
		   	<meta charset="utf-8">
	   		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	   		<!--Navbar collapse-->
	   		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
			<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
			<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
			<!--Facebook Login-->
	   		<script>
	          window.fbAsyncInit = function() {
	            FB.init({
	              appId      : '1696806183981601',
	              xfbml      : true,
	              version    : 'v2.8'
	            });
	          };
	        
	          (function(d, s, id){
	             var js, fjs = d.getElementsByTagName(s)[0];
	             if (d.getElementById(id)) {return;}
	             js = d.createElement(s); js.id = id;
	             js.src = "//connect.facebook.net/en_US/sdk.js";
	             fjs.parentNode.insertBefore(js, fjs);
	           }(document, 'script', 'facebook-jssdk'));
	        </script>
	        <script>
	          function statusChangeCallback(response) {
	            console.log('statusChangeCallback');
	            console.log(response);
	            if (response.status === 'connected') {
	              testAPI();
	            } else if (response.status === 'not_authorized') {
	              document.getElementById('status').innerHTML = 'Please log ' +
	                'into this app.';
	            } else {
	              document.getElementById('status').innerHTML = 'Please log ' +
	                'into Facebook.';
	            }
	          }
	        
	          function checkLoginState() {
	            FB.getLoginStatus(function(response) {
	              statusChangeCallback(response);
	            });
	          }
	        
	          FB.getLoginStatus(function(response) {
	            statusChangeCallback(response);
	          });
	      
	          function testAPI() {
	            console.log('Welcome!  Fetching your information.... ');
	            FB.api('/me', function(response) {
	              console.log('Successful login for: ' + response.name);
	              document.getElementById('status').innerHTML =
	                'Thanks for logging in, ' + response.name + '!';
	            });
	          }
	        </script>
	</head>