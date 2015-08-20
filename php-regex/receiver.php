<?php

//print_r($_POST);

foreach($_POST as $indiv_elem => $indiv_elem_value) {
	echo "$indiv_elem_value<br>";
}
foreach ($_POST as $key => $value) {
	echo "$key: $value<br>";
}


?>