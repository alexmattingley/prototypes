<?php
    session_start();
    $_SESSION = $_POST;
    print_r($_SESSION);

?>