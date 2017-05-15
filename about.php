<?php include('cabeza.php');?>
<section>
<?php
$datos = array_map('str_getcsv', file('portafolio-academico.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($datos, function(&$a) use ($datos) {$a = array_combine($datos[0], $a);});
array_shift($datos);
?>
<h2>Sobre el proyecto</h2>
<p>Esto parte desde los viajes familiares que he tenido a Combarbalá y de lo aburrido que me pareció estar en ese lugar al no encontrar turismo en la zona, la primera vez que viajé nos recorrimos el pueblo en el día y ya no había más que hacer. Tienen actividades que se pueden potenciar aún más, como el observatorio o los petroglifos, además de crear otras para dar a conocer este pueblo, hacerlo más “divertido”.</p>

</section>
<?php include('pie.php');?>
