<?php

class about extends AppController {
    public function __construct(){
        
    }

    public function index(){
        $this->getview("header", array("pagename"=>"about"));
        $this->getView("about");
        $this->getView("footer");
    }

}

?>
