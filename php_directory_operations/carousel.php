<!DOCTYPE html>
<html>
	<head>
	  <meta charset="utf-8">
	  <title>Carousel</title>
	</head>
	<body>
		<button type="button">Bring on the Images</button>
		<div class="image-container">
			
		</div>
	</body>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script>

		var image_array = [''];
		function load_files() {
			$.ajax({
				url: 'dir_listing.php',
				dataType: 'JSON',
				success: function(response){
					for(var i = 0; i < response.files.length; i++){
						console.log(response.files[i]);
						image_array[i] = response.files[i];
						var indiv_img = $('<img>',{
							'src': response.files[i]
						});
						$('.image-container').append(indiv_img);
					}
				}
			})
		}



		$('button').click(function(){
			load_files();
		});

		$(document).ready(function(){
			
		});
	</script>
</html>