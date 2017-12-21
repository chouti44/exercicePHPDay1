<?php
    session_start();

    // check if the data is entered and not null
    if((!empty($_POST['email'])) && (!empty($_POST['password']))) {
        if($_POST['email'] == "john.doe@domain.tld" &&  $_POST['password'] == "mdpsupersecure") {
            // succes
            header('Location: http://localhost/dev2/php/exercicePHPDay1/web/dashboard.php');
        } elseif ($_POST['email'] == "john.doe@domain.tld" &&  $_POST['password'] == "mdpnotsecure") {
            // error
            header('Location: http://localhost/dev2/php/exercicePHPDay1/web/index.php');
        } elseif ($_POST['email'] == "jane.doe@domain.tld" &&  $_POST['password'] == "mdpsupersecure") {
            // error
            header('Location: http://localhost/dev2/php/exercicePHPDay1/web/index.php');
        }
    } else {
        header('Location: http://localhost/dev2/php/exercicePHPDay1/web/index.php');
    }
?>