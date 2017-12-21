<?php
    require 'User.php';
    session_start();

    // check if the data is entered and not null
    if((!empty($_POST['email'])) && (!empty($_POST['password']))) {
        if($_POST['email'] == "john.doe@domain.tld" &&  $_POST['password'] == "mdpsupersecure") {
            // success

            // instantiate User
            $user1 = new User();

            // Set parameters of object User
            $user1->setFirstName('John');
            $user1->setLastName('Doe');
            $user1->setEmail('john.doe@domain.tld');
            $user1->setPassword('mdpsupersecure');

            // Add user1 in session;
            $_SESSION['user1'] = $user1;
            header('Location: dashboard.php');
        } else {
            header('Location: index.php');
        }
    } else {
        header('Location: index.php');
    }
?>