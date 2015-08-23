<?php
    session_start();
    print_r($_POST);

    $output = array(
        "success" => false
    );
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user_info = [
        ['id'=> 0, 'username'=>'dpaschal', 'password' => 'fluffybunnies'],
        ['id'=> 1, 'username'=>'rickybobby', 'password' => 'shakeandbake'],
        ['id'=> 2, 'username'=>'darkhelmet', 'password' => '12345'],
        ['id'=> 3, 'username'=>'isprout', 'password' => 'ilovewenches'],
        ['id'=> 4, 'username'=>'goggles', 'password'=>'eatshitasshole']
    ];

    $user_info_length = count($user_info);
    $user_cycle = 0;
    foreach ($user_info as  $key => $value) {
        if($username == $value['username']){
            print("we have a match, welcome $username"); //make sure you remove this before final, makes things obvious.
            $_SESSION['user_id'] = $value['id'];
            if($password == $value['password']){
                $output['success'] = true;
                $output['user_id'] = $_SESSION['user_id'];
                $output['message'] = "Welcome $username";
                print_r($output);
            }else{
                print("password or username is incorrect");
            }
        }else{
            $user_cycle++;
            if($user_cycle == $user_info_length){
                print('your username or password is incorrect');
            }
        }
    }

    print_r($_SESSION); //remember this doesnt have any values until we have a username match.

?>