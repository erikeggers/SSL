<?php

class link extends AppController {
    public function __construct(){
        //$this->getView("welcome");
    }

    public function nav(){
        $navLabels = ["welcome"=>"Home","about"=>"About","link"=>"Link<span class='sr-only'>(current)</span>"];
        $this->getView("header",$navLabels);
    }

}

$display = new link(); 
$display->nav();
$this->getView("link");
$this->getView("footer");


?>
