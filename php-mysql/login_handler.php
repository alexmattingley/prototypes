<?php
session_start(); //do not put anything before this, this is crucial for the session superglobal to work properly

$output = array(
    "success" => false
);
$username = $_POST['username'];
$password = sha1($_POST['password']);

$user_info = [ //will eventually store the user information entered but for now is just a static array for user checks
    ['id'=> 0, 'username'=>'dpaschal', 'password' => '2beb0192eb1ca5a8756bc89a09b93036e1854049'],
    ['id'=> 1, 'username'=>'rickybobby', 'password' => '75510278cc01da664793802ac6fd1e0c9c14d08d'],
    ['id'=> 2, 'username'=>'darkhelmet', 'password' => '8cb2237d0679ca88db6464eac60da96345513964'],
    ['id'=> 3, 'username'=>'isprout', 'password' => 'c7c82f558bff302b98e49d8e73e4ca7cee44a4ca'],
    ['id'=> 4, 'username'=>'goggles', 'password'=>'3fae2a9cd3b08fd83a5fafbcebe52a9a7a7ca58a']
];



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

$output_string = json_encode($output);
print($output_string); //this is what we are going to access in the ajax call.

?>