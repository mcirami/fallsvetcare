<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Navarre_Veterinary_Clinic
 */

get_header();
?>

	<main id="primary" class="site-main my_row blog_template">

		<?php get_template_part( 'template-parts/content', 'page-hero'); ?>



		<?php
		while ( have_posts() ) :
			the_post();
		?>

			<div class="container">
				<div class="two_columns">
					<div class="single_post_column">

						<?php echo get_the_content(); ?>

						<div class="my_row">
							<?php
							the_post_navigation(
								array(
									'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'navarrevetclinic' ) . '</span> <span class="nav-title">%title</span>',
									'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'navarrevetclinic' ) . '</span> <span class="nav-title">%title</span>',
								)
							);?>
						</div>

						<div class="my_row comments">
							<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
							?>
						</div>

					</div>
					<div class="sidebar">
						<?php get_sidebar(); ?>
					</div>

				</div>
			</div>



<?php

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
