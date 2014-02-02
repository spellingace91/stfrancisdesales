<?php
	//Set time zone to location of parish
	date_default_timezone_set('America/Phoenix');
	
	//First iteration before saving as variables just to test calculations
	/*
	echo 'Ash Wednesday: '.date("l, F j, Y" ,strtotime("-46 days", easter_date(date("Y")))).'<br />';
	echo 'Palm Sunday: '.date("l, F j, Y" ,strtotime("last sunday", easter_date(date("Y")))).'<br />';
	echo 'Holy Thursday: '.date("l, F j, Y" ,strtotime("last thursday", easter_date(date("Y")))).'<br />';
	echo 'Good Friday: '.date("l, F j, Y" ,strtotime("last friday", easter_date(date("Y")))).'<br />';
	echo 'Easter: '.date("l, F j, Y" ,easter_date(date("Y"))).'<br />';
	echo 'Ascension*: '.date("l, F j, Y" ,strtotime("+39 days", easter_date(date("Y")))).' (observed on '.date("l, F j, Y" ,strtotime("next sunday", strtotime("+39 days", easter_date(date("Y"))))).')<br />';
	echo 'Pentecost: '.date("l, F j, Y" ,strtotime("+49 days", easter_date(date("Y")))).'<br />';
	echo 'Solemnity of the Assumption of the Blessed Virgin Mary*: '.date("l, F j, Y" ,mktime(0,0,0,8,15,date("Y"))).'<br />';
	echo 'Solemnity of all Saints*: '.date("l, F j, Y" ,mktime(0,0,0,11,1,date("Y"))).'<br />';
	echo 'Solemnity of the Immaculate Conception*: '.date("l, F j, Y" ,mktime(0,0,0,12,8,date("Y"))).'<br />';
	echo 'Advent (1st): '.date("l, F j, Y" ,strtotime("-4 weeks sunday", mktime(0,0,0,12,25,date("Y")))).'<br />';
	echo 'Advent (2nd): '.date("l, F j, Y" ,strtotime("-3 weeks sunday", mktime(0,0,0,12,25,date("Y")))).'<br />';
	echo 'Advent (3rd): '.date("l, F j, Y" ,strtotime("-2 weeks sunday", mktime(0,0,0,12,25,date("Y")))).'<br />';
	echo 'Advent (4th): '.date("l, F j, Y" ,strtotime("-1 weeks sunday", mktime(0,0,0,12,25,date("Y")))).'<br />';
	echo 'Christmas*: '.date("l, F j, Y" ,mktime(0,0,0,12,25,date("Y"))).'<br />';
	echo 'Solemnity of Mary, Mother of God*: '.date("l, F j, Y" ,mktime(0,0,0,1,1,date("Y"))).'<br />';
	echo 'Epiphany: '.date("l, F j, Y" ,strtotime("+12 days", mktime(0,0,0,12,25,date("Y")))).'<br />';
	if(date("l" ,strtotime("+12 days", mktime(0,0,0,12,25,date("Y"))))=="Sunday"){
		echo 'Feast of the Baptism of Christ: '.date("l, F j, Y" ,strtotime("+13 days", mktime(0,0,0,12,25,date("Y")))).'<br />';
	}else{
		echo 'Feast of the Baptism of Christ: '.date("l, F j, Y" ,strtotime("next sunday", mktime(0,0,0,1,6,date("Y")+1))).'<br />';
	}
	*/
	
	//Creation of the array for the dates
	$dates = array();
	
	//Pull the current time from the server and set it to $today
	$today = getdate();
	
	//Determine what year to use for the calculations
	$year = ($today[0] < strtotime("-4 weeks sunday", mktime(0,0,0,12,25,$today[year])) ? date("Y") : date("Y")+1);
	
	//Calculate the dates and store them in the $dates array in format day => date
	$dates['Ash Wednesday'] = strtotime("-46 days", easter_date($year));
	$dates['Palm Sunday'] = strtotime("last sunday", easter_date($year));
	$dates['Holy Thursday'] = strtotime("last thursday", easter_date($year));
	$dates['Good Friday'] = strtotime("last friday", easter_date($year));
	$dates['Easter'] = easter_date($year);
	$dates['Ascension'] = strtotime("+39 days", easter_date($year));
	$dates['Ascension Observed'] = strtotime("next sunday", strtotime("+39 days", easter_date($year)));
	$dates['Pentecost'] = strtotime("+49 days", easter_date($year));
	$dates['Solemnity of the Assumption of the Blessed Virgin Mary'] = mktime(0,0,0,8,15,$year);
	$dates['Solemnity of All Saints'] = mktime(0,0,0,11,1,$year);
	$dates['Solemnity of the Immaculate Conception'] = mktime(0,0,0,12,8,$today[year]);
	$dates['1st Sunday of Advent'] = ($today[0] < strtotime("-4 weeks sunday", mktime(0,0,0,12,25,$today[year]))+86400 ? strtotime("-4 weeks sunday", mktime(0,0,0,12,25,$today[year])) : strtotime("-4 weeks sunday", mktime(0,0,0,12,25,$year)));
	$dates['2nd Sunday of Advent'] = strtotime("-3 weeks sunday", mktime(0,0,0,12,25,$today[year]));
	$dates['3rd Sunday of Advent'] = strtotime("-2 weeks sunday", mktime(0,0,0,12,25,$today[year]));
	$dates['4th Sunday of Advent'] = strtotime("-1 weeks sunday", mktime(0,0,0,12,25,$today[year]));
	$dates['Christmas'] = mktime(0,0,0,12,25,$today[year]);
	$dates['Solemnity of Mary, Mother of God'] = (date("n") == 1 ? mktime(0,0,0,1,1,$today[year]) : mktime(0,0,0,1,1,$year));
	$dates['Epiphany'] = strtotime("+12 days", mktime(0,0,0,12,25,date("Y")));
	if(date("l" ,strtotime("+12 days", mktime(0,0,0,12,25,date("Y"))))=="Sunday"){
		$dates['Feast of the Baptism of Christ'] = strtotime("+13 days", mktime(0,0,0,12,25,date("Y")));
	} else {
		$dates['Feast of the Baptism of Christ'] = strtotime("next sunday", mktime(0,0,0,1,6,date("Y")+1));
	}
	
	//Display the two years that the calculations are using for testing purposes
	//echo '$today[year] = '.$today[year].'$year = '.$year.'<br /><br />';
	
	//Display the dates in static format from the array for testing only
	/*
	echo 'Ash Wednesday: '.date("l, F j, Y", $dates['Ash Wednesday']).'<br />';
	echo 'Palm Sunday: '.date("l, F j, Y", $dates['palm_sunday']).'<br />';
	echo 'Holy Thursday: '.date("l, F j, Y", $dates['holy_thursday']).'<br />';
	echo 'Good Friday: '.date("l, F j, Y", $dates['good_friday']).'<br />';
	echo 'Easter: '.date("l, F j, Y", $dates['easter']).'<br />';
	echo 'Ascension*: '.date("l, F j, Y", $dates['ascension']).' (Observed on'.date("l, F j, Y", $dates['ascension_observed']).'<br />';
	echo 'Pentecost: '.date("l, F j, Y", $dates['pentecost']).'<br />';
	echo 'Solemnity of the Assumption of the Blessed Virgin Mary*: '.date("l, F j, Y", $dates['assumption_mary']).'<br />';
	echo 'Solemnity of all Saints*: '.date("l, F j, Y", $dates['all_saints']).'<br />';
	echo 'Solemnity of the Immaculate Conception*: '.date("l, F j, Y", $dates['immaculate_conception']).'<br />';
	echo 'Advent (1st): '.date("l, F j, Y", $dates['advent_1']).'<br />';
	echo 'Advent (2nd): '.date("l, F j, Y", $dates['advent_2']).'<br />';
	echo 'Advent (3rd): '.date("l, F j, Y", $dates['advent_3']).'<br />';
	echo 'Advent (4th): '.date("l, F j, Y", $dates['advent_4']).'<br />';
	echo 'Christmas: '.date("l, F j, Y", $dates['christmas']).'<br />';
	echo 'Solemnity of Mary, Mother of God*: '.date("l, F j, Y", $dates['solemnity_mary']).'<br />';
	echo 'Epiphany: '.date("l, F j, Y", $dates['epiphany']).'<br />';
	echo 'Feast of the Baptism of Christ: '.date("l, F j, Y", $dates['feast_baptism']).'<br />';
	echo '<br />';
	*/
	
	//Sort the $dates array in ascending order by time
	asort($dates);
	
	//Display the list of dates in the newly correct order
	foreach ($dates as $day => $date) {
		if($date > $today[0]-86400){ echo $day.': '.date("l, F j, Y", $date).'<br />'; }
		if($date == $dates['1st Sunday of Advent'] && $today[0] < $dates['1st Sunday of Advent']){ break; }
	}
?>