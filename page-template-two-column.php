<?php

/**
 * Template Name: Two Column
 *
 * The template for displaying a page with 2 column layout with header
 *
 * This is the template that displays a two column layout with header
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Falls_Vet_Care
 */

get_header();

/*$post_id = get_post_meta( 'id' );
$post    = get_post( $post_id );
$blocks  = parse_blocks( $post->post_content );
set_query_var( 'blocks', $blocks );*/

?>

<main id="primary" class="site-main my_row page_template">

	<?php get_template_part( 'template-parts/content', 'page-hero'); ?>

	<?php get_template_part( 'template-parts/content', 'two-column-layout'); ?>

</main>

<?php
get_footer();
?>


