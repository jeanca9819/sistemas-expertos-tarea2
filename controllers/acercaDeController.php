<?php

//Controlador de AcercaDe, la única función es cargar la vista respectiva.
class AcercaDeController {

    function acercaAction() {
        require_once "views/acercaDeView.php";
    }

}
