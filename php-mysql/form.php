<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
<style>
    input, textarea{
        display: block;
        margin: 20px;
    }
</style>
<body>
    <h2>login</h2>
    <!--This form sends the login information to login_handler for verification-->
    <form action="login_handler.php" method="POST">
        <input type="text" name="username" value="goggles">
        <input type="text" name="password" value="getpitted">
        <button>Login</button>
    </form>

    <!-- This form sends the task information to index_insert which then sends it to the db as an insert query-->
    <form action="index_insert.php" method="POST">
        <input name="title" type="text" placeholder="Title">
        <textarea name="details" id="details" cols="30" rows="10" placeholder="Details"></textarea>
        <input type="text" name="timestamp" id="timestamp" placeholder="timestamp">
        <input type="text" name="favorite_color" placeholder="favorite color?">
        <button>Submit</button>
    </form>
    <script>
        $(function() {
            $( "#timestamp" ).datepicker();
        });
    </script>
</body>
</html>
