<section class="three_column_grid my_row">

	<div class="container">

		<section class="grid_wrap">

			<?php
				if ( have_rows( 'staff_members' ) ) :
					while ( have_rows( 'staff_members' ) ) : the_row();

					$image = get_sub_field('image');
				?>
						<article class="grid_column">
							<div class="image_wrap">
								<img class="custom" src="<?php echo $image["url"]; ?>" alt="<?php echo $image["name"]; ?>" />
							</div>
							<div class="text_wrap">
								<h3><?php the_sub_field('name'); ?></h3>
								<?php the_sub_field('description'); ?>
							</div>
						</article>

					<?php endwhile;
				endif; ?>

		</section>

	</div>

</section>