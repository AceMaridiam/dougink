<?php 

	if(in_array('pen', get_field('tools'))) {
		echo '<i class="fa fa-pencil" aria-hidden="true"></i>';
	}
	if(in_array('compass', get_field('tools'))) {
		echo '<p>Pen</p>';
	}
	if(in_array('lightbox', get_field('tools'))) {
		echo '<p>Pen</p>';
	}

?>