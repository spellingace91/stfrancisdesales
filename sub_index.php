<!DOCTYPE html>
<html lang="en">
	<head>
		<?php $inc = $_SERVER['DOCUMENT_ROOT'].'/stfrancisdesales/inc/'; include $inc.'head.php'; ?>	
	</head>
	<body>
		<div id="background-wrap">
			
			<?php include $inc.'header.php'; ?>
				
			<div class="container" id="content-wrap">
				<div class="sixteen columns">
				  
					<div class="sixteen columns alpha omega" id="content">
						<section>
							<?php include './content.php'; ?>
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