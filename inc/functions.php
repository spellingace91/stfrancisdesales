<?php

	function adoration_schedule (){
		$variable = false;
		if (!$variable && (10 <= date(n) || date(n) <= 4))
		{
			echo '<div class="five columns alpha omega schedule wrapper-section wrapper-box" id="mass">
	<h2>Masses</h2>
	<div class="times-content">
		<div class="day" id="saturday">
			<p class="day-of-the-week">Saturday</p>
			<div class="times"
				<p>8:00 am</p>
				<p>5:00 pm <span>(Anticipated)</span></p>
			</div>
		</div>
	
		<div class="day" id="sunday">
			<p class="day-of-the-week">Sunday</p>
			<div class="times">
				<p>7:30 am</p>
				<p>9:30 am</p>
				<p>11:30 am</p>
				<p>5:00 pm</p>
			</div>
		</div>
		
		<div class="day" id="mon-fri">
			<p class="day-of-the-week">Monday - Friday</p>
			<div class="times"
				<p>6:30 am <span>(Communion Service)</span></p>
				<p>8:00 am</p>
			</div>
		</div>
	
	</div>
</div>

<div class="five columns alpha omega schedule wrapper-section wrapper-box" id="reconciliation">
	<h2>Reconciliation</h2>
	<div class="times-content">
		<div class="day">
			<p class="day-of-the-week">Saturdays</p>
			<div class="times">
				<p>3:30 pm</p>
				<p>by appointment</p>
			</div>
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