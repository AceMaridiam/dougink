<?php

	if(get_field('zazzle')) {
		echo '<a target="_blank" class="btn btn-store" href="' . get_field('zazzle') . '">Zazzle</a>';
	}

?>
<?php

	if(get_field('cafe_press')) {
		echo '<a target="_blank" class="btn btn-store" href="' . get_field('cafe_press') . '">Cafe Press</a>';
	}

?>