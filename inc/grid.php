<div class="col-md-4 col-sm-4">
	<?php
		$post_image_id = get_post_thumbnail_id($post_to_use->ID);
			if ($post_image_id) {
				$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
				if ($thumbnail) (string)$thumbnail = $thumbnail[0];
		}
	?>
	<a href="<?php the_permalink(); ?>">
		<div class="post" style="background-image: url('<?php echo $thumbnail; ?>')">
		    <div class="date">
		        <?php the_date(); ?>
		    </div>
		    <p><?php //the_content(); ?></p>
		</div>
	</a>
</div>