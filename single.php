<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>
		<div class="container">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="row">

						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail('large'); // Fullsize image for the single post ?>
							</a>
						<?php endif; ?>
						<!-- /post thumbnail -->

					</div>
					<div class="row">

						<!-- post title -->
						<h1>
							<?php the_title(); ?>
						</h1>
						<!-- /post title -->

						<?php include('inc/tools.php'); ?>

					</div>

					<?php include('inc/stores.php'); ?>

					<div id="info" class="row">

						<?php the_content(); // Dynamic Content ?>

						<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

						<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>


						<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

						<?php comments_template(); ?>

					</div>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

				</article>
				<!-- /article -->

			<?php endif; ?>

		</div> <!-- / container -->

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>