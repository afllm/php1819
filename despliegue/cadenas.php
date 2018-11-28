<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>

<!-- Alejandro Llamas -->

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ejercicios con cadenas</title>
</head>

<body>
	<h2>Ejercicios con cadenas</h2>
    <?php
        /*1*/
        echo "<hr><p>Ejercicio 1</p>";
        $nomCom="Llamas Martínez, Alejandro";
        echo "Los apellidos son: ".explode(",", $nomCom)[0];
        echo "<br>El nombre es: ".explode(",", $nomCom)[1];
        echo"<br>";
        //$nomApe=explode(",", $nomCom)[1].' '.explode(",", $nomCom)[0];
        $nomApe=explode(",", $nomCom);
        $nomApe[1]=trim($nomApe[1]);
        $nomApe[0]=trim($nomApe[0]);
        $nomCompleto=$nomApe[1]." ".$nomApe[0];
        echo "El nombre y apellidos son: ".$nomCompleto;
        
        echo"<br>print_r:<br> ";
        print_r($nomApe);
        
        echo"<br>var_dump:<br> ";
        var_dump($nomApe);
        echo"<p>var_dump muestra más información y mejor organizada</p>";
        /*2*/
        echo "<hr><p>Ejercicio 2</p>";
        
        $pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
        $pieces = explode(" ", $pizza);
        foreach ($pieces as $indice=>$valor){
            print "<p>$valor</p>";
        }
        /*3*/
        echo "<hr><p>Ejercicio 3</p>";
        
        $str = 'one|two|three|four|five|six|seven|eigth|nine|ten';
       echo"<br>";
        print_r(explode('|', $str, 4));
        echo"<br><br>";
        print_r(explode('|', $str, -2));
        echo"<br>";
        /*4*/
        echo "<hr><p>Ejercicio 4</p>";
        $email = 'name@example.com';
        if (!strstr($email, 's')) {
            echo"No ha encotrado 's' dentro del email";
        }
        /*5*/
        echo "<hr><p>Ejercicio 5</p>";
        
        function charEmail($char,$email) {
            
            if (!strstr($email, $char)) {
                echo"No la contiene";
                $contiene=false;
            }else{
                echo"Si la contiene";
                $contiene=true;
            }
            
            return $contiene;
        }
        
        charEmail('s', $email);
        /*6*/
        echo "<hr><p>Ejercicio 6</p>";
        
        $cadena="Línea 1\nLínea 2\nLínea 3";
        $ult=substr(strchr($cadena,10),1);
        echo"La última línea es : ".$ult;
        
        echo"Como '\n' es equivalente a '10', podemos comparar uno con el otro indistintamente";
        
        /*7*/
        echo "<hr><p>Ejercicio 7</p>";
        $findme='A';
        $mystring1='xyz';
        $mystring2='ABC';
        $pos1=strpos($mystring1,$findme);
        $pos2=strpos($mystring2,$findme);
        if($pos1===false){
            echo"<br>The String '$findme' was not found in the string '$mystring1'";
        }
        if($pos2!==false){
            echo"<br>The String '$findme' was found in the string '$mystring2'";
        }
        echo"<br>Para realizar correctamente la comparación, se debe usar el comparador identico a (===) o no es identico a(!==), que comparan tambien el tipado";
        /*8*/
        echo "<hr><p>Ejercicio 8</p>";
        $findme2='a';
        $pos1_2=stripos($mystring1,$findme);
        $pos2_2=stripos($mystring2,$findme);
        if($pos1===false){
            echo"<br>The String '$findme2' was not found in the string '$mystring1'";
        }
        if($pos2!==false){
            echo"<br>The String '$findme2' was found in the string '$mystring2'";
        }
        echo"<br>Lo encuentra aunque la variable $findme2 sea minúscula, ya que 'str<strong>i</strong>pos' no distingue entre mayúsculas y minúsculas";
        /*9*/
        echo "<hr><p>Ejercicio 9</p>";
        $frutas = array("d" => "limón", "a" => "naranja", "b" => "banana",
            "c" => "manzana");
        function test_alter(&$elemento1, $clave, $prefijo)
        {
            $elemento1 = "$prefijo: $elemento1";
        }
        function test_print($elemento2, $clave)
        {
            echo "$clave. $elemento2<br />\n";
        }
        echo "Antes ...:\n<br>";
        array_walk($frutas, 'test_print');
        array_walk($frutas, 'test_alter', 'fruta');
        echo "... y después:\n<br>";
        array_walk($frutas, 'test_print');
        echo"<br>array_walk, ejecuta una funcion dada por el usuario, en cada elemento de un array";
        /*10*/
        echo "<hr><p>Ejercicio 10</p>";
        $nomCom="Llamas Martínez, Alejandro";
        $apellidos=trim(substr($nomCom, 0,strpos($nomCom, ",")));
        $nombre=trim(substr($nomCom,strpos($nomCom, ",")+1));
        echo "Los apellidos son: $apellidos";
        
        echo "<br>El nombre es: ".$nombre;
        echo"<br>";
        $nomApe=$nombre." ".$apellidos;
        echo "El nombre y apellidos son: ".$nomApe;
        
        echo"<br>print_r:<br> ";
        print_r($nomApe);
        
        echo"<br>var_dump:<br> ";
        echo"Completo: <br>";var_dump($nomApe);
        echo"<br>Nombre: <br>";var_dump($nombre);
        echo"<br>Apellidos: <br>";var_dump($apellidos);
        $arrayNombreCompleto[0]=$nombre;
        $arrayNombreCompleto[1]=$apellidos;
        echo"VAR_DUMP del ARRAY: <br>";
        var_dump($arrayNombreCompleto);
        
    ?>
    </body>

</html>