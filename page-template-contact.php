<?php
/**
 * Template Name: Contact
 *
 * The template for displaying the contact page
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

<main id="primary" class="site-main my_row page_template contact">

	<?php get_template_part( 'template-parts/content', 'page-hero'); ?>

	<div class="container">
		<div class="two_columns">

			<div class="column">

				<h2>Let's Connect</h2>

				<?php
				$address = get_field('address', 'options');
				?>
				<p><?php echo $address['line_1']; ?></p>
				<p><?php echo $address['line_2']; ?></p>
				<p><?php echo $address['line_3']; ?></p>
				<div class="contact_info">
					<span>
						<img src="<?php echo get_template_directory_uri() . "/images/icon-envelope.png"?>" alt="">
					</span>
					<h3>
						<a class="email" href="mailto:<?php the_field('email', 'options');?>"><?php the_field('email', 'options');?></a>
					</h3>
				</div>
				<div class="contact_info">
					<span>
						<img src="<?php echo get_template_directory_uri() . "/images/icon-phone.png"?>" alt="">
					</span>
					<h3>
						<a class="phone" href="tel:<?php the_field('phone_number', 'options');?>"><?php the_field('phone_number', 'options');?></a>
					</h3>
				</div>

			</div>

			<div class="column">

				<?php

				foreach ($blocks as $block) {

					if ( $block['blockName'] != 'core/heading' ) {
						echo do_shortcode( render_block( $block ) );
					} else {
						echo render_block( $block );
					}
				}
				?>

			</div>

		</div>
	</div>

</main>

<?php
get_footer();
?>
