<?php
	
	date_default_timezone_set('America/Phoenix');
	
	$calendar_id = "spellingace91@gmail.com";
	
	$current_date = strtotime('today midnight');
	$cutoff_date = strtotime('+3 days midnight');
	
	$current_month = date('F', $current_date);
	$cutoff_month = date('F', $cutoff_date);
	
	$rfc_current_date = date3339($current_date);
	$rfc_cutoff_date = date3339($cutoff_date);
	/*
echo $current_month. "<br/>";
	echo $cutoff_month;
*/
	
	$service_url = 
	'https://www.googleapis.com/calendar/v3/calendars/' 
	. urlencode($calendar_id) . '/events?'
	. 'orderBy=startTime'
	. '&singleEvents=true'
	. '&timeMax=' . urlencode($rfc_cutoff_date) . ''
	. '&timeMin=' . urlencode($rfc_current_date) . ''
	. '&timeZone=-0700'
	. '&key=AIzaSyAotv3pW0gFaYgEqHU1cLHCIBgGIuB0SWI';
	$curl = curl_init($service_url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$curl_response = curl_exec($curl);
	if ($curl_response === false) {
		$info = curl_getinfo($curl);
		curl_close($curl);
		die('error occurred during curl exec. Additional info: ' . var_export($info));
	}
	curl_close($curl);
	$decoded = json_decode($curl_response);
	if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
		die('error occurred: ' . $decoded->response->errormessage);
	}
	/* var_export($decoded); */
	
	$time = strtotime($decoded->items[1]->start->dateTime);
	/*
echo $decoded->items[1]->summary . "<br/>";
	echo date('F j, Y', $time) . "<br/>";
	echo date('G:i a', $time) . "<br/>";
	
	echo date(DATE_RFC3339);
*/
	foreach($decoded->items as $key => $value) {
		echo "<h2>" . $value->start->dateTime . date("g:i a", strtotime($value->start->dateTime)) . " - " . $value->summary . "</h2>";
		
		/*
foreach ($value as $k => $v) {
			echo "$k | $v <br/>";
		}
*/
	}

	function getMonth() {
		
		global $current_month, $cutoff_month;
		
		echo (strcmp($current_month, $cutoff_month) == 0) ?
							$current_month : 
							$current_month . " - " . $cutoff_month;
	}
	
	
	/* Helper functions */
	
	function date3339($timestamp=0) {
		if (!$timestamp) {
			$timestamp = time();
		}
		
		$date = date('Y-m-d\TH:i:s', $timestamp);
	
		$matches = array();
		if (preg_match('/^([\-+])(\d{2})(\d{2})$/', date('O', $timestamp), $matches)) {
			$date .= $matches[1].$matches[2].':'.$matches[3];
		} else {
			$date .= 'Z';
		}
	
		return $date;
	}

?>