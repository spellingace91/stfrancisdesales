<?php
	date_default_timezone_set('America/Phoenix');
	$i = 1;
	while ($i < 7) {
		$date = (date(D)=="Sun" ? date(Ymd, strtotime('-'.($i-1).' week')) : date(Ymd, strtotime('-'.$i.' week sunday')));
		echo '<a class="bulletin-link" href="http://content.seekandfind.com/bulletins/05/0387/'.$date.'B.pdf">'.date("F j, Y", strtotime($date)).'</a><br />';
		$i++;
	}
?>