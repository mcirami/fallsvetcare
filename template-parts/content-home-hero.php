<?php
global $blocks;
$bgImage = get_the_post_thumbnail_url();
?>

<section class="hero my_row" style="background: url(<?php echo $bgImage; ?>) no-repeat; background-size: cover; ">
	<article class="text_wrap">
		<div class="container">
			<?php
			foreach ($blocks as $block) {
				if ($block['blockName'] == 'core/heading') {
					echo render_block($block);
				}
			}

			?>

			<?php
			foreach ($blocks as $block) {
				if ($block['blockName'] == 'core/paragraph') {
					echo render_block($block);
				}
			}

			?>
			<?php
			foreach ($blocks as $block) {
				if ($block['blockName'] == 'core/buttons') {
					echo render_block($block);
				}
			}

			?>
			<!--<a class="button blue" href="<?php /*echo get_site_url() . "/make-an-appointment"; */?>">Make An Appointment</a>-->
		</div>
	</article>
</section>

