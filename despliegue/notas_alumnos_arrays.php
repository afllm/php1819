<!DOCTYPE html>
<html>
<head>
<!-- Alejandro Llamas -->
<meta charset="utf-8">
<title>Recorrido de arrays PHP</title>
</head>
<body>
<?php
echo "<h2>Notas alumnos - arrays PHP</h2>";

/* a */
echo "<h3><hr>Ejercicio a</h3>";

$notasAlumnos = array(
    "AL1"=>array('DAW'=>7, 'DIW'=>8, 'DWS'=>8, 'DWC'=>7),
    "AL2"=>array('DAW'=>6, 'DIW'=>5, 'DWS'=>4, 'DWC'=>3),
    "AL3"=>array('DAW'=>8, 'DIW'=>8, 'DWS'=>8, 'DWC'=>9),
    "AL4"=>array('DAW'=>4, 'DIW'=>3, 'DWS'=>3, 'DWC'=>6)
);

var_dump($notasAlumnos);

/* b */
echo "<h3><hr>Ejercicio b</h3>";

function mostrarNotasAlumnos($arNotas){
	foreach ($arNotas as $key=>$arrays) {
	    $alumno=$key ;
	    foreach ($arrays as $key=>$value) {
		        echo"El alumno $alumno de la asignatura $key ha obtenido un $value<BR>";
		    }
	        
	}
}

mostrarNotasAlumnos($notasAlumnos);

/* c */
echo "<h3><hr>Ejercicio c</h3>";

function mostrarNotasAlumno($arNotas, $al){
	foreach ($arNotas as $key=>$arrays) {
		if ($key===$al) {
			$alumno=$key ;
			    foreach ($arrays as $key=>$value) {
				        echo"La nota del alumno $alumno para la asignatura $key es $value<BR>";
				    }
		}  
	}
}

mostrarNotasAlumno($notasAlumnos, 'AL3');


/* d */
echo "<h3><hr>Ejercicio d</h3>";

function Mostrar_NotaMasAlta_Alumno($arNotas, $al){
	$notaMasAlta=0;
	$asignatura="";
	$alumno="";
	foreach ($arNotas as $key=>$arrays) {
		if ($key===$al) {
			$alumno=$key ;
			    foreach ($arrays as $key=>$value) {
				        if ($value > $notaMasAlta) {
				        	$asignatura=$key;
				        	$notaMasAlta=$value;
				        }
				    }
		}  
	}

	echo "La nota más alta del  alumno $alumno, es un $notaMasAlta en $asignatura";
}

Mostrar_NotaMasAlta_Alumno($notasAlumnos, 'AL2');

?>
</body>
</html>