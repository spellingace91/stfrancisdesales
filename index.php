<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	
	require_once('inc/calendar.php');
	
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
		        			<h2><?php getMonth(); ?></h2>
		        		</div>
		        		<div class="calendar-item">
		        			<div class="calendar-item-content">
			        			<div>
			        				<h2><span>THU</span></h2>
			        			</div>
			        			<div>
				        			<h3>3</h3>
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
				        			<h3>4</h3>
				        		</div>
			        		</div>
				        		<ul>
			        			<li><a href="#"><em>9:00 am</em> - Centering Group</a></li>
			        			<li><a href="#"><em>10:00 am</em> - Bible Discussion Group</a></li>
			        			<li><a href="#"><em>7:00 pm</em> - OCIA</a></li>
			        			<li><a href="#"><em>7:00 pm</em> - OCIA</a></li>
			        			<li><a href="#"><em>7:00 pm</em> - OCIA</a></li>
			        			<li><a href="#"><em>7:00 pm</em> - OCIA</a></li>
			        		</ul>
		        		</div>
		        		<div class="calendar-item">
			        		<div class="calendar-item-content">
				        		<div>
				        			<h2><span>SAT</span></h2>
				        		</div>
				        		<div>
				        			<h3>5</h3>
				        		</div>
			        		</div>
				        		<ul>
			        			<li><a href="#"><em>10:00 am</em> - New Testament Class</a></li>
			        		</ul>
		        		</div>
		        	</div>
	        	<section>
					</div>
					
			  	<div class="five columns omega" id="times">
				      <div class="five columns alpha omega schedule wrapper-section wrapper-box" id="mass">
								<h2>Masses</h2>
								<div class="times-content">
									<div class="day" id="saturday">
										<p class="day-of-the-week">Saturday</p>
										<div class="times"
											<p>8:00 am</p>
											<p>5:00 pm <span>(Anticipated)</span></p>
										</div>
									</div>
								
									<div class="day" id="sunday">
										<p class="day-of-the-week">Sunday</p>
										<div class="times">
											<p>7:30 am</p>
											<p>9:30 am</p>
											<p>11:30 am</p>
											<p>5:00 pm</p>
										</div>
									</div>
									
									<div class="day" id="mon-fri">
										<p class="day-of-the-week">Monday - Friday</p>
										<div class="times"
											<p>6:30 am <span>(Communion Service)</span></p>
											<p>8:00 am</p>
										</div>
									</div>
								
								</div>
							</div>
							
							<div class="five columns alpha omega schedule wrapper-section wrapper-box" id="reconciliation">
								<h2>Reconciliation</h2>
								<div class="times-content">
									<div class="day">
										<p class="day-of-the-week">Saturdays</p>
										<div class="times">
											<p>3:30 pm</p>
											<p>or by appointment</p>
										</div>
									</div>
								</div>
							</div>
				  </div>
			  
				</div>
			</div>
		</div>
		
		<?php include $inc.'footer.php'; ?>
		
		<!--
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
-->
		<script>
			var bs = false;
			var image = "/stfrancisdesales/images/" + "<?php echo $_SESSION['backgroundImage']; ?>" + ".jpg";
			toggleBackstretch( 768, image );
			
			$(window).on('resize',function(){
			    toggleBackstretch( 768, image );
			});
			
			function toggleBackstretch( breakpoint, src ){
			
			    if( $(window).width() > breakpoint ){
			         $('#background-wrap').backstretch(src);
			         bs = !bs;
			    }
			
			    else if($(window).width() < breakpoint){
			         $('#background-wrap').backstretch('destroy');
			         bs = !bs;
			    }
			}
		</script>
	</body>
</html>