<?php
	echo 'Ash Wednesday: '.date("l, F j, Y" ,strtotime("-46 days", easter_date(date("Y")))).'<br />';
	echo 'Palm Sunday: '.date("l, F j, Y" ,strtotime("last sunday", easter_date(date("Y")))).'<br />';
	echo 'Holy Thursday: '.date("l, F j, Y" ,strtotime("last thursday", easter_date(date("Y")))).'<br />';
	echo 'Good Friday: '.date("l, F j, Y" ,strtotime("last friday", easter_date(date("Y")))).'<br />';
	echo 'Easter: '.date("l, F j, Y" ,easter_date(date("Y"))).'<br />';
	echo 'Ascension: '.date("l, F j, Y" ,strtotime("+39 days", easter_date(date("Y")))).'<br />';
	echo 'Pentecost: '.date("l, F j, Y" ,strtotime("+49 days", easter_date(date("Y")))).'<br />';
	echo 'Advent (1st): '.date("l, F j, Y" ,strtotime("-4 weeks sunday", mktime(0,0,0,12,25,date("Y")))).'<br />';
	echo 'Advent (2nd): '.date("l, F j, Y" ,strtotime("-3 weeks sunday", mktime(0,0,0,12,25,date("Y")))).'<br />';
	echo 'Advent (3rd): '.date("l, F j, Y" ,strtotime("-2 weeks sunday", mktime(0,0,0,12,25,date("Y")))).'<br />';
	echo 'Advent (4th): '.date("l, F j, Y" ,strtotime("-1 weeks sunday", mktime(0,0,0,12,25,date("Y")))).'<br />';
	echo 'Christmas: '.date("l, F j, Y" ,mktime(0,0,0,12,25,date("Y"))).'<br />';
	echo 'Epiphany: '.date("l, F j, Y" ,strtotime("+12 days", mktime(0,0,0,12,25,date("Y")))).'<br />';
	if(date("l" ,strtotime("+12 days", mktime(0,0,0,12,25,date("Y"))))=="Sunday"){
		echo 'Feast of the Baptism of Christ: '.date("l, F j, Y" ,strtotime("+13 days", mktime(0,0,0,12,25,date("Y")))).'<br />';
	}else{
		echo 'Feast of the Baptism of Christ: '.date("l, F j, Y" ,strtotime("next sunday", mktime(0,0,0,1,6,date("Y")+1))).'<br />';
	}
?>