<?php
// ============================
// Serves as the menu bar system for all pages.
// To add a new page type in page title and link to pave in the key => value box
// ============================
$menuArr = [
    // Menu item name => link to another file
    "Home | " => "../Pages/index.php",
    "About | " => "../Pages/about.php",
    "Contact | " => "../Pages/contact.php",
    "Admin (DEBUG)" => "../Pages/admin.php"
];

echo "<div class='menu'>";
foreach($menuArr as $key => $value){
    echo " <a lass='button' href=$value>
            $key
            </a>";
}
echo "</div>";

?>
