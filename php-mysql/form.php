<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
    input, textarea{
        display: block;
        margin: 20px;
    }
</style>
<body>
    <form action="index_insert.php" method="POST">
        <input name="title" type="text" placeholder="Title">
        <textarea name="details" id="details" cols="30" rows="10" placeholder="Details"></textarea>
        <input type="text" name="timestamp" placeholder="timestamp">
        <input type="text" name="favorite_color" placeholder="favorite color?">
    </form>
</body>
</html>
