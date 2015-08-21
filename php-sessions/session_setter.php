<?php
    session_start();
    print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session Setter</title>
</head>
<body>
    <form action="session_reader.php" method="POST">
        <input type="text" name="name">
        <input type="text" name="age">
        <input type="text" name="occupation">
        <button type="submit">Submit</button>
    </form>
</body>
</html>