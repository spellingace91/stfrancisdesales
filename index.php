<!DOCTYPE html>
<html lang="en">
	<head>
		<?php $title = 'Home'; $inc = $_SERVER['DOCUMENT_ROOT'].'/stfrancisdesales/inc/'; include $inc.'head.php'; ?>
	</head>
	<body>
		<div id="background-wrap">
			
			<?php include $inc.'header.php'; ?>
			
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
		        		<div class="calendar-header">
		        			<h2>February - March</h2>
		        		</div>
		        		<div class="calendar-item">
		        			<div class="calendar-item-content">
			        			<div>
			        				<h2><span>THU</span></h2>
			        			</div>
			        			<div>
				        			<h3>27</h3>
			        			</div>
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
				        			<h2><span>FRI</span></h2>
				        		</div>
				        		<div>
				        			<h3>28</h3>
				        		</div>
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
				        			<h2><span>SAT</span></h2>
				        		</div>
				        		<div>
				        			<h3>1</h3>
				        		</div>
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
		
		<?php include $inc.'footer.php'; ?>
		
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
			var pictures = ["IMG_9299", "IMG_9286", "IMG_9273", "IMG_9389", "IMG_9361", "IMG_9350", "IMG_9334", "IMG_9376"];
			var background = pictures[Math.floor(Math.random() * pictures.length)]
			$('#background-wrap').backstretch("/stfrancisdesales/images/" + background + ".jpg");
		</script>
	</body>
</html>