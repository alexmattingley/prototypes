<?php
require('mysql_connect.php');
$query = "SELECT * FROM second_todo_items";
$results = mysqli_query($conn, $query);
if(mysqli_num_rows($results) > 0){
    while($result = mysqli_fetch_assoc($results)){
        $output[] = $result;
    }
    print_r($output);
    $last_element = count($output)-1;
    $id_number = json_encode($output[$last_element]["id"]);//printing out last element of $output assoc array
    print($id_number);
}

?>