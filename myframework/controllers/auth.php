<?php

class auth extends AppController {
    public function __construct(){

    }

    public function login(){
        if ($_REQUEST["username"] && $_REQUEST["password"]) {

            $lines = file('assets/credentials.txt');
            
            $userArray = array();

            foreach($lines as $line) {
                $items = explode('|', $line, 3);
                $userArray[] = $items;
            }

            for ($x = 0; $x <= count($userArray)-1; $x++) {
                if ($userArray[$x][0] == $_REQUEST["username"] && $userArray[$x][1] == $_REQUEST["password"]) {
                    $_SESSION["loggedin"]=1;
                    $_SESSION["username"]=$_REQUEST["username"];
                    $_SESSION["bio"]=$userArray[$x][2];
                    header("Location:/welcome");
                    return;
                } else {
                    header("Location:/welcome?msg=Bad Login");
                }
            }
        } else {
            
                header("Location:/welcome?msg=Bad Login");
        
        }
    }

    public function logout(){
        session_destroy();
        header("Location:/welcome");
    }

}

?>