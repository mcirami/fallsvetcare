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
									'prev_text' => '<span class="nav-subtitle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
									  <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
									</svg>' . esc_html__( 'Previous:', 'navarrevetclinic' ) . '</span> <span class="nav-title">%title</span>',
									'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'navarrevetclinic' ) . '</span> <span class="nav-title">
									%title
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
										<path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
									</svg>
									</span>',
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
