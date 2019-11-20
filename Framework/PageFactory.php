<?php
    include "../Objects/Page.php";

    //https://www.w3schools.com/php/php_file_create.asp
    echo "In PageFactory";

    $title = $_POST["PageTitle_txtIn"];
    $header = $_POST["PageHeader_txtIn"];
    $mainContent = $_POST["PageContent_txtIn"];

    $page = new Page($title, $header, $mainContent);
    $page->ParseToDatabase();

    // DEBUG
    //$page = new Page($title, $header, $mainContent);
    //$page->DEBUG_WriteFile();
    // end DEBUG

    // Redirect to admin page
    header("Location: ../Pages/admin.php");

?>