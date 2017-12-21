<?php
    require 'User.php';
    session_start();

     echo $_SESSION['user1']->getFirstName() . ' ' . $_SESSION['user1']->getLastName();
?>