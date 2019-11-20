<!-- ================
    Login system framework influenced from:
    https://www.codeandcourse.com/login-system-using-php-with-mysql-database-with-session/
    ==============
-->
<?php
// If there is already a session than just redirect to the admin page
// KNOWN ISSUE: Any user with valid session will be redirected to the 
// admin page with this method
if(isset($_SESSION['login_user'])){
    header("Location: admin.php");
}
?>
    <?php $pageName = "Login"?>
<body>
    <div class="mainContent">
        <h1><?php include "../PHP_Includes/header.php"?></h1>
        <?php include "../PHP_Includes/menu.php"?>

        <form class="formStyle" action="../Framework/login.php" method="post">
            Username: </br><input id="name" name="inUsername" type="text"> </br>
            Password: </br><input id="password" name="inPassword" type="password"><br>

            <input name="submit" type="submit" value="Submit">
        </form>

        <?php include "../PHP_Includes/footer.php"?>
    <div>

</body>
</html>