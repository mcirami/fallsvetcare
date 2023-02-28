<?php
/**
 * Template Name: Three Column Grid
 *
 * The template for displaying the staff page
 *
 * This is the template that displays the staff page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Navarre_Veterinary_Clinic
 */

get_header();

?>

<main id="primary" class="site-main my_row">

	<?php get_template_part( 'template-parts/content', 'page-hero'); ?>

	<?php get_template_part( 'template-parts/content', 'three-column-grid' ); ?>

</main>

<?php
get_footer();
?>

