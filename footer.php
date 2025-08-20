<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Falls_Vet_Care
 */

?>

	<footer id="colophon" class="site-footer my_row">
		<div class="container">
			<div class="three_col_section">
				<div class="column">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img class="logo mw-20" src="<?php echo get_template_directory_uri() . "/images/logo-white.png"?>" alt="">
					</a>
					<?php
					$address = get_field('address', 'options');
					?>
					<p class="mb-0"><?php echo $address['line_2']; ?></p>
					<p>	<?php  echo $address['line_3']; ?></p>
					<div class="phone_wrap d-flex justify-content-center justify-content-md-start number_box footer w-100 mb-2">
						<span>
							<img src="<?php echo get_template_directory_uri() . "/images/icon-envelope-white.png"?>" alt="">
						</span>
						<p><a class="email" href="mailto:<?php the_field('email', 'options');?>"><?php the_field('email', 'options');?></a></p>
					</div>
					<div class="phone_wrap d-flex justify-content-center justify-content-md-start number_box footer w-100 mb-2">
						<span>
							<img src="<?php echo get_template_directory_uri() . "/images/icon-phone-white.png"?>" alt="">
						</span>
						<p><a class="phone" href="tel:<?php the_field('phone_number', 'options');?>"><?php the_field('phone_number', 'options');?></a></p>
					</div>
					<div class="phone_wrap d-flex justify-content-center justify-content-md-start number_box footer w-100">
						<span>
							<img src="<?php echo get_template_directory_uri() . "/images/sms-icon-white.png"?>" alt="">
						</span>
						<p><a class="phone" href="tel:<?php the_field('phone_number_two', 'options');?>"><?php the_field('phone_number_two', 'options');?></a></p>
					</div>
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
					<h3 class="mb-4">Useful Links</h3>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
					<div class="social_media footer w-100">
						<?php if( have_rows('social_media', 'options') ): ?>
							<?php while( have_rows('social_media', 'options') ): the_row(); ?>
								<a class="icon" target="_blank" href="<?php the_sub_field('social_media_url');?>">
									<?php $image =  get_sub_field('social_media_icon');?>
									<img src="<?php echo $image['url'];?>" alt="">
								</a>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="copy">
			<p>&copy; 2025 Falls Vet Care</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
