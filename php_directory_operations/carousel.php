<!DOCTYPE html>
<html>
	<head>
	  <meta charset="utf-8">
	  <title>Carousel</title>
	  <link rel="stylesheet" href="style.css">
	  <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	</head>
	<body>
		<button type="button" id="load_files">Bring on the Images</button>

		<div class="image-container">
			<!-- Images go here -->
		</div>
		<button class="prev-img">Previous</button>
		<button class="next-img">Next</button>
	</body>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script>

		var image_array = [''];
		var current_img_id = 0;
		var next_up;

		/************************
		Function: Load_files
		Purpose: calls the data from dir_listing and creates the images
		Params: none
		Globals: image_array
		*************************/

		function load_files() {
			$.ajax({
				url: 'dir_listing.php',
				dataType: 'JSON',
				success: function(response){
					for(var i = 0; i < response.files.length; i++){
	
						image_array[i] = response.files[i];
						var indiv_img = $('<img>',{
							'src': response.files[i],
							'img-id': i
						});
						

						$('.image-container').append(indiv_img);
						position_first_image();
					}
				}
			});
		}

		//End Load_files

		/************************
		Function: position_first_image
		Purpose: Moves the first image into the default slot
		Params: none
		Globals: None
		**********************/

		function position_first_image() {
			$('img[img-id="0"]').addClass('current-image');
		}

		//end position_first_image

		/************************
		Function: next_img
		Purpose: this moves the current image left, and the next image into position
		Params: none
		Globals: next_up, current_img_id
		**********************/
		
		function next_img() {
			if(current_img_id < image_array.length-1){
				next_up = current_img_id+1;
				$('img[img-id="' + current_img_id +'"]').animate({
					'left': '-100%'
				}, 1000);
				$('img[img-id="' + next_up +'"]').animate({
					'left': '0'
				}, 1000);
				current_img_id = next_up;
			}
		}

		//end next_img

		/************************
		Function: prev_img
		Purpose: this moves the current image right, and the next image into position
		Params: none
		Globals: next_up, current_img_id
		**********************/

		function prev_image() {
			next_up = current_img_id -1;
			if(current_img_id >= 1){
				$('img[img-id="' + current_img_id +'"]').animate({
					'left': '100%'
				}, 1000);
				$('img[img-id="' + next_up +'"]').animate({
					'left': '0'
				}, 1000);
				
			}
			current_img_id = next_up;
		}

		//end prev_img

		//all of the click functions that call all of the functions for the carousel and regex

		$('#load_files').click(function(){
			load_files();
		});

		$('.prev-img').click(function(){
			prev_image();
		});

		$('.next-img').click(function(){
			next_img();
		});

		$(document).ready(function(){
			
		});
	</script>
</html>