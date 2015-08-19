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
		var image_array_index = '';
		function load_files() {
			$.ajax({
				url: 'dir_listing.php',
				dataType: 'JSON',
				success: function(response){
					for(var i = 0; i < response.files.length; i++){
						image_array_index = i;
						console.log(response.files[i]);
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

		function position_first_image() {
			$('img[img-id="0"]').addClass('current-image');
		}

		

		var current_img_id = 0;
		var next_up;
		// function slide_count_up() {
		// 	next_up = current_img_id+1;
		// 	console.log(next_up);
		// 	if(current_img_id <= image_array.length-3){
		// 		current_img_id++;
				
		// 	}
		// 	else {
		// 		console.log('stop pressing next');
		// 	}	
		// }

		// function slide_count_down(){
		// 	if (current_img_id >= 1) {
		// 		console.log(current_img_id);
		// 		current_img_id--;
		// 		next_up--;
		// 		console.log(current_img_id);
		// 	}else{
		// 		console.log('You need to stop there son');
		// 	}
			
		// }

		function next_img() {
			next_up = current_img_id+1;
			$('img[img-id="' + current_img_id +'"]').animate({
				'left': '-100%'
			}, 1000);
			$('img[img-id="' + next_up +'"]').animate({
				'left': '0'
			}, 1000);
			current_img_id = next_up;
		}

		function prev_image() {
			next_up = current_img_id -1;
			console.log('current_img_id' + current_img_id);
			console.log('next_up' + next_up);
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