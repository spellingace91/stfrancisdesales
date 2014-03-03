<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	
	session_start();
	
	if (isset($_SESSION['backgroundImage'])) {
		session_destroy();
	}
	
	if (!isset($_SESSION['backgroundImage'])) {
		$images = array("IMG_9299", "IMG_9286", "IMG_9273", "IMG_9389", "IMG_9361", "IMG_9350", "IMG_9334", "IMG_9376");
		$backgroundImage = $images[floor(mt_rand() / mt_getrandmax() * count($images))];
		$_SESSION['backgroundImage'] = $backgroundImage;
	}
?>

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
			        			<li><a href="#"><em>9:30 am</em> - Craft Group</a></li>
			        			<li><a href="#"><em>4:00 pm</em> - Kindergarten & Elem. Religious Ed</a></li>
			        			<li><a href="#"><em>7:00 pm</em> - Sr./Jr. High School Religious Ed</a></li>
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
			        			<li><a href="#"><em>9:00 am</em> - Centering Group</a></li>
			        			<li><a href="#"><em>10:00 am</em> - Bible Discussion Group</a></li>
			        			<li><a href="#"><em>7:00 pm</em> - OCIA</a></li>
			        			
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
			        			<li><a href="#"><em>10:00 am</em> - New Testament Class</span></li>
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
					<a href="/sacraments/">Sacraments</a>
				</li>
				<li>
					<a href="/ministries/">Ministries</a>
				</li>
				<li>
					<a href="/resources/">Resources</a>
				</li>
				<li>
					<a href="/giving/">Giving</a>
				</li>
				<li>
					<a href="/about/">About</a>
				</li>
				<li>
					<a href="/contact/">Contact</a>
				</li>
			</ul>
		</div>
		<script>			
			$('#background-wrap').backstretch("/stfrancisdesales/images/" + "<?php echo $_SESSION['backgroundImage']; ?>" + ".jpg", {speed: 1000});
		</script>
	</body>
</html>