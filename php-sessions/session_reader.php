<?php
    session_start();
    $_SESSION = $_POST;
    print_r($_SESSION);

    foreach ($_SESSION as $key => $value) {

        switch($key){
            case 'name':
                if(preg_match('/.{2,}/', $value)){
                    print("<br>checking $key: " . $value . '<br>');
                }else{
                    print('<br>Thats not a valid name entry<br>');
                }
            break;
            case 'age':
                if(preg_match('/(^[0-9]{1,3}$)/', $value)){
                    print("<br>checking $key: " . $value . '<br>');
                }else{
                    print("<br>Wow your old, like really really old. Maybe try to enter your actual age? cause I know your not $value<br>");
                }
            case 'occupation':
                if(preg_match('/.{2,}/', $value)){
                    print("<br>checking occupation: $value<br>");
                }else{
                    print("<br>occupation invalid");
                }
            break;
        }
    }

?>