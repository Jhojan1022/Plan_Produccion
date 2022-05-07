<?php
class App
{
    public function __construct()
    {
        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        echo $url[0];


        $archivoController = 'controllers/' . $url[0] . '.php';

        if (file_exists($archivoController)) {
            require $archivoController;
            $controller = new $url[0];
        } else {
            echo "404 -  No se ha encontrado la página";
        }
    }
}
