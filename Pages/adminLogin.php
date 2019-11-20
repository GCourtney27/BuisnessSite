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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../Styles/styleOne.css" rel="stylesheet" />
    <!-- Run website with: http://localhost/<YourfolderName>/Pages/index.php -->
    
    <?php $pageName = "Login"?>
    <title><?php echo $pageName?></title>
</head>
<body>
    <div class="mainContent">
        <h1><?php include "../PHP_Includes/header.php"?></h1>
        <?php include "../PHP_Includes/menu.php"?>

        <form action="../Framework/login.php" method="post">
            Username: <input id="name" name="inUsername" type="text">
            Password: <input id="password" name="inPassword" type="password"><br>

            <input name="submit" type="submit" value="Submit">
        </form>

        <?php include "../PHP_Includes/footer.php"?>
    <div>

</body>
</html>