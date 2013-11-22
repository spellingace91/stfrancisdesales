<?php

	function adoration_schedule (){
		$variable = false;
		if (!$variable && (10 <= date(n) || date(n) <= 4))
		{
			echo '<div class="schedule wrapper-section wrapper-box two" id="mass">
	<h2>Holy Sacrifice of the Mass</h2>
	<div class="times-content">
		<div class="day" id="saturday">
			<p class="day-of-the-week">Saturday</p>
			<p class="times">8:00 am</p>
			<p class="times">5:00 pm <span>(Anticipated)</span></p>
		</div>
	
		<div class="day" id="sunday">
			<p class="day-of-the-week">Sunday</p>
			<p class="times">7:30 am</p>
			<p class="times">9:30 am</p>
			<p class="times">11:30 am</p>
			<p class="times">5:00 pm</p>
		</div>
		
		<div class="day" id="mon-fri">
			<p class="day-of-the-week">Monday - Friday</p>
			<p class="times">6:30 am <span>(Communion Service)</span></p>
			<p class="times">8:00 am</p>
		</div>
	
	</div>
</div>

<div class="schedule wrapper-section wrapper-box two" id="reconciliation">
	<h2>Reconciliation</h2>
	<div class="times-content">
		<div class="day">
			<p class="day-of-the-week">Saturdays</p>
			<p class="times">3:00 pm</p>
			<p class="times">by appointment</p>
		</div>
	</div>
</div>';
		} else {
			echo '
				<div class="schedule wrapper-section wrapper-box two">
	      	<h2>Mass</h2>
	      </div>
	      
	      <div class="schedule wrapper-section wrapper-box two">
	      	<h2>Reconciliation</h2>
	      </div>
			';
		}
	}
	
?>