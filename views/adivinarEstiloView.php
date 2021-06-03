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
<h2 class="center">Adivinar su Estilo de Aprendizaje</h2>
<br />
<h5 class="center">Instrucciones</h5>
<br />
<p id="texto"> Debe completar la información requerida.A continuación, debe seleccionar su sexo, su recinto y proporcionar
su último promedio ponderado para matrícula.Todas las respuestas son buenas, ya que el fin del instrumento es adivinar su recinto.</p>
<br />

<!-- Datos que se necesitan para realizar los cálculos -->
<form class="center" name="ingresada">
  Sexo: <select name="sexo" value="Sexo">
        <option value="F">Femenino</option>
        <option value="M">Masculino</option>
        </select><br>
        <br />
  Recinto: <select name="recinto" value="Recinto">
        <option value="Paraiso">Paraíso</option>
        <option value="Turrialba">Turrialba</option>
        </select><br>
        <br />
    Promedio Ponderado: <input type="Text" name="promedio"><br>
    <br />

    <input value="Adivinar" onclick="adivinarEstilo()" type="button">
</form>
<br />

<!-- Etiquetas para mostrar el mensaje respectivo -->
<h2 class="center" id="tituloProbabilidades"></h2>
<br />
<h2 class="center estiloCalculado" id="acomodadorCalculada"></h2>
<br />
<h2 class="center estiloCalculado" id="divergenteCalculada"></h2>
<br />
<h2 class="center estiloCalculado" id="asimiladorCalculada"></h2>
<br />
<h2 class="center estiloCalculado" id="convergenteCalculada"></h2>
<br />
<h2 class="center estiloCalculado" id="estiloAsignado"></h2>
<br />
<!-- Archivo de javascript donde se realizan los cálculos y utiliza AJAX -->
<script src="js_views/adivinarEstilo.js" type="text/javascript"></script>

<?php 
    //Se agrega el pie de página, en este caso son los scripts necesarios.
    include_once './public/footer.php'; 
?>