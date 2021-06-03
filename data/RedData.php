<?php
    //Incluyo la conexión con la base de datos
    include 'database.php';

        //Se obtienen los valores que se enviaron con AJAX
        $confiabilidad_parametro = $_POST['fiabilidad'];
        $enlaces_parametro = $_POST['enlaces'];
        $capacidad_parametro = $_POST['capacidad'];
        $costo_parametro = $_POST['costo'];

        //Se definen los parámetros que va a enviar en el procedimiento almacenado.
        $connection->query("SET @confiabilidad = '$confiabilidad_parametro'");
        $connection->query("SET @enlaces = '$enlaces_parametro'");
        $connection->query("SET @capacidad = '$capacidad_parametro'");
        $connection->query("SET @costo = '$costo_parametro'");

        //Se llama el procedimiento almacenado con sus respectivos parámetros
        $connection->query("CALL determinar_probabilidades_redes(@confiabilidad, @enlaces, @capacidad, @costo, @probabilidad_a, @probabilidad_b);");

        //Se consultan los output del procedimiento almacenado.
        $result = $connection->query("SELECT @probabilidad_a, @probabilidad_b");

        //Se recorre el resultado y se guarda en variables.
        $row = $result->fetch_assoc();
        $probabilidad_a = $row['@probabilidad_a'];
        $probabilidad_b = $row['@probabilidad_b'];

        //Se guardan los valores con sus clases y probabilidades en un array.
        $redes = array();
        $redes[0] = array('clase'=>'Clase A','probabilidad'=>$probabilidad_a);
        $redes[1] = array('clase'=>'Clase B','probabilidad'=>$probabilidad_b);

        //Se transforma ese array JSON.
        echo json_encode($redes);
?>
