<!DOCTYPE html>
<html>
<head>
	<title>Ejercicios con funciones PHP</title>
</head>
<body>

<?php

echo"<h2>Ejercicios con funciones PHP</h2>";

/*01*/
echo"<h3><hr>Ejercicio 01</h3>";

function mi_funcion()
{
    echo "Mi función ha sido invocada"; //instrucciones
    //return;
}
mi_funcion();
echo"<p>Devuelve el echo que hay dentro de la funcion, tanto con el return, como sin él.<p>";

/*02*/
echo"<h3><hr>Ejercicio 02</h3>";

echo "Paso de Parámetros1:";
function create_table($data)
{
    echo "<table border = 1>";
    reset($data);
    $value = current($data);
    while ($value){
        echo "<tr><td>$value</td></tr>\n";
        $value = next($data);
    }
    echo "</table>";
}
$mi_array = array ("Linea uno","Linea dos","Linea tres");
create_table($mi_array);
echo"<br>";
echo"RESET: Establece el puntero interno de un array a su primer elemento.<br>
CURRENT: Devuelve el elemnto actual de un array.<br>
NEXT: Avanza el puntero interno de un array.<br>";
echo"<p>Otro ejemplo:</p>";
function crearTabla($data)
{
    echo "<table border = 1>";
    reset($data);
    $value = current($data);
    while ($value!==false){
        echo "<tr><td>$value</td></tr>\n";
        $value = next($data);
    }
    echo "</table>";
}
$elMio = array ("Despliegue","Interfaces","Servidor","Cliente");
crearTabla($elMio);
echo"<br>El paso de parametros por valor es el predeterminado; se pasa un valor dado para cada argumento,<br>
y el valor del argumento solo cambia dentro de la función";

/*03*/
echo"<h3><hr>Ejercicio 03</h3>";
echo "Paso de Parámetros por Referencia:<br> ";
function incremento2(&$valor, $cantidad = 1)
{
    $valor += $cantidad;
}
$numero=10;
echo"Numero: $numero",
incremento2($numero,1);
echo "<br>Numero despues de cambiar dentro de la funcion: $numero";
echo"<br>";echo"<br>";
echo "El paso de parametros por referencia, utilizando '&' delante de la variable para ello, <br>
hace que si cambia el valor dentro de la funcion, cambie el valor de la variable de forma global.";

/*04*/
echo"<h3><hr>Ejercicio 04</h3>";
$n=5;
function factor($n){
    if($n<=0){
        return"Introduzca un numero mayor que cero(0)";
    }else if($n==1){
      return 1;  
    }else{
        return $n*factor($n-1)."<br>";
    }
};

echo"El factorial de $n es: <br>".factor($n);

/*05*/
echo"<h3><hr>Ejercicio 05</h3>";
echo "func_num_args(): Devuelve el número de argumentos pasados a la función<br>";
echo"func_get_arg(\$i): Devuelve el elemento '\$i' de una lista de argumentos";

?>
</body>
</html>

