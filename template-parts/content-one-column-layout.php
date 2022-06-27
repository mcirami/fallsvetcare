<section class="one_column my_row">

	<div class="container">
		<div class="my_row">
			<?php

			foreach ($blocks as $block) {
				echo render_block($block);
			}
			?>
		</div>
	</div>

</section>