<!-- index_insert.php -->

<!--So this doc only works on refresh-->
<?php
require('mysql_connect.php');
$query = "INSERT INTO `second_todo_items`(`id`, `title`, `details`, `timestamp`, `user_id`) VALUES (8,'run','workout',CURRENT_TIME,'luliferr')";
$results = mysqli_query($conn, $query);
print(mysqli_affected_rows($conn) > 0);
print_r($results);
?>