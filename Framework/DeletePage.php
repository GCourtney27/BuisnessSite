<?php

include "../Database/DatabaseManager.php";

$query = "DELETE FROM pages WHERE page_index = ".$_GET['page_index']."";

if($sql_inst->query( $query )){
    header("Location: ../Pages/admin.php");
}else{
    echo "Error: Failed to delete page from database.";
    echo $query;
}

echo "<br>In DeletePage";

?>