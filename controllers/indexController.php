<?php

    //Controlador de Index, la única función es cargar la vista respectiva.
    class IndexController {

        function index() {
            require_once "views/indexView.php";
        }
    }
?>