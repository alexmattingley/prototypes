<?php
require('mysql_connect.php');
$query = "SELECT * FROM second_todo_items";
$results = mysqli_query($conn, $query);
if(mysqli_num_rows($results) > 0){
    while($result = mysqli_fetch_assoc($results)){
        $output[] = $result;
    }
    //print_r($output); //this will cause things to break so bear with me.
    $output_string = json_encode($output);
    print($output_string);
    //$last_element = count($output)-1;
    //printing out last element of $output assoc array
}

?>