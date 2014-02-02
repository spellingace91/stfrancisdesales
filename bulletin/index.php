<!DOCTYPE html>
<html lang="en">
	<head>
		<title>St. Francis de Sales Parish - Catholic Church, Tucson, AZ</title>
		<?php $inc = $_SERVER['DOCUMENT_ROOT'].'/stfrancisdesales/inc/'; include $inc.'head.php'; ?>	
	</head>
	<body>
		<div id="background-wrap">
			
			<?php include $inc.'header.php'; ?>
				
			<div class="container" id="content-wrap">
				<div class="sixteen columns">
				  
					<div class="sixteen columns alpha omega" id="content">
						<section>
							<h1>THIS IS WHERE THE CONTENT GOES!!!!!1!!</h1>
							<?php
								date_default_timezone_set('America/Phoenix');
								$i = 1;
								while ($i < 7) {
									$date = (date(D)=="Sun" ? date(Ymd).B : date(Ymd, strtotime('-'.$i.' week sunday')));
									echo '<a href="http://content.seekandfind.com/bulletins/05/0387/'.$date.'B.pdf">'.date("F j, Y", strtotime($date)).'</a><br />';
									$i++;
								}
							?>
						</section>
					</div>
				</div>
			</div>
			
		<?php include $inc.'footer.php'; ?>

		<script>
			$('#background-wrap').backstretch("/stfrancisdesales/images/background.jpg");
		</script>
	</body>
</html>