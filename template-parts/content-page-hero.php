<?php
	$bgImage = get_the_post_thumbnail_url();

?>

<section class="hero my_row" style="background: url(<?php echo $bgImage; ?>) no-repeat; background-size: cover; background-position: center;">
	<div class="container">
		<div class="number_box alt">
			<span>
				<img src="<?php echo get_template_directory_uri() . "/images/icon-phone-white.png"?>" alt="">
			</span>
			<h3><a href="tel:<?php the_field('phone_number', 'options');?>"><?php the_field('phone_number', 'options');?></a></h3>
		</div>
		<article class="text_wrap">
			<h2><?php echo the_title(); ?></h2>
		</article>
	</div>
</section>

