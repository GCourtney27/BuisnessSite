<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../Styles/styleOne.css" rel="stylesheet" />
    <!-- Run website with: http://localhost/<YourfolderName>/Pages/index.php -->
    
    <?php $pageName = "Edit Page"?>
    <title><?php echo $pageName?></title>
</head>
<body>
    <div class="mainContent">
        <h1><?php include "../PHP_Includes/header.php"?></h1>
        <?php include "../PHP_Includes/menu.php"?>


        <form action="../Framework/EditPage.php" method="post">
            <input type="hidden" name="pageIndex" value="<?php echo $_GET["pageIndex"];?>">
            New Page Title: </br><input type="text" name="newPageTitle" value="<?php echo $_GET["pageTitle"];?>"> </br>
            New Page Header:  <input type="text", name="newPageHeader" value="<?php echo $_GET["pageHeader"];?>"> </br>
            New Page Content:  <input type="text", name="newPageContent" value="<?php echo $_GET["pageContent"];?>"> </br>
            
            <input type="submit" value="Submit">
        </form>

        <?php include "../PHP_Includes/footer.php"?>
    <div>

</body>
</html>