<!DOCTYPE html>
<html>
	<head>
	  <meta charset="utf-8">
	  <title>index</title>
	</head>
	<body>
		<div id="image_container">
			<?php 
				$images_array = glob("images/*.jpg");
				for($i = 0; $i <= count($images_array); $i++) {
					//print("<img src='".$images_array[$i]."' alt=''>");
					//print("<img src='{$images_array[$i]}' alt=''>");
					?><img src='<?=$images_array[$i];?>' alt=''><?php
				}

			?>

		</div>

	</body>
</html>

