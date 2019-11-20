<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../Styles/styleOne.css" rel="stylesheet" />
    <!-- Run website with: http://localhost/<YourfolderName>/Pages/index.php -->
    
    <?php $pageName = "Admin Page"?>
    <title><?php echo $pageName?></title>
</head>
<body>
    <div class="mainContent">
        <h1><?php include "../PHP_Includes/header.php"?></h1>
        <?php include "../PHP_Includes/menu.php"?>

        <form name="CreatePage_Btn" action="../Framework/PageManager.php" method="post">
            <input type="submit" value="Create Page" />
        </form>

        <!-- For each page have a delete button -->
        <!-- <form action="../Framework/PageManager/PageFactory.php">
            <input type="submit" value="Delete Page" />
        </form> -->


        <?php include "../PHP_Includes/footer.php"?>
    <div>

</body>
</html>