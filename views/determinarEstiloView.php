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
<h2 class="center">Determine su Estilo de Aprendizaje</h2>
<br />
<h5 class="center">Instrucciones</h5>
<br />
<p id="texto"> Debe completar la información requerida.A continuación, encontrará nueve filas de cuatro palabras cada una. 
Ordene de mayor a menor cada fila de cuatro palabras, ubicando 4 en la palabra que mejor caracteriza su estilo de aprendizaje,
un 3 en la palabra siguiente en cuanto a la correspondencia con su estilo; a la siguiente un 2, y un 1 a la palabra que menos 
caracteriza su estilo de aprendizaje. Tenga cuidado de ubicar un número distinto al lado de cada palabra en la misma línea.</p>
<p id="texto">Le puede ser difícil seleccionar las palabras que mejor describen su estilo de aprendizaje, ya que no
hay respuestas correctas o incorrectas. Todas las respuestas son buenas, ya que el fin del instrumento es describir
cómo y no juzgar su habilidad para aprender.</p>
<br />

<!-- Datos que se necesitan para realizar los cálculos -->
<form id="margin-table" name="estilo">
        <br /><h4>Yo aprendo...</h4>
  <table style="text-align: left; width: 100%;" border="2" cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="vertical-align: top; width: 25%;">
        <select name="c1">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
discerniendo<br>
        </td>
        <td style="vertical-align: top; width: 25%;">
        <select name="c2">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
ensayando<br>
        </td>
        <td style="vertical-align: top;">
        <select name="c3">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
involucrándome</td>
        <td style="vertical-align: top;">
        <select name="c4">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
practicando</td>
      </tr>
      <tr>
        <td style="vertical-align: top; width: 25%;">
        <select name="c5">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
receptivamente </td>
        <td style="vertical-align: top; width: 25%;">
        <select name="c6">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
relacionando </td>
        <td style="vertical-align: top;">
        <select name="c7">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
analíticamente </td>
        <td style="vertical-align: top;">
        <select name="c8">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
imparcialmente </td>
      </tr>
      <tr>
        <td style="vertical-align: top; width: 25%;">
        <select name="c9">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
sintiendo </td>
        <td style="vertical-align: top; width: 25%;">
        <select name="c10">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
observando </td>
        <td style="vertical-align: top;">
        <select name="c11">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
pensando </td>
        <td style="vertical-align: top;">
        <select name="c12">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
haciendo </td>
      </tr>
      <tr>
        <td style="vertical-align: top; width: 25%;">
        <select name="c13">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
aceptando </td>
        <td style="vertical-align: top; width: 25%;">
        <select name="c14">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
arriesgando </td>
        <td style="vertical-align: top;">
        <select name="c15">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
evaluando </td>
        <td style="vertical-align: top;">
        <select name="c16">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
con cautela </td>
      </tr>
      <tr>
        <td style="vertical-align: top; width: 25%;">
        <select name="c17">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
intuitivamente </td>
        <td style="vertical-align: top; width: 25%;">
        <select name="c18">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
productivamente </td>
        <td style="vertical-align: top;">
        <select name="c19">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
lógicamente </td>
        <td style="vertical-align: top;">
        <select name="c20">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
cuestionando </td>
      </tr>
      <tr>
        <td style="vertical-align: top; width: 25%;">
        <select name="c21">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
abstracto </td>
        <td style="vertical-align: top; width: 25%;">
        <select name="c22">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
observando </td>
        <td style="vertical-align: top;">
        <select name="c23">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
concreto </td>
        <td style="vertical-align: top;">
        <select name="c24">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
activo </td>
      </tr>
      <tr>
        <td style="vertical-align: top; width: 25%;">
        <select name="c25">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
orientado al presente </td>
        <td style="vertical-align: top; width: 25%;">
        <select name="c26">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
reflexivamente </td>
        <td style="vertical-align: top;">
        <select name="c27">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
orientado hacia el futuro </td>
        <td style="vertical-align: top;">
        <select name="c28">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
pragmático </td>
      </tr>
      <tr>
        <td style="vertical-align: top; width: 25%;">
        <select name="c29">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
más de la experiencia </td>
        <td style="vertical-align: top; width: 25%;">
        <select name="c30">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
más de la observación </td>
        <td style="vertical-align: top;">
        <select name="c31">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
más de la conceptualización </td>
        <td style="vertical-align: top;">
        <select name="c32">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
más de la experimentación </td>
      </tr>
      <tr>
        <td style="vertical-align: top; width: 25%;">
        <select name="c33">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
emotivo </td>
        <td style="vertical-align: top; width: 25%;">
        <select name="c34">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
reservado </td>
        <td style="vertical-align: top;">
        <select name="c35">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
racional </td>
        <td style="vertical-align: top;">
        <select name="c36">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
abierto </td>
      </tr>

    </tbody>
  </table>
  <br />

  <input value="Calcular" onclick="calcularEstiloAprendizaje()" type="button">
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
<script src="js_views/determinarEstilo.js" type="text/javascript"></script>

<?php
//Se agrega el pie de página, en este caso son los scripts necesarios. 
    include_once './public/footer.php'; 
?>