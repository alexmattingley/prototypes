<?php

print_r($_POST);

foreach ($_POST as $key => $value) {

	switch ($key) {
		case 'first_name':
			if(preg_match('/.{2,}/', $value)){
				print("<br>checking $key: " . $value . '<br>');
			}else{
				print('<br>Thats not a valid name entry<br>');
			}
			break;
		case 'age':
			if(preg_match('/[0-9]{1,3}/', $value)){
				print("checking $key: " . $value . '<br>');
			}else{
				print("Wow your old, like really really old. Maybe try to enter your actual age? cause I know your not $value");
			}
			break;
		case 'phone':
			if (preg_match('/([0-9]{3} [0-9]{3} [0-9]{4})|([0-9]{3}-[0-9]{3}-[0-9]{4})|([1]{1}[0-9]{3} [0-9]{3} [0-9]{4})|(\([0-9]{3}\) [0-9]{3}-[0-9]{4})/', $value)) {
				print("checked $key: " . $value . ' ...Your good!<br>');
			}else{
				print('we are only testing for American numbers. You either wrote an unmurican number, or you wrote your number weird<br>');
			}
			break;
		case 'username':
			if(preg_match('/(^[a-zA-Z])([a-zA-Z0-9]{5})/', $value)){
				print("checking $key: " . $value . '<br>');
			}else{
				print('your username should be 6 characters long, start with a letter and contain nothing but letters and numbers');
			}
			break;
		case 'bonus':
			if(preg_match('/[0-9]{3}/', $value)){
				print("checking $key: " . $value . '<br>');
			}else {
				print("why you no have three consecutive numbers");
			}
			
			break;
		default:
			print('everything else<br>');
			break;
	}
}


?>