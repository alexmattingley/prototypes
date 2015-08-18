<!DOCTYPE html>
<html>
	<head>
	  <meta charset="utf-8">
	  <title>index</title>
	</head>
	<body>

	</body>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script>
		function load_files() {
			$.ajax({
				url: 'dir_listing.php',
				dataType: 'JSON',
				//data: {'files' : files},
				success: function(response){
					console.log(response);
				}
			});
		}

		$(document).ready(function(){
			load_files();
		});
	</script>
</html>