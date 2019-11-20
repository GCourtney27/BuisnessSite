<?php

include "../Database/DatabaseManager.php";

if(isset($_POST['submit'])){
    if(empty($_POST['inUsername']) || empty($_POST['inPassword'])){
        echo "Username and password field must not be blank.";
    }else{
        $username = $_POST["inUsername"];
        $password = $_POST["inPassword"];
    
        include "../Database/DatabaseManager.php";
        $query = "select username, password from login where username='".$username."' and password='".$password."' limit 1";
    

        $result = $sql_inst->query($query);
        $num_result = $result->num_rows;

        if($result){
            session_start();
            $_SESSION['login_user'] = $username;
            header("Location: ../Pages/admin.php");
        }else{
            echo "Invalid username or password";
            echo $num_results;
            exit;
        }
    
    
    }
}


?>