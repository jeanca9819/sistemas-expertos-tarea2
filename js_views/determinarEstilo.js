function calcularEstiloAprendizaje(){

    //Se utiliza el cálculo del profesor de EC, OR, CA, EA para aprovechar la lógica de cada elemento escogido.
    ec = parseInt(document.estilo.c5.value)+parseInt(document.estilo.c9.value)+parseInt(document.estilo.c13.value)+parseInt(document.estilo.c17.value)+parseInt(document.estilo.c25.value)+parseInt(document.estilo.c29.value);
    or = parseInt(document.estilo.c2.value)+parseInt(document.estilo.c10.value)+parseInt(document.estilo.c22.value)+parseInt(document.estilo.c26.value)+parseInt(document.estilo.c30.value)+parseInt(document.estilo.c34.value);
    ca = parseInt(document.estilo.c7.value)+parseInt(document.estilo.c11.value)+parseInt(document.estilo.c15.value)+parseInt(document.estilo.c19.value)+parseInt(document.estilo.c31.value)+parseInt(document.estilo.c35.value);
    ea = parseInt(document.estilo.c4.value)+parseInt(document.estilo.c12.value)+parseInt(document.estilo.c24.value)+parseInt(document.estilo.c28.value)+parseInt(document.estilo.c32.value)+parseInt(document.estilo.c36.value);

    //Se crea un objeto para poder pasar la información
    let estilo = {
        "ca" : ca,
        "ec" : ec,
        "ea" : ea,
        "or" : or,
        };
    
    //Se utiliza AJAX de JQuery para poder pasar la información a la parte de DATA y
    //que la aplicación sea más interactiva.
    $.ajax({
         url: "data/EstiloData.php",
        data: estilo,
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
    document.getElementById('tituloProbabilidades').innerHTML = 'Las probabilidades de los estilos son';
    
    document.getElementById('acomodadorCalculada').innerHTML = obtenidos[0]['clase']+': '+ obtenidos[0]['probabilidad'];
    
    document.getElementById('divergenteCalculada').innerHTML = obtenidos[1]['clase']+': '+ obtenidos[1]['probabilidad'];

    document.getElementById('asimiladorCalculada').innerHTML = obtenidos[2]['clase']+': '+ obtenidos[2]['probabilidad'];
    
    document.getElementById('convergenteCalculada').innerHTML = obtenidos[3]['clase']+': '+ obtenidos[3]['probabilidad'];
    
    //Se define el mayor de las probabilidades obtenidas
    let maximo = Math.max(obtenidos[0]['probabilidad'], obtenidos[1]['probabilidad'], obtenidos[2]['probabilidad'], obtenidos[3]['probabilidad']);
    
    let asignado;
        
    //Se define cual clase es la que tiene mayor probabilidad
    if (maximo == obtenidos[0]['probabilidad']){
        asignado = obtenidos[0]['clase'];
    } else if (maximo == obtenidos[1]['probabilidad']) {
        asignado = obtenidos[1]['clase'];
    }else if (maximo == obtenidos[2]['probabilidad']) {
        asignado = obtenidos[2]['clase'];
    }else {
        asignado = obtenidos[3]['clase'];
    }
    
    //Muestra la clase asignada 
    document.getElementById('estiloAsignado').innerHTML = 'El estilo asignado es: '+ asignado;
    
}