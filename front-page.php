<?php
/**
 * Template Name: Home
 *
 * The template for displaying the home page
 *
 * This is the template that displays the home page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Navarre_Veterinary_Clinic
 */

get_header();

$post_id = get_post_meta( 'id' );
$post    = get_post( $post_id );
$blocks  = parse_blocks( $post->post_content );
set_query_var( 'blocks', $blocks );

?>

<main id="primary" class="site-main my_row">

	<?php get_template_part( 'template-parts/content', 'home-hero'); ?>

	<?php get_template_part( 'template-parts/content', 'home' ); ?>

</main>

<?php
get_footer();
?>