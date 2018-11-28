<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>

<!-- Alejandro Llamas -->

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Examen 1ª evaluación - ejercicio 1</title>
</head>

<body>
	<h2>Examen 1ª evaluación - ejercicio 1</h2>
	
    <?php
    
    /*a*/
    echo"<hr>A)<br>";
    
    function nombreApellidos($cadena){
        $nombre=trim(explode(",", $cadena)[1]);
        $apellidos=trim(explode(",", $cadena)[0]);
        $apellido1=trim(explode(" ", $apellidos)[0]);
        $apellido2=trim(explode(" ", $apellidos)[1]);
        $nomcomp= $nombre." ".$apellido1." ".$apellido2;
        $nomLong=mb_strlen($nombre);
        $apeLong=(mb_strlen($apellido1)+mb_strlen($apellido2));
        $nomCompLong=$nomLong+$apeLong;
        echo "El nombre es: $nombre, cuya longitud es $nomLong<br>";
        echo "Los apellidos son: $apellido1 $apellido2, cuya longitud es $apeLong<br>";
        echo "El nombre y apellidos son: $nomcomp, cuya longitud es $nomCompLong<br>";
        
        $array=[];
        $array[0][0]=$nombre;
        $array[0][1]=$nomLong;
        $array[1][0]=$apellidos;
        $array[1][1]=$apeLong;
        $array[2][0]=$nomcomp;
        $array[2][1]=$nomCompLong;
        
        return $array;
        
    }
    
    $nomApe="Llamas Martínez, Alejandro";
    nombreApellidos($nomApe);
    $array=nombreApellidos($nomApe);
    var_dump($array);
    
    
    /*b*/
    echo"<hr>B)<br>";
    
    function mostrarArray($array){
        foreach ($array as $arrays) {
            foreach ($arrays as $key => $value) {
                echo "$value<br>";
            }
        }
    }
    
    mostrarArray($array);
    
    /*c*/
    echo"<hr>C)<br>";
    
    function mostrarNombreApellidos($cadena){
    $array=nombreApellidos($cadena);
    mostrarArray($array);
        
    }
    
     mostrarNombreApellidos($nomApe);       

    ?>
    </body>

</html>