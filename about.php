<?php include('cabeza.php');?>
<section>
<?php
$datos = array_map('str_getcsv', file('portafolio-academico.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($datos, function(&$a) use ($datos) {$a = array_combine($datos[0], $a);});
array_shift($datos);
?>
<h2>Sobre el proyecto</h2>
<p>Esto parte desde los viajes familiares que he tenido a Combarbalá y de lo aburrido que me pareció estar en ese lugar al no encontrar turismo en la zona, el cual sólo aparece en las noticias cuando hay catástrofes, como temporales. La primera vez que visité Combarbalá nos recorrimos el pueblo en el día y ya no había mucho más que hacer.</p>
<p>Aún así tiene actividades que se pueden potenciar aún más, como el observatorio o los petroglifos, además de la posibilidad de crear otras para dar a conocer este pueblo y/o hacerlo más “divertido”, esto integrando tanto a los futuros visitantes, teniendo en cuenta qué es lo que es gustaría encontrar en este sitio y a lo pobladores del lugar, representando la identidad del lugar, integrando cómo se quieren mostrar a la sociedad.</p>

</section>
<?php include('pie.php');?>
