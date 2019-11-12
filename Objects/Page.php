<?php
class Page{
    public $title;
    public $header;
    public $mainContent;

    public function __construct($_title = "DEFAULT TITLE", $_header = "DEFAULT HEADER", $_mainContent = "DEFAULT MAIN CONTENT"){
        $this->title = $_title;
        $this->header = $_header;
        $this->mainContent = $_mainContent;
        $this->ParseToDatabase();
    }
    
    public function ParseToDatabase(){
        // TODO: implement database parsing
    }

}
    
?>