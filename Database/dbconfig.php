<?php

    $host = "localhost";
    $username = "root";
    $password = "MyNewPass";
    $db_name = "buisnesssite";

    $sql_inst = new mysqli($host, $username, $password, $db_name);

    if(mysqli_connect_errno()){
        echo "Failed to connect to SQL database";
        exit;
    }else{
        echo "Database connect successful";
    }

?>