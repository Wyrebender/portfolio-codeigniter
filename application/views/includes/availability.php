<?php
	
	$available = true;
	
	if($available === true)
	{
		echo '<img src="'.base_url().'images/icon_check.jpg" alt="check box" /><p>I am currently available <strong>for selected projects</strong>.</p><br />
		<p>Please call me or submit project details though the <a href="'.base_url().'index.php/contact">contact form</a>.  From there, we can arrange a time to discuss the possibilities of working together.</p>';
	}
	else
	{
		echo '<img src="'.base_url().'images/icon_cross.jpg" alt="x box" /><p>I am not taking any freelance project at this time.</p><br /> 
		<p>Please check back soon to see if I am available.</p>';
	}
	
?>