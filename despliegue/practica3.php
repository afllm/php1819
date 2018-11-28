<!DOCTYPE html>
<html>
<head>
<!-- Alejandro Llamas -->
<meta charset="utf-8">
<title>Práctica 3 PHP</title>
</head>
<body>
	<h2>Práctica 3 (Array Tridimensional + CSS)</h2>
<?php

/* a */
echo "<h3><hr>Ejercicio a</h3>";

function crearArrayTri($valor, $incremento, $filas, $colunmas, $z)
{
    $matriz = [];
    for ($i = 1; $i <= $z; $i ++) {
        for ($j = 1; $j <= $filas; $j ++) {
            for ($k = 1; $k <= $colunmas; $k ++) {
                $matriz['Z' . $i]['X' . $j]['Y' . $k] = $valor;
                $valor += $incremento;
            }
        }
    }

    return $matriz;
}

$matriz = crearArrayTri(4, 2, 3, 4, 2);
var_dump($matriz);

/* b */
echo "<h3><hr>Ejercicio b</h3>";

$array = crearArrayTri(4, 2, 3, 4, 2);

print_r($array);

/* c */
echo "<h3><hr>Ejercicio c</h3>";

function mostrarArrayTri($matriz)
{
    foreach ($matriz as $claveZ => $matrizZ) {
        foreach ($matrizZ as $claveX => $matrizX) {
            foreach ($matrizX as $claveY => $valorY) {
                echo "para el indice $claveX, índice $claveY e índice $claveZ, tiene el valor: $valorY<br>";
            }
        }
    }
}

mostrarArrayTri($array);

/* d */
echo "<h3><hr>Ejercicio d</h3>";

function dibujarArrayTri($matriz, $bdColor = 'red', $bgColor = 'lightgreen')
{
    foreach ($matriz as $claveZ => $matrizZ) {
        echo "<table style='border-collapse: collapse; text-align: center;margin: 0 auto'><tr>";
        echo "<th style='padding: 0 2em; border: 2px solid $bdColor; background-color:$bgColor'>$claveZ</th>";
        list (, $claves) = each($matrizZ);
        foreach ($claves as $clave => $valor) {
            echo "<th style='padding: 0 2em; border: 2px solid $bdColor; background-color:$bgColor'>$clave</th>";
        }
        echo "</tr>";
        foreach ($matrizZ as $claveX => $matrizX) {
            echo"<th style='padding: 0 2em; border: 2px solid $bdColor; background-color:$bgColor'>$claveX</th>";
            foreach ($matrizX as $claveY => $valorY) {
                echo"<td style='padding: 0 1em; border: 2px solid $bdColor; background-color:$bgColor'>$valorY</td>";
            }
            echo"</tr>";
        }

        echo "</table><br>";
    }
}

dibujarArrayTri($array);

?>
</body>
</html>