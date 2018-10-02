<?php

class about extends AppController {
    public function __construct(){
        //$this->getView("welcome");
    }

    public function nav(){
        $navLabels = ["welcome"=>"Home","about"=>"About","link"=>"Link"];
        $this->getView("header",$navLabels);
    }

    public function body(){
        $bodyText = "About this site. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque aliquam corporis eos, distinctio minima excepturi ratione consequuntur tempore sunt ex veniam quia consectetur aliquid quidem hic commodi reiciendis necessitatibus voluptates!";
        $this->getView("about",$bodyText);
    }
}

$display = new about(); 
$display->nav();
$display->body();
$this->getView("footer");

?>
