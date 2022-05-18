<?php

		$image = get_the_post_thumbnail_url();
		$title = get_the_title();
		$permalink = get_permalink();
		?>

		<div class="post_column">

			<?php if ($image) : ?>
				<div class="image_wrap">
					<a href="<?php echo $permalink; ?>">
						<img src="<?php  echo $image; ?>" alt="<?php echo $title; ?>">
					</a>
				</div>
			<?php endif; ?>

			<p class="date"><?php echo get_the_date(); ?></p>

			<a href="<?php echo $permalink; ?>">
				<h2><?php echo $title; ?></h2>
			</a>

			<p class="excerpt">
				<?php echo get_the_excerpt(); ?>
			</p>
			<a href="<?php echo $permalink; ?>">Read More -></a>
		</div>
