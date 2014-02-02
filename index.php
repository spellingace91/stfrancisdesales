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
		<div id="background-wrap">
			
			<?php include("./inc/header.php"); ?>
			
			<!-- <div id="wrapper"> -->
			<div class="container" id="content-wrap">
				<div class="sixteen columns">
				  
				  <!-- <div class="wrapper-section content-width" id="content"> -->
				  <div class="eleven columns alpha" id="content">
	        	<!-- <img src="http://2.bp.blogspot.com/_5WUZDXTJTFw/TH09q1EL8HI/AAAAAAAAB40/VK_m16Uf39g/s1600/Latin+Mass+Easter+2010+029.jpg"/> -->
	        	<section>
	        		<h1>Welcome!</h1>
	        	</section>
	        	
	        	<section>
		        	<div id="calendar">
		        		<div class="calendar-item">
		        			<div class="calendar-item-content">
			        			<div>
			        				<h2><span>Monday</span></h2>
					        		<h2>January</h2>
			        			</div>
				        		<h3>6</h3>
		        			</div>
		        			<ul>
			        			<li><span><a href="#">9:30am - Craft Group</a></span></li>
			        			<li><span><a href="#">4:00pm - Kindergarten & Elem. Religious Ed</a></span></li>
			        			<li><span><a href="#">7:00pm - Sr./Jr. High School Religious Ed</a></span></li>
			        		</ul>
		        		</div>
								<div class="calendar-item">
			        		<div class="calendar-item-content">
				        		<div>
				        			<h2><span>Tuesday</span></h2>
					        		<h2>January</h2>
				        		</div>
				        		<h3>7</h3>
			        		</div>
				        		<ul>
			        			<li><span><a href="#">9:00am - Centering Group</a></span></li>
			        			<li><span><a href="#">10:00am - Bible Discussion Group</a></span></li>
			        			<li><span><a href="#">7:00pm - OCIA</a></span></li>
			        		</ul>
		        		</div>
		        		<div class="calendar-item">
			        		<div class="calendar-item-content">
				        		<div>
				        			<h2><span>Wednesday</span></h2>
					        		<h2>January</h2>
				        		</div>
				        		<h3>8</h3>
			        		</div>
				        		<ul>
			        			<li><span><a href="#">10:00am - New Testament Class</a></span></li>
			        		</ul>
		        		</div>
		        	</div>
	        	<section>
					</div>
					
			  	<div class="five columns omega" id="times">
				      <?php adoration_schedule(); ?>
				  </div>
			  
				</div>
			</div>
		</div>
		
		<?php include("./inc/footer.php"); ?>
		
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
			$('#background-wrap').backstretch("images/background.jpg");
		</script>
	</body>
</html>