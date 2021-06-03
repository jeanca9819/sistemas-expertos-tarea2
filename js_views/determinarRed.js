function determinarRed(){

    //Se crea un objeto para poder pasar la información
    let red = {
    "fiabilidad" : parseInt(document.ingresada.fiabilidad.value),
    "enlaces" : parseInt(document.ingresada.enlaces.value),
    "capacidad" : document.ingresada.capacidad.value,
    "costo" : document.ingresada.costo.value
    };

    //Se utiliza AJAX de JQuery para poder pasar la información a la parte de DATA y
    //que la aplicación sea más interactiva.
    $.ajax({
        url: "data/RedData.php",
        data: red,
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
    document.getElementById('tituloProbabilidades').innerHTML = 'Las probabilidades de las clases son';

    document.getElementById('claseACalculada').innerHTML = obtenidos[0]['clase']+': '+ obtenidos[0]['probabilidad'];

    document.getElementById('claseBCalculada').innerHTML = obtenidos[1]['clase']+': '+ obtenidos[1]['probabilidad'];

    //Se define el mayor de las probabilidades obtenidas
    let maximo = Math.max(obtenidos[0]['probabilidad'], obtenidos[1]['probabilidad']);

    let asignado;

    //Se define cual clase es la que tiene mayor probabilidad
    if (maximo == obtenidos[0]['probabilidad']){
        asignado = obtenidos[0]['clase'];
    } else {
        asignado = obtenidos[1]['clase'];
    }

    //Muestra la clase asignada 
    document.getElementById('redAsignada').innerHTML = 'La clase asignada es: '+ asignado;
}