<?php
    session_start();

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
        ['id'=> 4, 'username'=>'goggles', 'password'=>'getpitted']
    ];

    $user_info_length = count($user_info);
    $user_cycle = 0;
    foreach ($user_info as  $key => $value) {
        if($username == $value['username']){
            $_SESSION['user_id'] = $value['id'];
            if($password == $value['password']){
                $output['success'] = true;
                $output['user_id'] = $_SESSION['user_id'];
                $output['message'] = "Welcome $username";
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

    $output_string = json_encode($output);
    print($output_string);

    //print_r($_SESSION); //remember this doesnt have any values until we have a username match.

?>