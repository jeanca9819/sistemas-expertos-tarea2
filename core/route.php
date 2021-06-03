<?php

    /*Esta función ayuda a cargar el controlador respectivo, concatenando 
    a el controlador con la palabra ingresada y el archivo, así se conectan
    los archivos. 
    */
    function cargarControlador($controlador){
        $nombreControlador = ucwords($controlador)."Controller";
        $archivoControlador = 'controllers/'.ucwords($nombreControlador).'.php';

        if(!is_file($archivoControlador)){
            $archivoControlador = 'controllers/'.CONTROLADOR_PRINCIPAL.'Controller.php';
        }
       
        require_once $archivoControlador;
        $control = new $nombreControlador();
        return $control;
    }

        /*Esta función ayuda a cargar la acción respectiva del controlador 
        que se ingresa, así sabe que acción realizar, en este caso mostraría las 
        vistas. 
    */
    function cargarAccion($controlador, $accion){
        if(isset($accion) && method_exists($controlador, $accion)){

            $controlador->$accion();

        } else{
            $controlador->ACCION_PRINCIPAL();
        }
    }

    /*En todo caso, si no se agregan usan el CONTROLADOR_PRINCIPAL y ACCION_PRINCIPAL
    para poder cargar la vista principal. 
    */

?>