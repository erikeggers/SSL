<?php

class link extends AppController {
    public function __construct(){
        //$this->getView("welcome");
    }

    public function nav(){
        $navLabels = ["welcome"=>"Home","about"=>"About","link"=>"Link<span class='sr-only'>(current)</span>"];
        $this->getView("header",$navLabels);
    }

    public function body(){
        $bodyText = "A link. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque aliquam corporis eos, distinctio minima excepturi ratione consequuntur tempore sunt ex veniam quia consectetur aliquid quidem hic commodi reiciendis necessitatibus voluptates!";
        $this->getView("link",$bodyText);
    }
}

$display = new link(); 
$display->nav();
$display->body();
$this->getView("footer");


?>
