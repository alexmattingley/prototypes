<?php

print_r($_POST);

foreach($_POST as $indiv_elem => $indiv_elem_value) {
	echo "<br>$indiv_elem_value<br>";
}

?>