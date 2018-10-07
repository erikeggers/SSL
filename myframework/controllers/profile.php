<?php

class profile extends AppController {
    public function __construct(){
        if (@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1) {
            
        } else {
            header("Location:/welcome");
        }
    }

    public function index(){
        $this->getview("header", array("pagename"=>"welcome"));
        echo "<div class='container' style='margin-top:100px;'>This is a protected area</div>";

    }

}

?>