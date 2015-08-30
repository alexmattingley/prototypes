<?php
session_start(); //do not put anything before this, this is crucial for the session superglobal to work properly
?>
<div>
<?php
$username = $_POST['username'];
$password = sha1($_POST['password']);
print("Username Submited: " . $username);
print("<br>Password Submitted: " .$password);

?>
</div>
<div>
<?php

require('mysql_connect.php');
$query = "SELECT * FROM Users";
$results = mysqli_query($conn, $query);
if(mysqli_num_rows($results) > 0){
    while($result = mysqli_fetch_assoc($results)){
        $user_info[] = $result;
    }
    print('query working');
}

$output = array();

$user_info_length = count($user_info);
$user_cycle = 0; //this variable is in place to prevent multiple error messages when a user inputs an incorrect password

foreach ($user_info as  $key => $value) { //cycle through $user_info array and tap into keys and values
    if($username == $value['username']){
        $_SESSION['user_id'] = $value['id'];
        if($password == $value['password']){//nested conditional to make sure that it only tests the password of the current user
            $output['success'] = true;
            $output['user_id'] = $_SESSION['user_id'];
            $output['message'] = "Welcome $username";
        }else{
            $output['failure'] = "password or username is incorrect";
        }
    }else{
        $user_cycle++;
        if($user_cycle == $user_info_length){
            $output['failure'] = "password or username is incorrect";
        }
    }
}

print_r($output);//this is what we are going to access in the ajax call.
print_r($_SESSION);

?>
</div>
