<?php
    session_start();
    $_SESSION = $_POST;
    header('location: session_setter.php');
    $error_index = 0;

    foreach ($_SESSION as $key => $value) {
        
        switch($key){
            case 'name':
                if(preg_match('/.{2,}/', $value)){
                    print("<br>checking $key: " . $value . '<br>');
                }else{
                    $_SESSION['errors'][$error_index] = 'you name entered is invalid';
                    $error_index++;
                }
            break;
            case 'age':
                if(preg_match('/(^[0-9]{1,3}$)/', $value)){
                    print("<br>checking $key: " . $value . '<br>');
                }else{
                    $_SESSION['errors'][$error_index] = "Wow your old, like really really old. Maybe try to enter your actual age?";
                    $error_index++;
                }
            break;
            case 'occupation':
                if(preg_match('/.{2,}/', $value)){
                    print("<br>checking occupation: $value<br>");
                }else{
                    $_SESSION['errors'][$error_index] = "occupation invalid";
                    $error_index++;
                }
            break;
        }
    }
    print_r($_SESSION);
?>