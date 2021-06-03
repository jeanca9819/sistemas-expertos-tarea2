<?php
    //Incluyo la conexión con la base de datos
    include 'database.php';

        //Se obtienen los valores que se enviaron con AJAX
        $ca_parametro = $_POST['ca'];
        $ec_parametro = $_POST['ec'];
        $ea_parametro = $_POST['ea'];
        $or_parametro = $_POST['or'];

        //Se definen los parámetros que va a enviar en el procedimiento almacenado.
        $connection->query("SET @ca = '$ca_parametro'");
        $connection->query("SET @ec = '$ec_parametro'");
        $connection->query("SET @ea = '$ea_parametro'");
        $connection->query("SET @or = '$or_parametro'");

        //Se llama el procedimiento almacenado con sus respectivos parámetros
        $connection->query("CALL determinar_probabilidades_estilo1(@ca, @ec, @ea, @or, @probabilidad_acomodador, @probabilidad_divergente, @probabilidad_asimilador, @probabilidad_convergente);");

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
