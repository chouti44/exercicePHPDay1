<?php
    require 'User.php';
    session_start();

    if((!empty($_POST['email'])) && (!empty($_POST['password']))) {
        $password = $_POST['password'];
        $password = password_hash($password, PASSWORD_BCRYPT);

        // open the file "password.csv" for writing
        $file = fopen('password.csv', 'w');

        // save the column headers
        fputcsv($file, array('Email', 'Password'));

        // Sample data. This can be fetched
        $data = array(
            array($_POST["email"]),
            array($password),
        );

        // save each row of the data
        foreach ($data as $row) {
            fputcsv($file, $row);
        }
        $file = fopen("password.csv", "r");

        if(!empty($file)) { ?>
            <form action="dashboard.php" method="get">
                <input name="success" value="1"/>
            </form>
            <?php
        }
        // Close the file
        fclose($file);
    } else {
        header('Location: dashboard.php');
    }
