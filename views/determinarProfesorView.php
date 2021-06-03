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
<h2 class="center">Determinar tipo de Profesor</h2>
<br />
<h5 class="center">Instrucciones</h5>
<br />
<p id="texto"> Debe completar la información requerida.A continuación, se le presentan algunas opciones que de debe completar,
    esto ayudarán a identificar que tipo de profesor es. Todas las respuestas son buenas, ya que el fin del instrumento es determinar su tipo.</p>
<br />

<!-- Datos que se necesitan para realizar los cálculos -->
<form class="margen_form" name="ingresada">
    Edad: <input type="Text" name="edad"><br>
        <br />
    Sexo: <select name="sexo" value="Sexo">
        <option value="F">Femenino</option>
        <option value="M">Masculino</option>
        <option value="NA">Prefiero no ponerlo</option>
        </select><br>
        <br />
    Habilidad o experiencia enseñando: <select name="habilidad" value="Habilidad">
        <option value="B">Principiante</option>
        <option value="I">Intermedio</option>
        <option value="A">Avanzado</option>
        </select><br>
        <br />
    Cantidad de veces que ha impartido el curso: <select name="impartido" value="Impartido">
        <option value="1">Nunca</option>
        <option value="2">1 a 5 veces</option>
        <option value="3">Más de 5 veces</option>
        </select><br>
        <br />
    Disciplina o área de especialización: <select name="area" value="Area">
        <option value="DM">Toma de decisiones</option>
        <option value="ND">Diseño de red</option>
        <option value="O">Otro</option>
        </select><br>
        <br />
    Habilidad usando computadoras: <select name="computadoras" value="Computadoras">
        <option value="L">Bajo</option>
        <option value="A">Promedio</option>
        <option value="H">Alto</option>
        </select><br>
        <br />
    Experiencia enseñando en tecnologías para la web: <select name="tecnologias" value="Tecnologias">
        <option value="O">A menudo</option>
        <option value="S">A veces</option>
        <option value="N">Nunca</option>
        </select><br>
        <br />
    Experiencia en el uso de sitios web: <select name="uso" value="Uso">
        <option value="O">A menudo</option>
        <option value="S">A veces</option>
        <option value="N">Nunca</option>
        </select><br>
        <br />

    <input value="Calcular" onclick="determinarProfesor()" type="button">
</form>
<br />

<!-- Etiquetas para mostrar el mensaje respectivo -->
<h2 class="center" id="tituloProbabilidades"></h2>
<br />
<h2 class="center estiloCalculado" id="principianteCalculada"></h2>
<br />
<h2 class="center estiloCalculado" id="intermedioCalculada"></h2>
<br />
<h2 class="center estiloCalculado" id="avanzadoCalculada"></h2>
<br />
<h2 class="center estiloCalculado" id="tipoAsignado"></h2>
<br />

<!-- Archivo de javascript donde se realizan los cálculos y utiliza AJAX -->
<script src="js_views/determinarProfesor.js" type="text/javascript"></script>

<?php 
//Se agrega el pie de página, en este caso son los scripts necesarios.
    include_once './public/footer.php'; 
?>