<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Navarre_Veterinary_Clinic
 */

get_header();

global $wp_query;
?>

	<main id="primary" class="site-main my_row blog_template">

		<section class="my_row archive_title">
			<article class="text_wrap">
				<h2><?php echo $wp_query->found_posts; ?> Search results for: <?php echo the_search_query(); ?></h2>
			</article>
		</section>

		<div class="container">
			<div class="two_columns">
				<div class="posts_column">
					<?php if ( have_posts() ) :
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'posts');

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div>

				<div class="sidebar">
					<?php get_sidebar(); ?>
				</div>

			</div>
		</div>

	</main><!-- #main -->

<?php

get_footer();
