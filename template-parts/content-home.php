<section class="my_row welcome">
	<article class="text_col column">
		<?php
		$middle = get_field('middle_section');
		?>
		<h3><?php echo $middle['title']; ?>
		</h3>
		<p>
			<?php echo $middle['description']; ?>
		</p>
	</article>
	<article class="image_col column">
		<img src="<?php echo $middle['image']; ?>" alt="">
	</article>

</section>

<section class="my_row about_tabs">

	<div class="container">

		<?php $about = get_field('about_section'); ?>

		<h3> <?php  echo $about['title']; ?></h3>
		<div class="my_row">
			<div class="image_col">
				<img class="custom" src="<?php echo $about['image']['url']; ?>" alt="<?php echo $about['image']['name']; ?>">
			</div>
			<div class="text_col">
				<?php  echo $about['description']; ?>
			</div>
		</div>
		<article>
			<!--<ul class="nav nav-tabs" id="myTab" role="tablist">
				<?php /*if ( have_rows( 'about_section' ) ) :
					$count = 0;
					*/?>
					<?php /*while ( have_rows( 'about_section' ) ) : the_row();
						++$count;
						$originalName = get_sub_field('name');
						$array = array(".", ",", " ");
						$name = str_replace($array, "-", $originalName);

					*/?>
						<li class="nav-item" role="presentation">
							<button class="nav-link <?php /*if ($count == 1) { echo "active"; } */?>"
							        id="<?php /*echo $name; */?>-tab"
							        data-bs-toggle="tab"
							        data-bs-target="#about-<?php /*echo $name; */?>"
							        type="button"
							        role="tab"
							        aria-controls="about-<?php /*echo $name; */?>"
							        aria-selected="true">
								<?php /*echo $originalName; */?>
							</button>
						</li>

					<?php /*endwhile; */?>
				<?php /*endif; */?>
			</ul>
			<div class="tab-content" id="myTabContent">
				<?php /*if ( have_rows( 'about_section' ) ) :
						$count = 0;
					*/?>
					<?php /*while ( have_rows( 'about_section' ) ) : the_row();
						++$count;
						$originalName = get_sub_field('name');
						$array = array(".", ",", " ");
						$name = str_replace($array, "-", $originalName);
					*/?>
						<div class="tab-pane fade show <?php /*if ($count == 1) { echo "active"; } */?>"
						     id="about-<?php /*echo $name; */?>"
						     role="tabpanel"
						     aria-labelledby="<?php /*echo $name; */?>-tab">
							<div class="my_row">
								<div class="image_col">
									<img class="custom" src="<?php /*the_sub_field('image'); */?>" alt="">
								</div>
								<div class="text_col">
									<?php /*the_sub_field('description') */?>
								</div>
							</div>
						</div>
					<?php /*endwhile; */?>
				--><?php /*endif; */?>
		</article>
	</div>

</section>
