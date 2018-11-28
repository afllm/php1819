<!DOCTYPE html>
<html>
<head>
<!-- Alejandro Llamas -->
<meta charset="utf-8">
<title>Práctica 1 PHP</title>
</head>
<body>
	<h2>Práctica 1 PHP (Array Unidimensional + CSS)</h2>
<?php

/* a */
echo "<h3><hr>Ejercicio a</h3>";

function crearArray($ind1, $ind2, $val1, $val2, $elementos = 5)
{
    $array = Array();
    if ($ind2 <= $ind1) {
        return "El indice 2 debe ser mayor que el indice 1";
    } else if ($val2 <= $val1) {
        return "El valor 2 debe ser mayor que el valor 1";
    } else if (($ind2 - $ind1) < $elementos) {
        return "La diferencia entre los indices, debe ser mayor o igual al número de elementos";
    } else {
        while (count($array) < $elementos) {
            $indice = "X" . rand($ind1, $ind2);
            $valor = rand($val1, $val2);
            $array[$indice] = $valor;
            $mayorValor = max($array);
        }
        $ar2d = array();
        $ar2d[0] = $array;
        $ar2d[1] = $mayorValor;
        return $ar2d;
    }
}

$arrayE2 = crearArray(10, 30, 50, 500);
var_dump($arrayE2);

/* b */
echo "<h3><hr>Ejercicio b</h3>";

$arrayNew = crearArray(10, 25, 100, 200, 8);
print_r($arrayNew);

/* c */
echo "<h3><hr>Ejercicio c</h3>";

function mostrarArray($array, $bdColor = "blue", $bgColor = "orange")
{
    $n = 1;
    echo "<table style='border-collapse: collapse;
                text-align: center;margin: 0 auto'><tr>";

    foreach ($array as $arrays) {

        if ($n < count($array)) {
            foreach ($arrays as $value) {
                echo "<td style='padding: 0 1em; border: 2px solid $bdColor'>$value</td>";
            }
            $n ++;
        } else {
            echo "<td style='padding: 0 1em; border: 2px solid $bdColor;background-color:$bgColor'>$array[1]</td>";
        }
    }
    echo "</tr><tr>";
    $n = 1;
    foreach ($array as $arrays) {

        if ($n < count($array)) {
            foreach ($arrays as $key=>$value) {
                echo "<td>$key</td>";
            }
            $n ++;
        } else {
            echo "<td></td>";
        }
    }
    echo "</tr></table>";
}

mostrarArray($arrayNew);

/* d */
echo "<h3><hr>Ejercicio d</h3>";

function eliminarMaximoIndice($array)
{
    echo "Array a tratar: <br>";
    mostrarArray($array);
    $maxKey="";
    while (list($key,$value)=each($array[0])) {
        if ($key>$maxKey) {
            $maxKey=$key;
            
        }
    }
   unset($array[0][$maxKey]);
   $array[1]=max($array[0]);
    echo "Array con elemento eliminado: <br>";    
    mostrarArray($array, 'red', 'green');
    return $array;
}

$arrayNew = eliminarMaximoIndice($arrayNew);

/* e */
echo "<h3><hr>Ejercicio e</h3>";

function ordenarArrayIndice($array) {
    ksort($array[0]);
    mostrarArray($array, 'yellow', 'pink');
}

ordenarArrayIndice($arrayNew);

/* f */
echo "<h3><hr>Ejercicio f</h3>";

function ordenarValorArray($array) {
    asort($array[0]);
    mostrarArray($array, 'green', 'yellow');
}

ordenarValorArray($arrayNew);

?>
</body>
</html>