<!DOCTYPE html>
<html lang="en">
	<head>
		<title>St. Francis de Sales Parish - Catholic Church, Tucson, AZ</title>
	
		<meta charset="utf-8" />
		<meta name="description" content="ADD CONTENT HERE"/>
		<meta name="author" content=""/>
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1, width=device-width"/>
		
		<link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="images/favicon.ico"/>
		<link rel="icon" type="image/ico" href="images/favicon.ico"/>
		
		<link rel="stylesheet" href="css/reset.css" />
		<link rel="stylesheet" href="css/base.css" />
		<link rel="stylesheet" href="css/skeleton.css" />
		<link rel="stylesheet" href="css/layout.css" />
		
		<?php include("inc/functions.php"); ?>
		
		<link href='http://fonts.googleapis.com/css?family=Lusitana' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,500' rel='stylesheet' type='text/css'>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/backstretch.js"></script>
	</head>
	<body>
		<header>
			<div class="container" id="parish-info">
				<div class="sixteen columns">
					<div class="eleven columns alpha" id="parish-name">
						<h1>
							<a href="#">St. Francis de Sales Parish</a>
						</h1>
						<h2>A Catholic Church in the Diocese of Tucson</h2>
					</div>
					
					<div class="four columns offset-by-one omega" id="parish-contact">
						<h3>1375 S. Camino Seco<br/>Tucson, AZ 85710<br /><a href="tel:1-520-885-5908" class="tel">(520) 885-5908</a></h3>
					</div>
				</div>
			</div>
			
			<div id="nav">
				<div class="container">
					<ul class="sixteen columns">
						<li>
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">Sacraments</a>
						</li>
						<li>
							<a href="#">Ministries</a>
						</li>
						<li>
							<a href="#">Bulletin</a>
						</li>
						<li>
							<a href="#">Giving</a>
						</li>
						<li>
							<a href="#">About</a>
						</li>
						<li>
							<a href="#">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</header>
		
		<!-- <div id="wrapper"> -->
		<div class="container" id="content-wrap">
			<div class="sixteen columns">
			  
			  <!-- <div class="wrapper-section content-width" id="content"> -->
			  <div class="eleven columns alpha" id="content">
        	<!-- <img src="http://2.bp.blogspot.com/_5WUZDXTJTFw/TH09q1EL8HI/AAAAAAAAB40/VK_m16Uf39g/s1600/Latin+Mass+Easter+2010+029.jpg"/> -->
        	<section>
        		<p>Your mom</p>
        	</section>
				</div>
				
		  	<div class="five columns omega" id="times">
			      <?php adoration_schedule(); ?>
			  </div>
		  
			</div>
			<div class="sixteen columns">
			  <footer>
	    		<div class="page">
	    			<p>&copy; 2013 St. Francis de Sales Parish</p>
	    		</div>
	   		</footer>
			</div>
		</div>
		<div id="nav-mobile">
			<ul class="page">
				<li>
					<a href="#">Sacraments</a>
				</li>
				<li>
					<a href="#">Ministries</a>
				</li>
				<li>
					<a href="#">Resources</a>
				</li>
				<li>
					<a href="#">Giving</a>
				</li>
				<li>
					<a href="#">About</a>
				</li>
				<li>
					<a href="#">Contact</a>
				</li>
			</ul>
		</div>
		<script>
			$('body').backstretch("images/background.jpg");
		</script>
	</body>
</html>