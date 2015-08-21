<?php
    session_start();
    $_SESSION = $_POST;
    print_r($_SESSION);

    foreach ($_SESSION as $key => $value) {
        $error_index = 0;
        switch($key){
            case 'name':
                if(preg_match('/.{2,}/', $value)){
                    print("<br>checking $key: " . $value . '<br>');
                }else{
                    $_SESSION['errors'][$error_index] = 'you name entered is invalid';
                    $error_index++;
                    print($error_index);
                }
            break;
            case 'age':
                if(preg_match('/(^[0-9]{1,3}$)/', $value)){
                    print("<br>checking $key: " . $value . '<br>');
                }else{
                    print("<br>Wow your old, like really really old. Maybe try to enter your actual age? cause I know your not $value<br>");
                }
            break;
            case 'occupation':
                if(preg_match('/.{2,}/', $value)){
                    print("<br>checking occupation: $value<br>");
                }else{
                    print("<br>occupation invalid");
                }
            break;
        }
    }
    print_r($_SESSION);
?>