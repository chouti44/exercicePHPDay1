<?php
    session_start();

    require 'User.php';

    // instantiate object User
    $user1 = new User();

    // Set parameters of object User
    $user1->setFirstName('John');
    $user1->setLastName('Doe');
    $user1->setEmail('john.doe@domain.tld');
    $user1->setPassword('mdpsupersecure');

    // Add user1 in session;
    $_SESSION['user1'] = $user1;
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
        <input type="text" name="password" id="password"/>
        <br/><br/>
        <input type="submit" name="submit" value="Go"/>
    </form>
</body>
</html>