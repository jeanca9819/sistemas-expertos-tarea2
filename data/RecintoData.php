<?php
    //Incluyo la conexión con la base de datos
    include 'database.php';

        //Se obtienen los valores que se enviaron con AJAX
        $estilo_parametro = $_POST['estilo'];
        $sexo_parametro = $_POST['sexo'];
        $promedio_parametro = $_POST['promedio'];

        //Se definen los parámetros que va a enviar en el procedimiento almacenado.
        $connection->query("SET @estilo = '$estilo_parametro'");
        $connection->query("SET @sexo = '$sexo_parametro'");
        $connection->query("SET @promedio = '$promedio_parametro'");

        //Se llama el procedimiento almacenado con sus respectivos parámetros
        $connection->query("CALL determinar_probabilidades_recinto(@estilo, @sexo, @promedio, @probabilidad_paraiso, @probabilidad_turrialba);");

        //Se consultan los output del procedimiento almacenado.
        $result = $connection->query("SELECT @probabilidad_paraiso, @probabilidad_turrialba");

        //Se recorre el resultado y se guarda en variables.
        $row = $result->fetch_assoc();
        $probabilidad_paraiso = $row['@probabilidad_paraiso'];
        $probabilidad_turrialba = $row['@probabilidad_turrialba'];

        //Se guardan los valores con sus clases y probabilidades en un array.
        $recintos = array();
        $recintos[0] = array('clase'=>'Paraíso','probabilidad'=>$probabilidad_paraiso);
        $recintos[1] = array('clase'=>'Turrialba','probabilidad'=>$probabilidad_turrialba);

        //Se transforma ese array JSON.
        echo json_encode($recintos);
?>
