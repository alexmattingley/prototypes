<?php

print_r($_POST);

foreach ($_POST as $key => $value) {

	switch ($key) {
		case 'first_name':
			print('<br>checking first_name: ' . $value . '<br>');
			break;
		case 'age':
			print('checking age: ' . $value . '<br>');
			break;
		case 'phone':
			print('checking phone: ' . $value . '<br>');
			break;
		case 'username':
			print('checking username: ' . $value . '<br>');
			break;
		case 'bonus':
			print('checking bonus: ' . $value . '<br>');
			break;
		default:
			print('everything else<br>');
			break;
	}
}


?>