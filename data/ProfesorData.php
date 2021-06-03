<?php
    //Incluyo la conexión con la base de datos
    include 'database.php';

        //Se obtienen los valores que se enviaron con AJAX
        $age_parametro = $_POST['edad'];
        $sexo_parametro = $_POST['sexo'];
        $autoevaluacion_parametro = $_POST['habilidad'];
        $participacion_parametro = $_POST['impartido'];
        $especializacion_parametro = $_POST['area'];
        $habilidad_parametro = $_POST['computadoras'];
        $experiencia_web_ensenanza_parametro = $_POST['tecnologias'];
        $experiencia_web_parametro = $_POST['uso'];

        //Se definen los parámetros que va a enviar en el procedimiento almacenado.
        $connection->query("SET @a = '$age_parametro'");
        $connection->query("SET @b = '$sexo_parametro'");
        $connection->query("SET @c = '$autoevaluacion_parametro'");
        $connection->query("SET @d = '$participacion_parametro'");
        $connection->query("SET @e = '$especializacion_parametro'");
        $connection->query("SET @f = '$habilidad_parametro'");
        $connection->query("SET @g = '$experiencia_web_ensenanza_parametro'");
        $connection->query("SET @h = '$experiencia_web_parametro'");

        //Se llama el procedimiento almacenado con sus respectivos parámetros
        $connection->query("CALL determinar_probabilidades_profesores(@a, @b , @c, @d, @e, @f, @g, @h, @probabilidad_principiante, @probabilidad_intermedio, @probabilidad_avanzado);");

        //Se consultan los output del procedimiento almacenado.
        $result = $connection->query("SELECT @probabilidad_principiante, @probabilidad_intermedio, @probabilidad_avanzado");

        //Se recorre el resultado y se guarda en variables.
        $row = $result->fetch_assoc();
        $probabilidad_principiante = $row['@probabilidad_principiante'];
        $probabilidad_intermedio = $row['@probabilidad_intermedio'];
        $probabilidad_avanzado = $row['@probabilidad_avanzado'];

        //Se guardan los valores con sus clases y probabilidades en un array.
        $profesores = array();
        $profesores[0] = array('clase'=>'Principiante','probabilidad'=>$probabilidad_principiante);
        $profesores[1] = array('clase'=>'Intermedio','probabilidad'=>$probabilidad_intermedio);
        $profesores[2] = array('clase'=>'Avanzado','probabilidad'=>$probabilidad_avanzado);

        //Se transforma ese array JSON.
        echo json_encode($profesores);
?>