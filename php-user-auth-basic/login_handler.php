<!--login_handler.php-->
<?php
    session_start();
    print_r($_POST);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $user_info = [
        ['id'=> 0, 'username'=>'dpaschal', 'password' => 'fluffybunnies'],
        ['id'=> 1, 'username'=>'rickybobby', 'password' => 'shakeandbake'],
        ['id'=> 2, 'username'=>'darkhelmet', 'password' => '12345'],
        ['id'=> 3, 'username'=>'isprout', 'password' => 'ilovewenches'],
        ['id'=> 4, 'username'=>'goggles', 'password'=>'eatshitasshole']
    ];

    foreach ($user_info as  $key => $value) {
        if($username == $value['username']){
            print("we have a match, welcome $username");
            $_SESSION['user_id'] = $value['id'];
            if($password == $value['password']){
                print("we have a passmatch $password");
            }
            else{
                print("password or username is incorrect");
            }
        }
    }

    print_r($_SESSION);

?>