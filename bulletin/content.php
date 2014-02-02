							<h1>THIS IS WHERE THE CONTENT GOES!!!!!1!!</h1>
							<?php
								date_default_timezone_set('America/Phoenix');
								$i = 1;
								while ($i < 7) {
									$date = (date(D)=="Sun" ? date(Ymd).B : date(Ymd, strtotime('-'.$i.' week sunday')));
									echo '<a href="http://content.seekandfind.com/bulletins/05/0387/'.$date.'B.pdf">'.date("F j, Y", strtotime($date)).'</a><br />';
									$i++;
								}
							?>