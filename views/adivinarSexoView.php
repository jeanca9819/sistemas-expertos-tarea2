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
<h2 class="center">Adivinar su Sexo</h2>
<br />
<h5 class="center">Instrucciones</h5>
<br />
<p id="texto"> Debe completar la información requerida.A continuación, debe seleccionar su recinto, su estilo de aprendizaje y proporcionar
su último promedio ponderado para matrícula.Todas las respuestas son buenas, ya que el fin del instrumento es adivinar su sexo.</p>
<br />

<!-- Datos que se necesitan para realizar los cálculos -->
<form class="center" name="ingresada">
  Recinto: <select name="recinto" value="Recinto">
        <option value="Paraiso">Paraíso</option>
        <option value="Turrialba">Turrialba</option>
        </select><br>
        <br />
  Estilo de Aprendizaje: <select name="estilo" value="Estilo">
        <option value="ACOMODADOR">Acomodador</option>
        <option value="DIVERGENTE">Divergente</option>
        <option value="ASIMILADOR">Asimilador</option>
        <option value="CONVERGENTE">Convergente</option>
        </select><br>
        <br />
    Promedio Ponderado: <input type="Text" name="promedio"><br>
    <br />

    <input value="Adivinar" onclick="adivinarSexo()" type="button">
</form>
<br />

<!-- Etiquetas para mostrar el mensaje respectivo -->
<h2 class="center" id="tituloProbabilidades"></h2>
<br />
<h2 class="center estiloCalculado" id="femeninoCalculada"></h2>
<br />
<h2 class="center estiloCalculado" id="masculinoCalculada"></h2>
<br />
<h2 class="center estiloCalculado" id="sexoAsignado"></h2>
<br />
<!-- Archivo de javascript donde se realizan los cálculos y utiliza AJAX -->
<script src="js_views/adivinarSexo.js" type="text/javascript"></script>

<?php 
    //Se agrega el pie de página, en este caso son los scripts necesarios.
    include_once './public/footer.php'; 
?>