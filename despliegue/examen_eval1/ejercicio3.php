<!DOCTYPE html>
<html>
<head>
<!-- Alejandro Llamas -->
<meta charset="utf-8">
<title>Examen 1ª evaluación - ejercicio 3</title>
</head>

<body>
	<h2>Examen 1ª evaluación - ejercicio 3</h2>
	
    <?php

    /* a */
    echo "<hr>A)<br>";

    function crearMatriz($filas, $columnas, $valor, $incremento)
    {
        $array = [];
        for ($i = 1; $i <= $filas; $i ++) {
            for ($j = 1; $j <= $columnas; $j ++) {
                $array['X' . $i]['Y' . $j] = $valor;
                $valor += $incremento;
            }
        }
        return $array;
    }

    /* b */
    echo "<hr>B)<br>";

    $mat = crearMatriz(3, 2, 3, 2);
    print_r($mat);
    var_dump($mat);

    /* c */
    echo "<hr>C)<br>";

    function mostrarMatriz($matriz)
    {
        foreach ($matriz as $key => $array) {
            $valor = $key;
            foreach ($array as $key2 => $value) {
                echo "Para el índice $valor e índice $key2 tiene valor $value <br>";
            }
        }
    }
    mostrarMatriz($mat);

    /* d */
    echo "<hr>D)<br>";

    function dibujarMatriz($array, $bdColor = "red", $bgColor = "lightgreen")
    {
        echo "<table style='border-collapse: collapse;
                text-align: center;margin: 0 auto'><tr><td></td>";
        
            /*No me sale*/echo"<td>Y1</td><td>Y2</td>";
            
            
            echo"<tr></tr>";
        
        
        foreach ($array as $key => $arrays) {

            echo "<td style='padding: 0 1em; border: 2px solid $bdColor'>$key</td>";

            foreach ($arrays as $value) {
                echo "<td style='padding: 0 1em; border: 2px solid $bdColor'>$value</td>";
            }
            echo "</tr>";
        }
        

        
    }

    dibujarMatriz($mat);

    ?>
    </body>

</html>