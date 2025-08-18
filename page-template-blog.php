<?php

/**
 * Template Name: Blog Template
 *
 * The template for displaying the blog page with header
 *
 * This is the template that displays the blog page with header
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Falls_Vet_Care
 */

get_header();

$args      = array(
	'posts_per_page' => - 1,
	'post_type'      => 'post',
);
$the_query = new WP_Query( $args );

?>

<main id="primary" class="site-main my_row blog_template">

	<?php get_template_part( 'template-parts/content', 'page-hero'); ?>


	<div class="container">
		<div class="two_columns">
			<div class="posts_column">
				<?php

				while ( $the_query->have_posts() ) :
						$the_query->the_post();

					get_template_part( 'template-parts/content', 'posts');

				endwhile;

				wp_reset_postdata(); ?>

			</div>

			<div class="sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

</main>

<?php
get_footer();
?>
