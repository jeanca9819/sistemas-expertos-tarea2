function adivinarRecinto(){

    //Se definen los valores necesarios para determinar rangos de promedios, buscando una mejor precisión.
    let promedioTemporal = parseFloat(document.ingresada.promedio.value);
	let promedioMenor = 0.0;
	let promedioMayor = 0.5;
    let promedioFinal = 0.0;
    
    //Ciclo para definir cual es el rango de promedio ingresado.
    while (promedioFinal == 0.0) {

        if (promedioTemporal > promedioMenor && promedioTemporal <= promedioMayor){
            promedioFinal = promedioMayor;
        }

		promedioMenor = promedioMayor;
		promedioMayor = promedioMayor+0.5;

      }

    //Se crea un objeto para poder pasar la información
    let recinto = {
    "sexo" : document.ingresada.sexo.value,
    "estilo" : document.ingresada.estilo.value,
    "promedio" : promedioFinal
    };

    //Se utiliza AJAX de JQuery para poder pasar la información a la parte de DATA y
    //que la aplicación sea más interactiva.
    $.ajax({
        url: "data/RecintoData.php",
        data: recinto,
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
    document.getElementById('tituloProbabilidades').innerHTML = 'Las probabilidades de los recintos son';

    document.getElementById('paraisoCalculada').innerHTML = obtenidos[0]['clase']+': '+ obtenidos[0]['probabilidad'];

    document.getElementById('turrialbaCalculada').innerHTML = obtenidos[1]['clase']+': '+ obtenidos[1]['probabilidad'];

    //Se define el mayor de las probabilidades obtenidas
    let maximo = Math.max(obtenidos[0]['probabilidad'], obtenidos[1]['probabilidad']);

    let asignado;

    //Se define cual clase es la que tiene mayor probabilidad
    if (maximo == obtenidos[0]['probabilidad']){
        asignado = obtenidos[0]['clase'];
    } else {
        asignado = obtenidos[1]['clase'];
    }

    //Muestra la posible clase
    document.getElementById('recintoAsignado').innerHTML = 'Es probable que su recinto sea: '+ asignado;
}