<?php
    
    // echo "Redirected via PageManager.php";

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        if(isset($_POST['CreatePage_Btn'])){
            // Redirection
            header("Location: CreatePage.php");
        }

        if(isset($_POST['DeletePage_Form'])){
            // Redirection
            header("Location: DeletePage.php");
        }

    }  

?>