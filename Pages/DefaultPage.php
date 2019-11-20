

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../Styles/styleOne.css" rel="stylesheet" />
    <!-- Run website with: http://localhost/<YourfolderName>/Pages/index.php -->
  
    <?php $pageName = $_GET["pageTitle"];?>
    <title><?php echo $pageName;?></title>
</head>
<body>
    <div class="mainContent">
        <h1><?php $pageName=$_GET["pageHeader"]; include "../PHP_Includes/header.php"?></h1>
        <?php include "../PHP_Includes/menu.php"?>

        <?php
            echo $_GET["pageContent"];
        ?>
        
        </table>

        <?php include "../PHP_Includes/footer.php"?>
    <div>

</body>
</html>