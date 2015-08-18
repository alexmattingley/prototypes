<?php 

	$images_array = glob("images/*.jpg");
	$success = false;
	if($images_array === false) {
		$errors[] = 'glob operation failed';
	}else if (count($images_array) == 0) {
		$errors[] = 'There are no files';
	}
	else {
		$errors = [];
		$success = true;
	}
	$output = ['success' => $success, 'errors' => $errors, 'files' => $images_array];
	echo json_encode($output);

	//print_r($images_array);

// look up how to json encode a php variable
?>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
	function load_files() {
		console.log('hello load_files');
	}

	$(document).ready(function(){
		load_files();
	});
</script>