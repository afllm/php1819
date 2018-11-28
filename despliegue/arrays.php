<!DOCTYPE html>
<html>
<head>
<!-- Alejandro Llamas -->
<meta charset="utf-8">
<title>ejercicios con arrays PHP</title>
</head>
<body>
<?php
echo "<h2>Ejercicios con arrays PHP</h2>";

/* 01 */
echo "<h3><hr>Ejercicio 01</h3>";

$arr = array(
    "Mamifero" => "Ballena",
    "Insecto" => "Hormiga"
);
reset($arr);
while (list ($indice) = each($arr))
    echo "Indice: $indice<br>\n";

/* 02 */
echo "<h3><hr>Ejercicio 02</h3>";

$arr = array(
    "Mamifero" => "Ballena",
    "Insecto" => "Hormiga"
);
reset($arr);
while (list ($indice, $valor) = each($arr))
    echo "Indice: $indice - Valor: $valor<br \>\n";

foreach ($arr as $indice => $value)
    echo "Indice: $indice - Valor: $value<br \>\n";

/* 03 */
echo "<h3><hr>Ejercicio 03</h3>";

$productos = array(
    "M" => "MESA",
    "S" => "SILLA",
    "F" => "FLEXO",
    "E" => "ESTANTERIA"
);
echo "Recorrido del array mediante el uso de variables.<br>";
echo "$productos[M]<br>";
echo "$productos[S]<br>";
echo "$productos[F]<br>";
echo "$productos[E]<br>";

echo "Recorrido del array mediante el uso del bucle while.<br>";
reset($productos);
while (list ($clave, $valor) = each($productos))
    echo "Clave: $clave; Valor: $valor<br \>\n";
echo "Recorrido del array mediante el uso de foreach.<br>";
foreach ($productos as $clave => $valor)
    echo "Clave: $clave; Valor: $valor<br \>\n";
echo "<br>";

/* 04 */
echo "<h3><hr>Ejercicio 04</h3>";

/*array_keys*/
echo "<p>array_keys</p>";
$ejer4= array_keys($productos);
var_dump($ejer4);

/*array_values*/
echo "<p>array_values</p>";
$ejer4= array_values($productos);
var_dump($ejer4);

/*in_array*/
echo "<p>in_array</p>";
$ejer4= in_array("sofa",$productos);
var_dump($ejer4);

/*range*/
echo "<p>range</p>";
$ejer4= range(20,40);
var_dump($ejer4);

/*array_reverse*/
echo "<p>array_reverse</p>";
$ejer4= array_reverse($productos);
var_dump($ejer4);

/*shuffle*/
echo "<p>shuffle</p>";
$ejer4= shuffle($productos);
var_dump($ejer4);

/*array_merge*/
echo "<p>array_merge</p>";
$ejer4= array_merge($productos, $arr);
var_dump($ejer4);

/* 05 */
echo "<h3><hr>Ejercicio 05</h3>";

echo "Array sin tocar:<br>";
echo var_dump($productos);
$variable=array_pop($productos);
echo "Despues de array_pop:<br>";
echo var_dump($productos);
echo "Variable creada:<br>";
echo var_dump($variable);
array_push($productos, $variable);
echo "Despues de array_push:<br>";
echo var_dump($productos);

/* 06 */
echo "<h3><hr>Ejercicio 06</h3>";

echo "Array sin tocar:<br>";
echo var_dump($productos);
$variable=array_shift($productos);
echo "Despues de array_shift:<br>";
echo var_dump($productos);
echo "Variable creada:<br>";
echo var_dump($variable);
array_unshift($productos, $variable);
echo "Despues de array_unshift:<br>";
echo var_dump($productos);

?>
</body>
</html>
