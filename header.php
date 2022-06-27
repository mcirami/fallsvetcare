<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Navarre_Veterinary_Clinic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<!--<script src="<?php /*echo get_template_directory_uri() . "/js/built.js" */?>" defer></script>-->
	<script src="https://portal.thevethero.com/assets/jquery.js"></script>
	<script src="https://portal.thevethero.com/assets/forms.js" charset="utf-8" defer></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'navarrevetclinic' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="my_row">

				<div class="header_columns">
					<?php if (is_front_page() ) : ?>
						<div class="number_box top w-100 d-flex d-md-none">
							<a class="button blue" href="/contact-us">Contact Us</a>
							<span>
								<img src="<?php echo get_template_directory_uri() . "/images/icon-phone.png"?>" alt="">
							</span>
							<h3><a href="tel:<?php the_field('phone_number', 'options');?>"><?php the_field('phone_number', 'options');?></a></h3>
						</div>
					<?php endif; ?>
					<div class="site-branding">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img src="<?php echo get_template_directory_uri() . "/images/logo.jpg"?>" alt="">
							</a>
							<?php
						endif;
						$navarrevetclinic_description = get_bloginfo( 'description', 'display' );
						if ( $navarrevetclinic_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $navarrevetclinic_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
					<div class="link_column">
						<?php if (is_front_page() ) : ?>
							<div class="my_row number_box top d-none d-md-flex">
								<a class="button blue" href="/contact-us">Contact Us</a>
								<span>
									<img src="<?php echo get_template_directory_uri() . "/images/icon-phone.png"?>" alt="">
								</span>
								<h3><a href="tel:<?php the_field('phone_number', 'options');?>"><?php the_field('phone_number', 'options');?></a></h3>
							</div>
						<?php endif; ?>
						<nav id="site-navigation" class="main-navigation my_row header_right bottom">
							<div class="toggler" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
								<a class="mobile_menu_icon" href="#">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
							<div class="menu_wrap d-none d-lg-block">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
								?>
							</div>
						</nav><!-- #site-navigation -->
					</div>
				</div><!-- header_columns -->
			</div>
		</div>
	</header><!-- #masthead -->
	<div class="menu_wrap mobile d-block d-lg-none">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			)
		);
		?>
	</div>
