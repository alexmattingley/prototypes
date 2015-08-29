<!-- index_insert.php -->

<!--So this doc only works on refresh-->
<?php
print_r($_POST);
$title = $_POST['title'];
$details = $_POST['details'];
$timestamp = $_POST['timestamp'];
$favColor = $_POST['favorite_color'];
print("$title $details $timestamp $favColor<br>");
require('mysql_connect.php');
$query = "INSERT INTO `second_todo_items`(`id`, `title`, `details`, `timestamp`, `user_id`) VALUES (10, '$title','$details', $timestamp ,'luliferr')";
$results = mysqli_query($conn, $query);
if(mysqli_affected_rows($conn) > 0){
    print('mysqli_affected_rows is true');
    print_r($results);
}else {
    print('something is not working');
}

?>