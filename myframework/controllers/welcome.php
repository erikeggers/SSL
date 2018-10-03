<?php

class welcome extends AppController {
    public function __construct(){
        //$this->getView("welcome");
    }

    public function nav(){
        $navLabels = ["welcome"=>"Home <span class='sr-only'>(current)</span>","about"=>"About","link"=>"Link"];
        $this->getView("header",$navLabels);
    }

    public function body(){
        $bodyText = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque aliquam corporis eos, distinctio minima excepturi ratione consequuntur tempore sunt ex veniam quia consectetur aliquid quidem hic commodi reiciendis necessitatibus voluptates!";
        $this->getView("body",$bodyText);
    }

}

$display = new welcome(); 
$display->nav();
$this->getView("welcome");
$this->getView("footer");

?>