<!--login_form.php-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login_form</title>
</head>
<body>
    <form action="login_handler.php">
        <input type="text" name="username">
        <input type="text" name="password">
        <button id="login_button" type="button">Login</button>
    </form>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>
        $('#login_button').click(function(){
            console.log('you clicked me');
        });

        function ajax_call(){
            $.ajax({
                url:'login_handler.php',
            });
        }
    </script>
</body>
</html>
