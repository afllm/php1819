<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ejercicios inicales PHP I</title>

<!--Alejandro Llamas-->

<style type="text/css">
    table,td,th{
        border: grey 1px solid;
        text-align: center;
    }
    .celda{
    
        background-color: black;
        color: yellow;
        font-size: 20px;
        
    }
    
</style>
</head>

 
    <body>
    <h2>Ejercicios inicales PHP I</h2>
    <?php
print "<hr>1. Crear un array unidimensional llamado frutas, con las frutas naranja, uva,
manzana, pera, fresa y melón. Mostrar las frutas por pantalla variable a variable
combinándolo con texto. Posteriormente, mostrar las frutas a través de un bucle.";
    
$frutas=["naranja","uva","manzana","pera","fresa","melon"];
print "<p>El valor 0 es: $frutas[0]</p>
<p>El valor 1 es: $frutas[1]</p>
<p>El valor 2 es: $frutas[2]</p>
<p>El valor 3 es: $frutas[3]</p>
<p>El valor 4 es: $frutas[4]</p>
<p>El valor 5 es: $frutas[5]</p>";

foreach ($frutas as $indice=>$valor){
    print "<p>Indice: $indice - Valor: $valor</p>";
}

print "<hr><p>2. Crear un array bidimensional llamado arraybi, con los valores para la primera fila,
uno, dos, y tres. La segunda fila tendrá los valores cuatro, cinco y seis, y la tercera
fila los valores siete, ocho y nueve. Mostrar los distintos valores por pantalla.
Posteriormente, investigar para mostrar los valores mediante el recorrido de arrays
bidimensionales.</p>
<p>3. Crear el array anterior frutas, en el que se dibuje el array, con un color de fondo
para los elementos, unos bordes, un color de letra y un tamaño. Considerar que
vamos a usar el atributo style para definir los estilos sobre etiquetas.</p>";

$arraybi=[["uno","dos","tres"],["cuatro","cinco","seis"],["siete","ocho","nueve"]];

print "<p>Valores del array bidimensional (uno por uno):</p></br>
Valor 0-0: ".$arraybi[0][0]."</br>
Valor 0-1: ".$arraybi[0][1]."</br>
Valor 0-2: ".$arraybi[0][2]."</br>
Valor 1-0: ".$arraybi[1][0]."</br>
Valor 1-1: ".$arraybi[1][1]."</br>
Valor 1-2: ".$arraybi[1][2]."</br>
Valor 2-0: ".$arraybi[2][0]."</br>
Valor 2-1: ".$arraybi[2][1]."</br>
Valor 2-2: ".$arraybi[2][2]."</br></p>";

print "<p>Valores del array bidimensional (con un bucle):</p></br>
<table><tr><th>#</th><th>0</th><th>1</th><th>2</th></tr>";

foreach($arraybi as $clave =>$indice){
    print"<tr><th>$clave</th>";
    
    foreach($indice as $subindice){
        print"<td class='celda'>".$subindice."</td>";
    }
    print"</tr>";
}
print"</table>";

print"<hr><p>4. Mostrar combinando con texto:</br>
a. Realizar la potencia de dos números.</br>
· 2 elevado a 8 = ".pow(2, 8)."</br></br>

b. El número entero más grande. ¿Cuántos bytes ocupa un número entero?
· Ocupa 4 bytes.
</br></br>c. Asignar a una variable un valor mayor al máximo entero. ¿Qué ocurre?";
    
$maximo=PHP_INT_MAX;
$maximoSize=PHP_INT_SIZE;//LO QUE OCUPA
$mayor=(int)($maximo+1);
print "</br>El numero máximo es: $maximo<br>si asignamos un número mayor, el resultado lo convierte a negativo: ".$mayor;


print"</br></br>d. ¿Cuántos bytes ocupa un número real en PHP? Intentar asignar a una
variable un valor superior al máximo real permitido. ¿Qué ocurre?</p>
 · Ocupa 8 bytes.<br>";
 $mayorReal=10*(pow(10, 308));
print "Al intertnarlo, devuelve: $mayorReal";

print "<hr><p>5. Dada la variable cadena, en el que le asignáis vuestro nombre y apellidos en
minúsculas. Modificar la cadena cambiando la primera letra de del nombre y de los
apellidos a mayúsculas. Posteriormente, mostrarlo por pantalla combinando con
texto.<p>";

