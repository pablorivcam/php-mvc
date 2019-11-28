<?php 
require_once 'controllers/error-controller.php';

class App{
    function __construct(){
        echo "<p>Nueva app</p>";
        $url = $_GET['url'];
        $url = rtrim($url,'/');
        $url = explode('/',$url);
        // var_dump($url);
        $archivoController= 'controllers/'.$url[0].'.php';
        
        // Si el fichero de la dirección existe lo cargamos
        if (file_exists($archivoController)){
            require_once $archivoController;
            
            $controller = new $url[0];
            
            // Si la url 1 existe llamamos al método que se llame igual que la misma dentro del controlador cargado.
            if (isset($url[1])){
                $controller->{$url[1]}();
            }
            
        }else{
            $controller= new ErrorController();
        }
    }
}

?>