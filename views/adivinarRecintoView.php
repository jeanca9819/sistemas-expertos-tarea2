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
<h2 class="center">Adivinar su Recinto de Origen</h2>
<br />
<h5 class="center">Instrucciones</h5>
<br />
<p id="texto"> Debe completar la información requerida.A continuación, debe seleccionar su estilo de aprendizaje, sexo y proporcionar
su último promedio ponderado para matrícula.Todas las respuestas son buenas, ya que el fin del instrumento es adivinar su recinto.</p>
<br />

<!-- Datos que se necesitan para realizar los cálculos -->
<form class="center" name="ingresada">
  Sexo: <select name="sexo" value="Sexo">
        <option value="F">Femenino</option>
        <option value="M">Masculino</option>
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

    <input value="Adivinar" onclick="adivinarRecinto()" type="button">
</form>
<br />

<!-- Etiquetas para mostrar el mensaje respectivo -->
<h2 class="center" id="tituloProbabilidades"></h2>
<br />
<h2 class="center estiloCalculado" id="paraisoCalculada"></h2>
<br />
<h2 class="center estiloCalculado" id="turrialbaCalculada"></h2>
<br />
<h2 class="center estiloCalculado" id="recintoAsignado"></h2>
<br />

<!-- Archivo de javascript donde se realizan los cálculos y utiliza AJAX -->
<script src="js_views/adivinarRecinto.js" type="text/javascript"></script>

<?php 
    //Se agrega el pie de página, en este caso son los scripts necesarios.
    include_once './public/footer.php'; 
?>