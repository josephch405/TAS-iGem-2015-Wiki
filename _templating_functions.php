<?php
	function insertButton($columns, $color, $img, $href, $subtitle, $caption) {
		echo "<div class='col-lg-{$columns}'>
				<a href='{$href}'>
					<div class='igem_button {$color}'>
						<img src='{$img}'>
						<div class='button_description'>
							<h2>{$subtitle}</h2>									
							<p>{$caption}</p>
						</div>
					</div>
				</a>
			</div>";
	}

	function insertButtonWithoutCol($color, $img, $href, $subtitle, $caption) {
		echo "
				<a href='{$href}'>
					<div class='igem_button {$color}'>
						<img src='{$img}'>
						<div class='button_description'>
							<h2>{$subtitle}</h2>									
							<p>{$caption}</p>
						</div>
					</div>
				</a>
			";
	}
?>
