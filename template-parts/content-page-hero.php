<?php
	$bgImage = get_the_post_thumbnail_url();

	$bgPosition = str_contains(get_the_title(), 'Staff') ? "top" : "center 65%";
?>

<section class="hero my_row <?php if ($bgImage == null) { echo "no_bg"; } ?>" style="background: url(<?php echo $bgImage; ?>) no-repeat; background-size: cover; background-position: <?php echo $bgPosition; ?>; padding: 4% 0;">
	<div class="container">
		<article class="text_wrap">
			<h2><?php echo the_title(); ?></h2>
		</article>
	</div>
</section>

