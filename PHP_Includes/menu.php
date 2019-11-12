<?php
$menu = [
    "Home" => "index.php",
    "About" => "aboutme.php",
    "Contact" => "contact.php"
];
?>

<div class = navBar>
<?php foreach($menu as $key => $value){
    echo "<a href=$value>$key</a> ";
}
?>
</div>