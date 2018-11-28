<!DOCTYPE html>
<html>
<head>
<!-- Alejandro Llamas -->
<meta charset="utf-8">
<title>Práctica 2 PHP</title>
</head>
<body>
	<h2>Práctica 2 PHP (Array Bidimensional + CSS)</h2>
<?php

/* a */
echo "<h3><hr>Ejercicio a</h3>";

function crearMatriz($filas, $columnas, $valor, $incremento) {
    $matriz=[];
    for ($i = 1; $i <= $filas; $i++) {
        for ($j = 1; $j <= $columnas; $j++) {
            //$fila=
            $matriz['X'.$i]['Y'.$j]=$valor;
            $valor+=$incremento;
        }
     }   
    
    
    return $matriz;
}

$nuevaMatriz=crearMatriz(10,5,20,10);
print_r($nuevaMatriz);

/* b */
echo "<h3><hr>Ejercicio b</h3>";

$mat=crearMatriz(3,2,3,2);
print_r($mat);

/* c */
echo "<h3><hr>Ejercicio c</h3>";

function mostrarMatriz($matriz){
    
    foreach ($matriz as $claveX=>$matInt) {
        
        
        foreach ($matInt as $claveY => $valor) {
            echo "Para el índice $claveX e índice $claveY tiene valor: $valor <br>";
        }
        echo "<br>";
    }
}

mostrarMatriz($nuevaMatriz);

/* d */
echo "<h3><hr>Ejercicio d</h3>";

function dibujarMatriz($array, $bdColor='blue',$bgColor='orange'){
    echo "<table style='border-collapse: collapse; text-align: center;margin: 0 auto'><tr>";
    foreach ($array as $key1=>$value1) {
        echo"<th style='padding: 0 1em; border: 2px solid $bdColor; background-color:$bgColor'>$key1</th>";
        foreach ($value1 as $key2=>$value2) {
            echo"<td style='padding: 0 1em; border: 2px solid $bdColor; background-color:$bgColor'>$value2</td>";
        }
        echo"</tr>";
    }
    echo"</table>";
    
}

dibujarMatriz($mat);

/* d */
echo "<h3><hr>Ejercicio d</h3>";

function dibujarMatriz2($array, $bdColor='red',$bgColor='lightgreen'){
    echo "<table style='border-collapse: collapse; text-align: center;margin: 0 auto'><tr><td>";
    
    list(,$claves)=each($array);
    
    foreach ($claves as $key=>$value) {
            echo"<th style='padding: 0 1em; border: 2px solid $bdColor; background-color:$bgColor'>$key</th>";
        }
        echo"</tr>";
    
    foreach ($array as $key1=>$value1) {
        echo"<th style='padding: 0 1em; border: 2px solid $bdColor; background-color:$bgColor'>$key1</th>";
        foreach ($value1 as $key2=>$value2) {
            echo"<td style='padding: 0 1em; border: 2px solid $bdColor; background-color:$bgColor'>$value2</td>";
        }
        echo"</tr>";
    }
    
    echo"</table>";
    
}

dibujarMatriz2($mat);

?>
</body>
</html>