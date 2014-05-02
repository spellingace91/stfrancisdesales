<?php
	date_default_timezone_set('America/Phoenix');
	$i = 1;
	while ($i < 7) {
		$date = (date(D)=="Sun" ? date(Ymd, strtotime('-'.($i-1).' week')) : date(Ymd, strtotime('-'.$i.' week sunday')));
		echo '
			<a class="" href="http://content.seekandfind.com/bulletins/05/0387/'.$date.'B.pdf">
				<img class="" src="http://content.seekandfind.com/bulletins/05/0387/tn_'.$date.'B.jpg" />
			</a>
			<a class="bulletin-link" href="http://content.seekandfind.com/bulletins/05/0387/'.$date.'B.pdf">
				'.date("F j, Y", strtotime($date)).'
			</a>
			<br />';
		$i++;
	}
?>

<div id="adobe-reader">
	<p>To view PDF files, you need the free Adobe Reader. Click below to download.</p>
	<a href="http://get.adobe.com/reader"></a>
</div>
