    <?php $pageName = "About"?>
<body>

<div class="mainContent">
    <h1><?php include "../PHP_Includes/header.php"?></h1>
    <?php include "../PHP_Includes/menu.php"?>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis lectus nulla at volutpat diam ut venenatis tellus. Purus non enim praesent elementum facilisis leo vel fringilla est. Phasellus vestibulum lorem sed risus ultricies. In nisl nisi scelerisque eu ultrices vitae auctor eu augue. Orci phasellus egestas tellus rutrum tellus pellentesque eu tincidunt.<p>

<?php 
       $menuArr = [
        "Mission" => "../Pages/about_mission.php",
        "History " => "../Pages/about_history.php"
        ];

        foreach($menuArr as $key => $value){
            echo " <a lass='button' href=$value> $key </a>";
        }
?>

    <?php include "../PHP_Includes/footer.php"?>
</div>

</body>
</html>