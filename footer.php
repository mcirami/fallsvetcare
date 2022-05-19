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
					<h3>Center Hours</h3>
					<?php
					$hours = get_field('office_hours', 'options');
					?>
					<p>Monday-Friday: <?php echo $hours['monday-friday']; ?></p>
					<p>Saturday: <?php echo $hours['saturday']; ?></p>
					<p>Sunday: <?php echo $hours['sunday']; ?></p>
				</div>
				<div class="column">
					<h3>Reach Us</h3>
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

		/*$(window).on('scroll', function (event) {
			if ($(window).scrollTop() > 40 && !$('.menu_wrap.mobile').hasClass('open')) {
				$('header').addClass('scroll');
			} else {
				$('header').removeClass('scroll');
			}
		});

		const header = document.querySelector('header');
		const headerHeight = header.clientHeight;
		const topPx = headerHeight * 2;
		document.querySelector('.menu_wrap.mobile').style.top =  "-" + topPx + "px";
		document.querySelector('.site-main').style.paddingTop = headerHeight + "px";

		$(window).on('resize', function() {
			document.querySelector('.site-main').style.paddingTop = header.clientHeight + "px";
		});

		$('.mobile_menu_icon').click(function(e){
			//e.preventDefault();
			const headerHeight = header.clientHeight;
			const topPx = headerHeight * 2;
			document.querySelector('.menu_wrap.mobile').style.top =  "-" + topPx + "px";
			if ($(this).hasClass('open')) {
				document.querySelector('.menu_wrap.mobile').style.top =  "-" + topPx + "px";
			} else {
				document.querySelector('.menu_wrap.mobile').style.top = headerHeight + "px";
			}

			$(this).toggleClass('open');
			$('.menu_wrap.mobile').toggleClass('open');
		});*/


	});
</script>
</body>
</html>
