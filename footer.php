<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Navarre_Veterinary_Clinic
 */

?>

	<footer id="colophon" class="site-footer my_row">
		<div class="container">
			<div class="three_col_section">
				<div class="column">
					<h3>Navarre Beach Veterinary Clinic</h3>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</div>
				<div class="column">
					<?php
					$hours = get_field('office_hours', 'options');
					?>

					<?php if ( have_rows( 'office_hours', 'options' ) ) : ?>
						<?php while ( have_rows( 'office_hours', 'options' ) ) : the_row(); ?>
							<div class="heading_wrap mb-4">
								<h3 class="mb-0"><?php the_sub_field('column_title'); ?></h3>
								<?php if(get_sub_field('sub_title')) : ?>
									<small><?php the_sub_field('sub_title'); ?></small>
								<?php endif; ?>
							</div>

							<?php if ( have_rows( 'days' ) ) : ?>
								<?php while ( have_rows( 'days' ) ) : the_row(); ?>
									<p>
										<?php the_sub_field('day');?>
										<?php the_sub_field('hours');?>
									</p>
								<?php endwhile; ?>
							<?php endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>

				</div>
				<div class="column">
					<h3>Reach Us</h3>
					<?php
						$address = get_field('address', 'options');
					?>
					<p><?php echo $address['line_1']; ?></p>
					<p><?php echo $address['line_2']; ?></p>
					<p><?php echo $address['line_3']; ?></p>
					<div class="social_media">
						<a target="_blank" href="https://www.facebook.com/dr.ginabauman">
							<img class="facebook" src="<?php echo get_template_directory_uri() . "/images/icon-facebook-footer.png"?>" alt="">
						</a>
					</div>
					<div class="contact_info">
						<img src="<?php echo get_template_directory_uri() . "/images/icon-envelope.png"?>" alt="">
						<h3><a class="email" href="mailto:<?php the_field('email', 'options');?>"><?php the_field('email', 'options');?></a></h3>
					</div>
					<div class="contact_info">
						<span>
							<img src="<?php echo get_template_directory_uri() . "/images/icon-phone.png"?>" alt="">
						</span>
						<h3><a class="phone" href="tel:<?php the_field('phone_number', 'options');?>"><?php the_field('phone_number', 'options');?></a></h3>
					</div>
				</div>
			</div>
			<div class="copy">
				<p>&copy; 2022 Navarre Beach Veterinary Clinic</p>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
	jQuery(document).ready(function($) {

	});
</script>
</body>
</html>
