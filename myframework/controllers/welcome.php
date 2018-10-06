<?php

class welcome extends AppController {
    public function __construct(){
        //$this->getView("welcome");
    }

    public function index(){
        $this->getview("header", array("pagename"=>"welcome"));
        $this->getView("welcome");
        $this->getView("footer");
    }

    public function about(){
        $this->getview("header", array("pagename"=>"about"));
        $this->getView("about");
        $this->getView("footer");
    }

    public function contact(){
        $this->getview("header", array("pagename"=>"contact"));
        $this->getView("contact");
        $this->getView("footer");
    }

    public function contactRecv(){
        $this->getview("header", array("pagename"=>"contact"));
        
        if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
            $this->getView("contactInvalid");
            $this->getView("footer");
            var_dump($_POST);
        } else if (strlen($_POST["password"]) <= '9') { 
            $this->getView("contactInvalid");
            $this->getView("footer");
            var_dump($_POST);
        } else {
            echo '<script type="text/javascript">'; 
            echo 'alert("Your form has been submitted.");'; 
            echo 'window.location.href = "/";';
            echo '</script>';
        }
    }

    public function ajax(){
        //var_dump($_REQUEST);
        if (@$_REQUEST["email"]=="ssl@ssl.com") {
            echo "welcome";
        } else {
            echo "invalid information";
        }
        
    }


}

?>