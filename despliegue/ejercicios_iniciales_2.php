<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>

<!-- Alejandro Llamas -->

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ejercicios inciales PHP II</title>
</head>

<body>
	<h2>Ejercicios inciales PHP II</h2>
    <?php
    echo "<h4><hr>Ejercicio 1</h4>";
    $n = 5;
    $a = 10;
    $b = 1000;
    $array = [];
    echo "a)<br>";
    for ($i = 0; $i < $n; $i ++) {
        $array[$i] = rand($a, $b);
        echo "El elemento de posición $i tendrá el valor $array[$i]</br>";
    }
    echo "b)<br>";
    $i = 0;
    while ($i < $n) {
        echo "El elemento de posición $i tendrá el valor $array[$i]</br>";
        $i ++;
    }
    echo "<br>Uso de funciones<br>";

    function crearMostrarArray($n, $a, $b){
        $array=[];
        for ($i = 0; $i < $n; $i ++) {
            $array[$i] = rand($a, $b);
            
        }
        return $array;
    }
    echo "<br>print_r():<br>";
    print_r(crearMostrarArray(5, 10, 1000));
    echo "<br>var_dump():<br>";
    var_dump(crearMostrarArray(5, 10, 1000));
    
    echo "<h4><hr>Ejercicio 2</h4>";
    function matrizBidimensional($n,$m,$x,$p) {
        $array=[];
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $m; $j++) {
                $array[$i][$j]=$x;
                $x+=$p;
            }
            
        }
        return $array;
    }
    echo "a)<br>";
    echo "<br>print_r():<br>";
    print_r(matrizBidimensional(5, 10, 6, 3));
    echo "<br>var_dump():<br>";
    var_dump(matrizBidimensional(5, 10, 6, 3));
    echo"<br>";
    echo "<br>b)<br>";
    $array=matrizBidimensional(5, 7, 3, 2);
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            echo "<br>Para la fila $i y la columna $j toma el valor ".$array[$i][$j];
            
        }
            echo "<br>-----------------------------------------------------";
        
    }
    
    
    
    ?>
    </body>

</html>