<?php 

class MainController extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render("main/index");
        //echo "<p>Nuevo controlador MAIN</p>";
    }
    
    function saludo (){
        //echo '<p>Hola mundo</p>';
    }
    
}

?>