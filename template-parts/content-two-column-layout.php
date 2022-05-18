<section class="two_columns my_row">

	<div class="container">
		<div class="two_col_row">
			<div class="column">

				<?php
				foreach ($blocks as $block) {
					if ($block['blockName'] == 'core/image') {
						echo render_block($block);
					}
				}

				?>
			</div>

			<div class="column">
				<?php

					foreach ($blocks as $block) {
						if ($block['blockName'] == 'core/paragraph') {
							echo render_block($block);
						}
					}
				?>
			</div>
		</div>
	</div>
	
</section>