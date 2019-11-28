<?php

class View {
    
    function __construct(){
        //echo "Vista";
    }
    
    function render ($nombre_vista){
        require_once 'views/'. $nombre_vista.'.php';
    }
    
}

?>