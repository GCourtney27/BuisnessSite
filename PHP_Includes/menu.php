<?php
session_start();

// ============================
// Serves as the menu bar system for all pages.
// To add a new page type in page title and link to pave in the key => value box
// ============================
$menuArr = [
    // Menu item name => link to another file
  
    "Home" => "../Pages/index.php",
    "About" => "../Pages/about.php",
    "Contact" => "../Pages/contact.php",
];

$adminSettings = array();
if(isset($_SESSION['login_user'])){
    $adminSettings = array("Settings" => "../Pages/admin.php", "Logout" => "../Framework/logout.php");
}else{
    $adminSettings = array("Login" => "../Pages/adminLogin.php");
}

include "../Database/DatabaseManager.php";
$query = "select * from pages";
$result = $sql_inst->query ( $query );
$num_db_rows = $result->num_rows;

$serverPages = array();
if($num_db_rows >= 1){

    while($row = $result->fetch_assoc()){
        extract($row);
        $url_Prefilter = "../Pages/DefaultPage.php?pageTitle={$page_title}&pageHeader={$page_header}&pageContent={$page_content}";
        $url = str_replace(" ", "+", $url_Prefilter);
        $serverPages[$page_header] = $url;

    }
}

//Final menu array
$menuArr = array_merge($menuArr, $serverPages);
$menuArr = array_merge($menuArr, $adminSettings);

echo "<div class='menu'>";
foreach($menuArr as $key => $value){
    echo " <a lass='button' href=$value>
            $key
            </a>";
}
echo "</div>";

?>
