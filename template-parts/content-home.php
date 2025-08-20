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

<?php if ( have_rows( 'review_slider' ) ) : ?>
	<section class="my_row review_slider">
		<div class="container">
			<h3><?php the_field('review_section_title'); ?></h3>
			<!-- Slider main container -->
			<div class="swiper">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">

					<!-- Slides -->
					<?php while ( have_rows( 'review_slider' ) ) : the_row();
						$starsCount = get_sub_field( 'stars' );
						?>
						<div class="swiper-slide">
							<div class="content_wrap">
								<h4><?php the_sub_field('name');?></h4>
								<div class="stars_row">
									<?php
									for($x = 1; $x <= $starsCount; $x++ ) {
										echo "<img src=" . get_template_directory_uri() . "/images/review-star.png alt='star' />";
									}
									?>
								</div>
								<p><?php the_sub_field('review_text');?></p>
							</div>
						</div>
					<?php endwhile; ?>

				</div>
				<!-- If we need pagination -->
				<div class="swiper-pagination"></div>

				<!-- If we need navigation buttons -->
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		</div>
	</section>
<?php endif; ?>
