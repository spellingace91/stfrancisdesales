$(document).ready(function() {

	drawBorders();

	$(window).on('resize', function() {
		drawBorders();
	});

	function drawBorders() {
		// loop through all the event list uls
		$('.calendar-item ul').each(function() {
			
			var eventList = $(this);
		
			// if the height of the event list is less than 63
			// (less than three events for that day)
			if ( eventList.height() < 63 ) {
				
				// change the height of the day's events to 63
				// so the border extends down to the bottom of the event list
				eventList.css("height", "63");
			}
		});
	}
	
});