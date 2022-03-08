<?php
    /*
        Requires a DB with the following schema:
            CREATE TABLE widget (
                name VARCHAR(255),
                owner VARCHAR(255)
            );
    */
    $link = mysqli_connect('server', 'user', 'password', 'dbname');

    if (mysqli_connect_errno()) {
        echo 'failed to connect to mysql';
    }
?>
