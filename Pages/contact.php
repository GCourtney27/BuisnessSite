<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../Styles/styleOne.css" rel="stylesheet" />

    <?php $pageName = "Contact"?>
    <title><?php echo $pageName?></title>
</head>
<body>
<div class="mainContent">
        <h1><?php include "../PHP_Includes/header.php"?></h1>
        <div class="menu"><?php include "../PHP_Includes/menu.php"?></div>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <p>


       <?php 
       $menuArr = [
        "Locations" => "../Pages/contact_locations.php",
        "Emails " => "../Pages/contact_email.php"
        ];

        foreach($menuArr as $key => $value){
            echo " <a lass='button' href=$value> $key </a>";
        }
?>

        <?php include "../PHP_Includes/footer.php"?>
        </div>
</body>
</html>