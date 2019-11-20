<?php

include "../Database/DatabaseManager.php";
// include "../Objects/Page.php";

$pageIndex = $_POST["pageIndex"];
$newTitle = $_POST["newPageTitle"];
$newHeader = $_POST["newPageHeader"];
$newContent = $_POST["newPageContent"];

$query = "update pages set page_title='".$newTitle."', page_header='".$newHeader."', page_content='".$newContent."' where page_index=".$pageIndex."";

$result = $sql_inst->query( $query );

header("Location: ../Pages/admin.php");

?>