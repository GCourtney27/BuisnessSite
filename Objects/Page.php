<?php
class Page{
    public $title;
    public $header;
    public $mainContent;

    public function __construct($_title = "DEFAULT TITLE", $_header = "DEFAULT HEADER", $_mainContent = "DEFAULT MAIN CONTENT"){
        $this->title = $_title;
        $this->header = $_header;
        $this->mainContent = $_mainContent;
        // $this->ParseToDatabase();
    }
    
    public function ParseToDatabase(){
        include "../Database/DatabaseManager.php";
        
        $query = "select * from pages";
        $result = $sql_inst->query ( $query );
        $num_db_rows = $result->num_rows;
        $insert_index = ($num_db_rows + 1);
        echo  $insert_index;

        $objParse = "INSERT INTO pages (page_index, page_title, page_header, page_content) 
                    VALUES (".$insert_index.",'".$this->title."','".$this->header."','".$this->mainContent
                    ."')";
        $sql_inst->query ( $objParse );
    }

    public function DEBUG_WriteFile(){
        $myFile = fopen("../PageOutput/".$this->title.".txt", "w") or die("Unable to write to file");

        $txt = $this->title;
        $txt .= $this->header;
        $txt .= $this->mainContent;

        fwrite($myFile, $txt);
    
        fclose($myFile);
    }
}
    
?>