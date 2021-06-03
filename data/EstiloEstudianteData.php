<?php
    //Incluyo la conexión con la base de datos
    include 'database.php';

        //Se obtienen los valores que se enviaron con AJAX
        $sexo_parametro = $_POST['sexo'];
        $recinto_parametro = $_POST['recinto'];
        $promedio_parametro = $_POST['promedio'];

        //Se definen los parámetros que va a enviar en el procedimiento almacenado.
        $connection->query("SET @sexo = '$sexo_parametro'");
        $connection->query("SET @recinto = '$recinto_parametro'");
        $connection->query("SET @promedio = '$promedio_parametro'");

        //Se llama el procedimiento almacenado con sus respectivos parámetros
        $connection->query("CALL determinar_probabilidades_estilo2(@sexo, @recinto, @promedio, @probabilidad_acomodador, @probabilidad_divergente, @probabilidad_asimilador, @probabilidad_convergente);");

        //Se consultan los output del procedimiento almacenado.
        $result = $connection->query("SELECT @probabilidad_acomodador, @probabilidad_divergente, @probabilidad_asimilador, @probabilidad_convergente");

        //Se recorre el resultado y se guarda en variables.
        $row = $result->fetch_assoc();
        $probabilidad_acomodador = $row['@probabilidad_acomodador'];
        $probabilidad_divergente = $row['@probabilidad_divergente'];
        $probabilidad_asimilador = $row['@probabilidad_asimilador'];
        $probabilidad_convergente = $row['@probabilidad_convergente'];

        //Se guardan los valores con sus clases y probabilidades en un array.
        $estilos = array();
        $estilos[0] = array('clase'=>'Acomodador','probabilidad'=>$probabilidad_acomodador);
        $estilos[1] = array('clase'=>'Divergente','probabilidad'=>$probabilidad_divergente);
        $estilos[2] = array('clase'=>'Asimilador','probabilidad'=>$probabilidad_asimilador);
        $estilos[3] = array('clase'=>'Convergente','probabilidad'=>$probabilidad_convergente);

        //Se transforma ese array JSON.
        echo json_encode($estilos);
?>
