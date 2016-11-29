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
			<p class="text-center">Transport Modes</p>
		</div>
	</div>
	
	
	<div class="container" id="about">
		<div class="row padding" id="one">
			<div class="col-md-6">
				<img src="img/luasstop.jpg" class= "img-circle img-responsive" alt="circular holding image"/>
			</div>
			<div class="col-md-6">
			<h2 class="text-center"> Luas </h2>
				<p class="text-justify">Luas is a tram/light rail system in Dublin, Ireland, which in 2015 carried 34.6 million passengers.There are two main lines: the Green Line, which began operating on 30 June 2004, and the Red Line which opened on 26 September 2004. Since then, both lines have been extended and split into different branches. The system now has fifty-four stations and 36.5 kilometres (22.7 mi) of track.
				<br></br>
				Luas is operated by Transdev, under tender from the Railway Procurement Agency (RPA). It is a major part of the National Transport Authority's strategy (2000–2016). Three extensions to the existing Luas lines have been completed. Construction of a 6 km extension to the Green line to the North city centre and Broombridge, which will link both Green and Red lines, began in June 2013.
				The idea for a new tram or light rail system for the city of Dublin was first suggested in 1994, by a Dublin Transportation Initiative (DTI) report, which referenced the original Dublin tramways, once running over 60 kilometres (37 mi) and reaching most parts of the city.
				<br></br>
				The original launch date for the Luas was to be 2003, but delays in construction saw this date pushed back by a year. An advertising campaign took place to inform the public of the development of the system, while construction was taking place. Construction finished in February 2004 and a period of testing and driver training began. 30 June 2004 was decided on as the official launch date of the Green Line. 
				The first tram went into service for the general public at 3 p.m. Several days of free travel and a family fun weekend took place to launch the system. The Red Line opened on 26 September 2004, with six days of free travel for the general public.
				</p>
		</div>
	</div>
	<hr />
	
		<div class="row padding" id="two">
			<div class="col-md-6">
			<h2 class="text-center"> Dublin Bus </h2>
				<p class="text-justify">Dublin Bus is a bus operator providing services in Dublin. It is a subsidiary of Coras Iompair Eireann.Dublin Bus was established on 2 February 1987 when it was split out from the Coras Iompair Eireann.Dublin Bus operates an extensive network of 110 radial, cross-city and peripheral routes and 18 night routes in the city of Dublin and the Greater Dublin Area. The company carries around 325,000 people each day.The main radial routes are focused upon Dublin's sixteen Quality Bus Corridors which provide buses with daytime access to the city centre.
				<br></br>Dublin Bus fares are generally calculated on a stage system based on distance travelled. There are several different levels of fares, which apply on most services. Certain routes use a different fare system.
				Dublin Bus operate an 'exact fare' policy. Passengers place the exact fare in coins (notes are not accepted) in the fare box before the ticket is issued. In the case of over payment, a "change ticket" is issued which can be exchanged at the company's head office on O'Connell Street. Routes 747 and 757, the express routes to and from Dublin Airport have a minimum fare of €6 banknotes are accepted, and change is given in cash.
				<br></br>
				As of July 2016, the fleet consisted of 971 buses. Dublin Bus operate seven depots in Clontarf, Conyngham Road, Donnybrook, Harristown, Phibsborough, Ringsend and Summerhill.
				As the vehicles become of age they have been withdrawn to make way for newer technology. Types of significance such as the GAC Ireland have been preserved by the National Transport Museum of Ireland.
				
				</p>
			</div>
			
			
			<div class="row padding" id="three">
				<img src="img/Bus1.jpg" class="img-circle img-responsive" alt="circular holding image"/>
			</div>
			<hr />
		</div>
	
	
	<div class="row padding">
			<div class="col-md-6">
				<img src="img/tar.jpg" class="img-circle img-responsive" alt="circular holding image"/>
			</div>
			<div class="col-md-6">
			<h2 class="text-center"> Irish Rail </h2>
				<p class="text-justify">Iarnrod Eireann or Irish Rail is the operator of the national railway network of Ireland. Established on 2 February 1987, it is a subsidiary of Coras Iompair Eireann (CIE). It operates all internal InterCity, Commuter, DART and freight railway services in the Republic of Ireland, and, jointly with Northern Ireland Railways, the Enterprise service between Dublin and Belfast. In 2015, IE carried 39.7 million passengers,up from 37.8 million in 2014.
				<br></br>IE's passenger services are branded under three main names: InterCity, Commuter and DART. The North-South route along Dublin's eastern coastal side is also host to DART, Ireland's only electrified heavy-rail service. The DART consists of many classes, the most famous one being the 8100 class which still operate, now extensively refurbished.
				
				</p>
		</div>
	</div>
	<hr />
</div>


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