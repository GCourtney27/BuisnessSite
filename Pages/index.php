<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../Styles/styleOne.css" rel="stylesheet" />
    <!-- Run website with: http://localhost/<YourfolderName>/Pages/index.php -->
    
    <?php $pageName = "Home"?>
    <title><?php echo $pageName?></title>
</head>
<body>
    <div class="mainContent">
        <h1><?php include "../PHP_Includes/header.php"?></h1>
        <?php include "../PHP_Includes/menu.php"?>
        <p>Welcome to the website</p>
        <p>Quam quisque id diam vel quam elementum pulvinar. Vel quam elementum pulvinar etiam. Platea dictumst vestibulum rhoncus est pellentesque. Mauris sit amet massa vitae. Nisl pretium fusce id velit ut. Euismod lacinia at quis risus sed vulputate odio. Bibendum arcu vitae elementum curabitur.</p>
        <?php include "../PHP_Includes/footer.php"?>
    <div>
</body>
</html>