<?php 

class ErrorController extends Controller {
    function __construct(){
        parent::__construct();
        $this->view->message="Error cargando el recurso";
        $this->view->render("error/index");
        //echo '<p>error al cargar el recurso</p>';
    }
}

?>