<?php

print_r($_POST);

foreach ($_POST as $key => $value) { //loops through each value of the post variable

	switch ($key) { //checks the key.
		
		case 'first_name':
			if(preg_match('/.{2,}/', $value)){ //checks that you have at least any two characters entered. 
				print("<br>checking $key: " . $value . '<br>');
			}else{
				print('<br>Thats not a valid name entry<br>');
			}
			break;
		
		case 'age':
			if(preg_match('/[0-9]{1,3}/', $value)){ //checks that you entered between 1 and 3 numbers 0-9.
				print("checking $key: " . $value . '<br>');
			}else{
				print("Wow your old, like really really old. Maybe try to enter your actual age? cause I know your not $value");
			}
			break;
		
		case 'phone':
			if (preg_match('/([0-9]{3} [0-9]{3} [0-9]{4})|([0-9]{3}-[0-9]{3}-[0-9]{4})|([1]{1}[0-9]{3} [0-9]{3} [0-9]{4})|(\([0-9]{3}\) [0-9]{3}-[0-9]{4})/', $value)) { //checks that your number matches one of these formats: (###) ###-####, ### ### ####, ###-###-####, 1### ### ####
				print("checked $key: " . $value . ' ...Your good!<br>');
			}else{
				print('we are only testing for American numbers. You either wrote an unmurican number, or you wrote your number weird<br>');
			}
			break;
		
		case 'username':
			if(preg_match('/(^[a-zA-Z])([a-zA-Z0-9]{5})/', $value)){//checks that the username starts with any letter, and that it has 5 procceeding characters that are letters and numbers
				print("checking $key: " . $value . '<br>');
			}else{
				print('your username should be 6 characters long, start with a letter and contain nothing but letters and numbers');
			}
			break;
		
		case 'bonus':
			if(preg_match('/[0-9]{3}/', $value)){//checks for any 3 numbers consecutively
				print("checking $key: " . $value . '<br>');
			}else {
				print("$key: why you no have three consecutive numbers?");
			}
			break;
		default:
			print('everything else<br>');
			break;
	}
}


?>