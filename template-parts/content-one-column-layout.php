<section class="one_column my_row">

	<div class="container">
		<div class="my_row">
			<?php

			foreach ($blocks as $block) {
				if ($block['blockName'] == 'core/paragraph') {
					echo render_block($block);
				} else if (get_the_ID() == 101) {
					echo render_block($block);
				}
			}
			?>
		</div>
	</div>

</section>