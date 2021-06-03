<?php 
//Se agrega el encabezado, en este caso es el menú estático.
    include_once './public/header.php';
?>

<br />
<br />
<br />
<br />
<br />
<br />

<!-- Título e instrucciones generales -->
<h2 class="center">Determinar la clasificación de Red</h2>
<br />
<h5 class="center">Instrucciones</h5>
<br />
<p id="texto"> Debe completar la información requerida.A continuación, se le presentan algunas opciones que de debe completar,
    esto ayudarán a identificar que tipo de red. Todas las respuestas son buenas, ya que el fin del instrumento es determinar la clase de red.</p>
<br />

<!-- Datos que se necesitan para realizar los cálculos -->
<form class="center" name="ingresada">
    Fiabilidad: <select name="fiabilidad" value="Fiabilidad">
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        </select><br>
        <br />
    Número de Enlaces: <select name="enlaces" value="Enlaces">
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        </select><br>
        <br />
    Capacidad total de la red: <select name="capacidad" value="Capacidad">
        <option value="High">Baja</option>
        <option value="Medium">Media</option>
        <option value="Low">Alta</option>
        </select><br>
        <br />
    Costo de la red: <select name="costo" value="Costo">
        <option value="High">Bajo</option>
        <option value="Medium">Medio</option>
        <option value="Low">Alto</option>
        </select><br>
        <br />

    <input value="Calcular" onclick="determinarRed()" type="button">
</form>
<br />

<!-- Etiquetas para mostrar el mensaje respectivo -->
<h2 class="center" id="tituloProbabilidades"></h2>
<br />
<h2 class="center estiloCalculado" id="claseACalculada"></h2>
<br />
<h2 class="center estiloCalculado" id="claseBCalculada"></h2>
<br />
<h2 class="center estiloCalculado" id="redAsignada"></h2>
<br />


<!-- Archivo de javascript donde se realizan los cálculos y utiliza AJAX -->
<script src="js_views/determinarRed.js" type="text/javascript"></script>

<?php 
//Se agrega el pie de página, en este caso son los scripts necesarios.
    include_once './public/footer.php'; 
?>