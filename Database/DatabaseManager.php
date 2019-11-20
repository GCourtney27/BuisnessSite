<?php
    header("Access-Control-Allow-Origin: *");
    include "dbconfig.php"

    $query = "select * from pages";


    $result = $sql_inst->query($query);

    echo $result;
?>