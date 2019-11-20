    <?php $pageName = $_GET["pageTitle"];?>
<body>
    <div class="mainContent">
        <h1><?php $pageName=$_GET["pageHeader"]; include "../PHP_Includes/header.php"?></h1>
        <?php include "../PHP_Includes/menu.php"?>

        <p><?php
            echo $_GET["pageContent"];
        ?></p>
        
        <?php 
            if(isset($_SESSION['login_user'])){
                include $_SERVER['DOCUMENT_ROOT'].'/BuisnessSite/PHP_Includes/image_up.php'; 
            }
        ?>

        <?php include "../PHP_Includes/footer.php"?>
    <div>

</body>
</html>