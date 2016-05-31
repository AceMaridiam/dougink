<?php 

	if(in_array('pen', get_field('tools'))) {
		echo '<a href="#" data-toggle="pen" title="Pen" data-content="Micro .005"><img src="' . get_template_directory_uri() . '/lib/images/pen.png" alt="Pen icon" class="tool-icon" /></a>';
	}
	if(in_array('compass', get_field('tools'))) {
		echo '<img src="' . get_template_directory_uri() . '/lib/images/compass.png" alt="Compass icon" class="tool-icon" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover"/>';
	}
	if(in_array('lightbox', get_field('tools'))) {
		echo '<img src="' . get_template_directory_uri() . '/lib/images/lightbox.png" alt="Lightbox icon" class="tool-icon" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover"/>';
	}

?>
