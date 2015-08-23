<!--login_handler.php-->
<?php
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
            if($password == $value['password']){
                print("we have a passmatch $password");
            }
            else{
                print("password incorrect");
            }
        }
    }

?>