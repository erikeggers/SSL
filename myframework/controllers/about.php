<?php

class about extends AppController {
    public function __construct(){
        //$this->getView("welcome");
    }

    public function nav(){
        $navLabels = ["welcome"=>"Home","about"=>"About<span class='sr-only'>(current)</span>","link"=>"Link"];
        $this->getView("header",$navLabels);
    }

}

$display = new about(); 
$display->nav();
$this->getView("about");
$this->getView("footer");

?>
