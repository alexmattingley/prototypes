<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session Setter</title>
</head>
<style>
    input{
        display: block;
    }
</style>
<body>
    <form action="session_reader.php" method="POST">
        <input type="text" name="name">
        <?php  
            if(isset($_SESSION['errors'][0])){
                print("<br>" . $_SESSION['errors'][0]);
            }
        ?>
        <input type="text" name="age">
        <?php  
            if(isset($_SESSION['errors'][1])){
                print("<br>" . $_SESSION['errors'][1]);
            }
        ?>
        <input type="text" name="occupation">
         <?php  
            if(isset($_SESSION['errors'][2])){
                print("<br>" . $_SESSION['errors'][2]);
            }
        ?>
        <button type="submit">Submit</button>
    </form>
</body>
</html>