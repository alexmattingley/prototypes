<?php
session_start();
print_r($_SESSION);
?>
<?php
//need to check session at user id before I actually run the below.
print_r($_POST);
$title = $_POST['title'];
$details = $_POST['details'];
$timestamp = $_POST['timestamp'];
$favColor = $_POST['favorite_color'];
$user_id = $_SESSION['user_id'];
require('mysql_connect.php');
$query = "INSERT INTO `second_todo_items`(`id`, `title`, `details`, `timestamp`, `user_id`) VALUES (16, '$title','$details', $timestamp ,'$user_id')"; //how do I auto increment the id here?
$results = mysqli_query($conn, $query);
if(mysqli_affected_rows($conn) > 0){
    print('mysqli_affected_rows is true');
    print_r($results);
}else {
    print('something is not working');
}

?>