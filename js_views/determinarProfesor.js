function determinarProfesor(){

        //Variables de la edad.
        var edadTemporal = parseInt(document.ingresada.edad.value);
        var edad = 0;

        //if para validar los rangos de edades entre 1, 2 y 3
        if (edadTemporal <= 30) {
            edad = 1;
        }else if (edadTemporal > 30 && edadTemporal <= 55){
            edad = 2;
        }else if (edadTemporal > 55){
            edad = 3;
        }

    //Se crea un objeto para poder pasar la información
    let profesor = {    
        "edad" : edad,
        "sexo" : document.ingresada.sexo.value,
        "habilidad" : document.ingresada.habilidad.value,
        "impartido" : parseInt(document.ingresada.impartido.value),
        "area" : document.ingresada.area.value,
        "computadoras" : document.ingresada.computadoras.value,
        "tecnologias" : document.ingresada.tecnologias.value,
        "uso" : document.ingresada.uso.value
    };

    //Se utiliza AJAX de JQuery para poder pasar la información a la parte de DATA y
    //que la aplicación sea más interactiva.    
    $.ajax({
        url: "data/ProfesorData.php",
        data: profesor,
        type: "POST",
        success: function (result) {
            let obtenidos = JSON.parse(result);
            mostrarCalculos(obtenidos);
        },
        error: function (errorMessage) {
            window.alert('Error al realizar los cálculos');
        }
    });
}

//Se crea esta función que muestra las probabilidades obtenidas y se proporciona la información que el usuario
//espera ver.
function mostrarCalculos(obtenidos){

    //Muestra la información
    document.getElementById('tituloProbabilidades').innerHTML = 'Las probabilidades de los tipos son';

    document.getElementById('principianteCalculada').innerHTML = obtenidos[0]['clase']+': '+ obtenidos[0]['probabilidad'];

    document.getElementById('intermedioCalculada').innerHTML = obtenidos[1]['clase']+': '+ obtenidos[1]['probabilidad'];

    document.getElementById('avanzadoCalculada').innerHTML = obtenidos[2]['clase']+': '+ obtenidos[2]['probabilidad'];

    //Se define el mayor de las probabilidades obtenidas
    let maximo = Math.max(obtenidos[0]['probabilidad'], obtenidos[1]['probabilidad'], obtenidos[2]['probabilidad']);

    let asignado;

    //Se define cual clase es la que tiene mayor probabilidad
    if (maximo == obtenidos[0]['probabilidad']){
        asignado = obtenidos[0]['clase'];
    } else if (maximo == obtenidos[1]['probabilidad']) {
        asignado = obtenidos[1]['clase'];
    }else {
        asignado = obtenidos[2]['clase'];
    }

    //Muestra la clase asignada 
    document.getElementById('tipoAsignado').innerHTML = 'El tipo asignado es: '+ asignado;
}