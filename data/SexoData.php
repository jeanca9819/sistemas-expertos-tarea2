<?php
    //Incluyo la conexión con la base de datos
    include 'database.php';

        //Se obtienen los valores que se enviaron con AJAX
        $estilo_parametro = $_POST['estilo'];
        $recinto_parametro = $_POST['recinto'];
        $promedio_parametro = $_POST['promedio'];

        //Se definen los parámetros que va a enviar en el procedimiento almacenado.
        $connection->query("SET @estilo = '$estilo_parametro'");
        $connection->query("SET @recinto = '$recinto_parametro'");
        $connection->query("SET @promedio = '$promedio_parametro'");

        //Se llama el procedimiento almacenado con sus respectivos parámetros
        $connection->query("CALL determinar_probabilidades_sexo(@estilo, @recinto, @promedio, @probabilidad_f, @probabilidad_m);");

        //Se consultan los output del procedimiento almacenado.
        $result = $connection->query("SELECT @probabilidad_f, @probabilidad_m");

        //Se recorre el resultado y se guarda en variables.
        $row = $result->fetch_assoc();
        $probabilidad_f = $row['@probabilidad_f'];
        $probabilidad_m = $row['@probabilidad_m'];

        //Se guardan los valores con sus clases y probabilidades en un array.
        $sexos = array();
        $sexos[0] = array('clase'=>'Femenino','probabilidad'=>$probabilidad_f);
        $sexos[1] = array('clase'=>'Masculino','probabilidad'=>$probabilidad_m);

        //Se transforma ese array JSON.
        echo json_encode($sexos);
?>
