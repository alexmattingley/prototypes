<?php

print_r($_POST);

foreach ($_POST as $key => $value) {

	switch ($key) {
		case 'first_name':
			if(preg_match('/.{2,}/', $value)){
				print("<br>checking $key: " . $value . '<br>');
			}
			else{
				print('<br>Thats not a valid name entry<br>');
			}
			break;
		case 'age':
			print("checking $key: " . $value . '<br>');
			break;
		case 'phone':
			print("checking $key: " . $value . '<br>');
			break;
		case 'username':
			print("checking $key: " . $value . '<br>');
			break;
		case 'bonus':
			print("checking $key: " . $value . '<br>');
			break;
		default:
			print('everything else<br>');
			break;
	}
}


?>