<?php /* Template Name: Home */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		   <div class="row">
		        
		   		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		   			<?php include('inc/grid.php'); ?>

		   		<?php endwhile; ?>

		   		<?php else: ?>

		   			<!-- article -->
		   			<article>

		   				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

		   			</article>
		   			<!-- /article -->

		   		<?php endif; ?>

		    </div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
