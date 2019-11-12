<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Run website with: http://localhost/<YourfolderName>/Pages/index.php -->
    
    <?php $pageName = "Admin"?>
    <title><?php echo $pageName?></title>
</head>
<body>
    <div class="mainContent">
        <h1><?php include "../PHP_Includes/header.php"?></h1>
        <?php include "../PHP_Includes/menu.php"?>

        <form action="../Framework/PageManager/PageFactory.php">
            <input type="submit" value="Create Page" />
        </form>

        <!-- <form action="../Framework/PageManager/PageFactory.php">
            <input type="submit" value="Craete Page" />
        </form> -->

        <!-- <button type="button" onclick="CreatePage()">Create Page</button> -->


        <?php include "../PHP_Includes/footer.php"?>
    <div>

    <script src="../Scripts/AdminPage.js" rel=""></script>
</body>
</html>