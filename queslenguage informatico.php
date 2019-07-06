<html>
<body>
<!ENCABEZADO DE VENTANA>
<head>
  <title>lenguages de programacion</title>
</head>

<!TITULO DE EH INPRENDIMIENTO DE INTRODUCCION>
 <h1><center>INTRODUCCION A MI "GUIA DE PROGRAMACION"<center></h1>

<!INTRODICCION A EL PROYECTO>
<h4><center>en este pequeño trabajo aprenderemos lo esencial y lo que hay que saber
para poder lograr empezar a escribir nuestras primeras lineas de codigo <br> y para empezar aprenderemos un poco de PHP<center></h4>

<br>

<!SUBTITUTO 1 ¿que es PHP?>
<h2>¿Que ES PHP?</h2>
<p>PHP es un <b>"lenguage de script y de codigo abierto"</b>, principalmente diseñado y enfocado en el desarrollo web</P>

<br>

<!datos importantes>
<h3>Datos Curiosos</h3>
<p>*Gran parte de las paginas web estan diseñadas y escritas en lenguage PHP<br>*un punto a favor de PHP es de que es compatible con HTML, lo cual nos
permitira trabajar en un mismo archivo conbinando codigo PHP junto con HTML</p>

<!subtitulo 2 ¿que es codigo abierto?>
<h2>¿Que es el Codigo abierto?</h2>
<p>Código abierto significa que es de uso libre y gratuito para todos los programadores que quieran usarlo</p>

<br>

<!subtitulo 3 ¿que puede hacer php?>
  <?php
echo "<h2>¿Que puede hacer PHP?</h2>";

print "<p>*PHP puede generar páginas con contenidos dinámicos <br>
*PHP puede crear, abrir, leer, escribir, borrar y cerrar archivos en el servidor<br>
*PHP puede recopilar datos de formularios<br>
*PHP puede enviar y recibir cookies<br>
*PHP puede añadir, borrar, modificar los datos de su base de datos<br>
*PHP se puede utilizar para controlar de acceso de usuario<br>
*PHP puede cifrar los datos</p>"

?>

<!subtitulo 4 Beneficios al usar php>
<h2>beneficios de php</h2>
<p>*PHP se ejecuta en varias plataformas (Windows, Linux, Unix, Mac OS X, etc.)<br>
*PHP es compatible con casi todos los servidores utilizados en la actualidad (Apache, IIS, etc.)<br>
*PHP soporta una amplia gama de bases de datos<br>
*PHP es gratuito. Puedes descargarlo desde el recurso oficial de PHP: www.php.net<br>
*PHP es fácil de aprender y funciona de manera eficiente en el lado del servidor<br>
*Un archivo PHP normalmente contiene etiquetas HTML, y un código de programación PHP. </p>

<?php
//sintaxis basica de PHP
echo "<h2>Sintaxis básica de PHP</h2>";

print "*Un script PHP se puede colocar en cualquier parte del documento<br>

*Un script PHP comienza con <?Php Y termina con ?> <br>

*para que funcione correctamente tu proyecto la extencion de el archivo se deve de gurdar como .php <br>

*declaraciones de PHP terminan con un punto y coma (;)";

?>


<?php
//comentarios dentro de PHP>

echo "<h2>comentarios dentro de PHP</h2>";

print "dentro de las sintaxis de php nos puede ser de gran ayuda utilizar los comentarios dentro de el codificador <br>
 ya que Un comentario en el código PHP es una línea que no es de lectura / ejecutado como parte del programa <br>
 y Su único propósito es para ser leído por alguien que está buscando en el código";

echo "<h3>Los comentarios pueden ser utilizados para:</h3>";

print "*Deje que los demás entienden lo que está haciendo.<br>
*Recuérdese a sí mismo de lo que hizo.<br>
*La mayoría de los programadores han experimentado regresando a su propio trabajo de un año o dos más tarde y tener que volver a averiguar lo que hicieron.<br>
*Comentarios pueden recordarle lo que estabas pensando cuando escribiste el código.";


echo "<h3>Hay diferentes maneras de comentar y aqui te mostraremos algunas como por ejemplo:</h3>";

print "<p> <b>//</b> Este es un comentario de una sola línea.<br>

<b>#</b> Este es también un comentario de una sola línea. <br>

<b>/*</b><br>
Este es un bloque de comentarios de múltiples líneas.<br>
que se extiende sobre múltiples<br>
líneas<br>
<b>*/</b>
</p>";

echo "<h3>un gran beneficio para algunos es que PHP no es muy sencible con las mayusculas a la hora de escribir codigo por ejemplo:</h3>"

 ?>

<p> ECHO "Hello World!";<br>
 echo "Hello World!";<br>
 EcHo "Hello World!";<br></p>

 <h2>varibles</h2>

<p>*Las variables son "contenedores" para el almacenamiento de información.<br>
*En PHP, una variable comienza con el signo $, seguido del nombre de la variable.<br>
*A diferencia de otros lenguajes de programación, PHP tiene ningún mandato para declarar una variable.<br>
*Una variable puede tener un nombre corto (como X e Y) o un nombre más descriptivo (edad, carname, total_volume)</p>

<h3>Reglas para las variables de PHP:</h3>

<p>*Una variable comienza con el signo $, seguido del nombre de la variable<br>
*Un nombre de variable debe comenzar con una letra o el carácter de subrayado<br>
*Un nombre de variable no puede comenzar con un número<br>
*Un nombre de variable sólo puede contener caracteres y guiones alfanuméricos (AZ, 0-9 y _)<br>
*Los nombres de variables entre mayúsculas y minúsculas ($ $ edad y la edad son dos variables diferentes)<br>
*Cuando se asigna un valor a una variable de texto, poner comillas alrededor del valor.</p>

<?php

echo "<h2>echo y print</h2>";

print "En PHP hay dos formas básicas para obtener una salida hacia la pantalla: echo y print.<br>

Las diferencias son pequeñas:<br>

*echo no tiene valor de retorno, mientras que print tiene un valor de retorno de 1 por lo que se puede utilizar en las expresiones.<br>
*echo puede tomar múltiples parámetros (aunque tal uso es raro) mientras que print puede tomar un argumento.<br>
*echo es marginalmente más rápido que print.<br>";

 ?>



 <a href="http://localhost/primer_trabajo/croquis/segundaventanaHTML.php" target="_self" onClick="window.open(this.href, this.target); return false;">ahora me gustaria enseñarles un poco mas de HTML</a>

</body>

</html>
