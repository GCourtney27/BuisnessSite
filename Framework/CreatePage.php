<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Run website with: http://localhost/<YourfolderName>/Pages/index.php -->
    
    <?php $pageName = "Create Page"?>
    <title><?php echo $pageName?></title>
</head>
<body>
    <div class="mainContent">
        <h1><?php include "../PHP_Includes/header.php"?></h1>
        
        <!--// KNOWN MENU ISSUE: The menu bar is relative to the file you are in at the time you click it!
            //              This causes undesired page navigation behavior-->
        <?php include "../PHP_Includes/menu.php"?>
        
        
        
        <!-- https://stackoverflow.com/questions/24453038/pass-parameter-to-form-action-in-html -->
        <form action="PageFactory.php" method="post">
            
            Page Title: <input type="text" name="PageTitle_txtIn"></br>
            Page Header: <input type="text" name="PageHeader_txtIn"></br>
            Page Content: <input type="text" name="PageContent_txtIn">
            
            <input type="submit" value="Submit">
        </form>

        <?php include "../PHP_Includes/footer.php"?>
    <div>

</body>
</html>