<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>
    <!-- form with email and password -->
    <form action="traitement.php" method="post">
        <label for="email">Your email:</label>
        <input type="text" name="email" id="email"/>
        <br/><br/>
        <label for="password">Your password:</label>
        <input type="password" name="password" id="password"/>
        <br/><br/>
        <input type="submit" name="submit" value="Go"/>
    </form>
</body>
</html>