$nomApe="alejandro llamas";
print "Sin cambiar: ".$nomApe;
print "</br>Cambiado: ".ucwords($nomApe);

print "<hr><p>6. ¿Qué es \$_REQUEST y para qué sirve? Hacer uso de PHP_SELF, mediante un ejemplo.</p>
<p>\$_REQUEST es una matriz donde se guardan la información recibida de un formulario</p>
<p>\$_SERVER[PHP_SELF]: $_SERVER[PHP_SELF]</p>";

 
print "<hr><p><strong>7. Mostrar combinando con texto:</strong></br></br><hr>
a. El redondeo de 3.5 , 4, y de -12.36. Comprobar si son enteros o reales.</p>";
    
    
    if (is_int(3.5)){
        print  "<p>El número 3,5 se redondea a:" . round(3.5)." y es entero</p>";
    }else if (is_float(3.5)) {
    
        print  "<p>El número 3,5 se redondea a:" . round(3.5)." y es real</p>";
    }else{
    	print("<p>na de na</p>");
    }
    if (is_int(4)){
        print  "<p>El número 4 se redondea a: " . round(4)." y es entero</p>";
    }else if (is_float(4)) {
        
        print  "<p>El número 4 se redondea a: " . round(4)." y es real</p>";
    }
    if (is_int(-12.36)){
        print  "<p>El número -12.36 se redondea a: " . round(-12.36)." y es entero</p>";
    }else if (is_float(-12.36)) {
        
        print  "<p>El número -12.36 se redondea a: " . round(-12.36)." y es real</p>";
    }
    

print "<hr><p> b. Redondear el número pi en 4 decimales. Mostrarlo.</p>";
print "El número PI, redondeado a 4 decimeles es: ".round(pi(),4)."</br></br>";
print "<hr>c. Redondear al entero inferior y entero posterior de los valores, 2.5, 2.6 y -3.1.</p></br>";
print "<table>
<tr><th>Número</th><th>Entero inferior</th><th>Entero posterior</th></tr>
<tr><td>2.5</td><td>".floor(2.5)."</td><td>".ceil(2.5)."</td></tr>
<tr><td>2.6</td><td>".floor(2.6)."</td><td>".ceil(2.6)."</td></tr>
<tr><td>-3.1</td><td>".floor(-3.1)."</td><td>".ceil(-3.1)."</td></tr>
</table>";
print "<p><hr>d. Crear un array max, que muestre el valor máximo y mínimo de una
secuencia de valores reales.</p>";
$max=[3.5,52.6,8.69,25.3,12.45];
print_r($max);
print"</br>El valor máximo del array es: ".max($max);
print"</br>El valor minimo del array es: ".min($max);
print "<hr><p>e. Formatear el número 123456789.1234, para que tenga dos decimales y que
 tenga como separador de miles el . y como separador de decimales la ,</p>";
print "Número 123456789.1234 formateado: ".number_format(123456789.1234, 2,",",".");
print "<hr><p>f. Obtener un número aleatorio y mostrar su valor. ¿Cuál es el valor máximo
que puede obtener? Usar las dos funciones.</p>";
print "Número aleatorio con rand: ".rand();
print "<br>Número aleatorio con mt_rand: ".mt_rand();
print "<br>El valor máximo con rand: 2".getrandmax();
print "<br>El valor máximo con mt_rand: 2".mt_getrandmax();
print "<hr><p>g. Obtener un número aleatorio comprendido entre 10 y 6789, usando dos
funciones distintas. Mostrar los resultados.</p>";
print "Número aleatorio entre 10 y 6789 con rand: ".rand(10,6789);
print "<br>Número aleatorio entre 10 y 6789 con mt_rand: ".mt_rand(10,6789);
print"<hr><p>h. Intentar obtener un valor aleatorio que supere el valor entero máximo. ¿Qué
ocurre?.</p>";
print "Número aleatorio con rand por encima del máximo: ".rand(232767,332767);
print "<br>Número aleatorio con mt_rand por encima del máximo: ".mt_rand(22147483647,32147483647);
print "<br>(La función rand() puede devolver valores mayores que los que devuelve cuando se la llama sin argumentos, pero no se puede superar el mayor número entero que maneja PHP). "
	?>
    </body>
 
</html>