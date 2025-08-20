<div class="two_column_layout">
	<div class="container">
	<?php if ( have_rows('about_doctors') ): ?>
		<?php while ( have_rows('about_doctors') ): the_row();
			$name        = get_sub_field('name');
			$desc        = get_sub_field('description');
			$image       = get_sub_field('image'); // {url, alt}
			?>
			<section class="my_row two_col_row bio-card <?php echo get_row_layout() === 'image_left' ? 'image-left' : 'image-right'; ?>">

				<?php if (get_row_layout() == 'image_right') : ?>
					<div class="column text_col">
						<h3><?php echo esc_html($name); ?></h3>
						<p><?php echo wp_kses_post($desc); ?></p>

					</div>

					<div class="column image_col">
						<div class="img-card">
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" decoding="async">
						</div>
					</div>

				<?php else: // image_left ?>
					<div class="column image_col">
						<div class="img-card">
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" decoding="async">
						</div>
					</div>

					<div class="column text_col">
						<h3><?php echo esc_html($name); ?></h3>
						<p><?php echo wp_kses_post($desc); ?></p>
					</div>
				<?php endif; ?>

			</section>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php if(str_contains(get_the_title(), 'About')) : ?>
			<section class="clinic-announcement my-5 d-flex">
				<div class="container text-center">
					<h2 class="announcement-title">WE ARE MOVING!!</h2>
					<p class="announcement-text mb-2">Our new location will be located at:</p>
					<address class="announcement-address mb-0">
						40 Walter Ct.<br>
						Moscow Mills, MO
					</address>
				</div>
			</section>
	<?php endif; ?>

	</div>
</div>
