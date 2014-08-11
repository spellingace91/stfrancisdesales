<?php
class Calendar
{
	// Google Calendar data in JSON
	public static $decoded;

	/** 
	 *	Get Google Calendar info
	 */
	public function __construct() {
		date_default_timezone_set('America/Phoenix');

		$calendar_id = "spellingace91@gmail.com";
		
		$current_date = strtotime('today midnight');
		$cutoff_date = strtotime('+3 days midnight');
		
		$rfc_current_date = $this->date3339($current_date);
		$rfc_cutoff_date = $this->date3339($cutoff_date);
		
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
		
		self::$decoded = json_decode($curl_response);
		
		if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
			die('error occurred: ' . $decoded->response->errormessage);
		}
	}
	
	/**
	 *	Gets the current month.
	 *	If another month begins in the next three days,
	 *	display the current month with that one, connected by a hyphen.
	 */
	function getMonth() {
		
		$current_month = date('F', strtotime('today midnight'));
		$cutoff_month = date('F', strtotime('+3 days midnight'));
		
		echo (strcmp($current_month, $cutoff_month) == 0) ?
							$current_month : 
							$current_month . " - " . $cutoff_month;
	}


	/**
	 *	Gets the weekday for the specified date.
	 */
	public function getWeekDay($date) {
		echo strtoupper(date("D", $date));
	}	
	
	/**
	 *	Gets the numeric day for the specified date.
	 */
	public function getDay($date) {
		echo date("j", $date);
	}
	
	/**
	 *	Gets the calendar events, if any, for the given date.
	 */
	public function getEvents($date) {
		$day = date("d", $date);
	
		foreach(self::$decoded->items as $key => $value) {
			$event_day = date("d", strtotime($value->start->dateTime));
			if ($day === $event_day) {
/* 				echo "<h2>" . date("g:i a", strtotime($value->start->dateTime)) . " - " . $value->summary . "</h2>"; */

					echo "<li><a href=\"#\"><em>" . date("g:i a", strtotime($value->start->dateTime)). "</em> - " . $value->summary . "</a></li>";
			}
		}
	}
	
	
	/* Helper functions */
	
	/**
	 *	Converts a date to 3339 format.
	 *	Mostly for use in Google Calendar URLs
	 */  
	private function date3339($timestamp=0) {
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
	
}

?>