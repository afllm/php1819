<!DOCTYPE html>
<html>
<head>
<!-- Alejandro Llamas -->
<meta charset="utf-8">
<title>Recorrido de arrays PHP</title>
</head>
<body>
<?php
echo "<h2>Recorrido de arrays PHP</h2>";

/* 01 */
echo "<h3><hr>Ejercicio 01</h3>";
echo "<h3>ARRAY UNIDIMENSIONAL ESCALAR (Indexado numéricamente)</h3>";
$productos = array(
    "MESA",
    "SILLA",
    "FLEXO",
    "ESTANTERIA"
);

/* a */
echo "<h4>a)</h4>";
echo "Posición 0: " . $productos[0] . "<br>";
echo "Posición 1: " . $productos[1] . "<br>";
echo "Posición 2: " . $productos[2] . "<br>";
echo "Posición 3: " . $productos[3] . "<br>";

/* b */
echo "<h4>b)</h4>";
for ($i = 0; $i < 4; $i ++) {
    echo "Posición $i: " . $productos[$i] . "<br>";
}

/* c */
echo "<h4>c)</h4>";
for ($i = 0; $i < count($productos); $i ++) {
    echo "Posición $i: " . $productos[$i] . "<br>";
}

/* d */
echo "<h4>d)</h4>";
$i = 0;
while ($i < count($productos)) {
    echo "Posición $i: " . $productos[$i] . "<br>";
    $i ++;
}

/* e */
echo "<h4>e)</h4>";
foreach ($productos as $key => $value) {
    echo "Posición $key: $value <br>";
}

echo "<h3><hr>Ejercicio 02</h3>";
echo "<h3>ARRAY UNIDIMENSIONAL ASOCIATIVO</h3>";
$productos2 = array(
    "M" => "MESA",
    "S" => "SILLA",
    "F" => "FLEXO",
    "E" => "ESTANTERIA"
);

/* f */
echo "<h4>f)</h4>";
echo "Posición M: " . $productos2[M] . "<br>";
echo "Posición S: " . $productos2[S] . "<br>";
echo "Posición F: " . $productos2[F] . "<br>";
echo "Posición E: " . $productos2[E] . "<br>";

/* g */
echo "<h4>g)</h4>";
while (list ($clave, $valor) = each($productos2)) {
    echo "Posición $clave: $valor<br>";
}

/* h */
echo "<h4>h)</h4>";
foreach ($productos2 as $clave => $valor) {
    echo "Posición $clave: $valor<br>";
}

echo "<h3><hr>Ejercicio 03</h3>";
echo "<h3>ARRAY BIDIMENSIONAL ESCALAR (Indexado numéricamente)</h3>";

/* i */
echo "<h4>i)</h4>";
$animales = array(
    array(
        "Perro",
        "Mastin",
        100
    ),
    array(
        "Gato",
        "Persa",
        150
    ),
    array(
        "Gato",
        "Siames",
        190
    ),
    array(
        "Perro",
        "Boxer",
        25
    ),
    array(
        "Canario",
        "Timbrado",
        250
    )
);

echo "Posición 0.0: " . $animales[0][0] . " - ";
echo "Posición 0.1: " . $animales[0][1] . " - ";
echo "Posición 0.2: " . $animales[0][2] . "<br>";
echo "Posición 1.0: " . $animales[1][0] . " - ";
echo "Posición 1.1: " . $animales[1][1] . " - ";
echo "Posición 1.2: " . $animales[1][2] . "<br>";
echo "Posición 2.0: " . $animales[2][0] . " - ";
echo "Posición 2.1: " . $animales[2][1] . " - ";
echo "Posición 2.2: " . $animales[2][2] . "<br>";
echo "Posición 3.0: " . $animales[3][0] . " - ";
echo "Posición 3.1: " . $animales[3][1] . " - ";
echo "Posición 3.2: " . $animales[3][2] . "<br>";
echo "Posición 4.0: " . $animales[4][0] . " - ";
echo "Posición 4.1: " . $animales[4][1] . " - ";
echo "Posición 4.2: " . $animales[4][2] . "<br>";

/* j */
echo "<h4>j)</h4>";
$i = 0;
while ($i < count($animales)) {
    for ($j = 0; $j < count($animales[$i]); $j ++) {
        echo "Posición $i.$j: " . $animales[$i][$j] . " - ";
    }
    echo "<br>";
    $i ++;
}

/* k */
echo "<h4>k)</h4>";
for ($i = 0; $i < count($animales); $i ++) {
    for ($j = 0; $j < count($animales[$i]); $j ++) {
        echo "Posición $i.$j: " . $animales[$i][$j] . " - ";
    }
    echo "<br>";
}

/* l */
echo "<h4>l)</h4>";
$i = 0;
foreach ($animales as $animal) {
    echo "animal $i: ";
    $i ++;
    foreach ($animal as $clave => $valor) {
        echo "Posición $clave: $valor - ";
    }
    echo "<br>";
}

echo "<h3><hr>Ejercicio 04</h3>";
echo "<h3>ARRAY BIDIMENSIONAL ASOCIATIVO</h3>";

$productos = array(
    array(
        "Codigo" => "CB",
        "Descripcion" => " Cebollas",
        "Precio" => 100
    ),

    array(
        "Codigo" => "AC",
        "Descripcion" => "Aceite",
        "Precio" => 120
    ),

    array(
        "Codigo" => "MZ",
        "Descripcion" => "Manzanas",
        "Precio" => 92
    )
);

var_dump($productos);
print_r($productos);
$productos2 = array(
    "prod1" => array(
        "Codigo" => "CB",
        "Descripcion" => " Cebollas",
        "Precio" => 100
    ),
    "prod2" => array(
        "Codigo" => "AC",
        "Descripcion" => "Aceite",
        "Precio" => 120
    ),
    "prod3" => array(
        "Codigo" => "MZ",
        "Descripcion" => "Manzanas",
        "Precio" => 92
    )
);

/* m */
echo "<h4>m)</h4>";
echo"Productos: <br>";
echo "Posición 0.Codigo: " . $productos[0]['Codigo'] . " - ";
echo "Posición 0.Descripción: " . $productos[0]['Descripcion'] . " - ";
echo "Posición 0.Precio: " . $productos[0]['Precio'] . "<br>";
echo "Posición 1.Codigo: " . $productos[1]['Codigo'] . " - ";
echo "Posición 1.Descripción: " . $productos[1]['Descripcion'] . " - ";
echo "Posición 1.Precio: " . $productos[1]['Precio'] . "<br>";

echo "Posición 2.Codigo: " . $productos[2]['Codigo'] . " - ";
echo "Posición 2.Descripción: " . $productos[2]['Descripcion'] . " - ";
echo "Posición 2.Precio: " . $productos[2]['Precio'] . "<br>";

echo"Productos2: <br>";
echo "prod1.Codigo: " . $productos2['prod1']['Codigo'] . " - ";
echo "prod1.Descripción: " . $productos2['prod1']['Descripcion'] . " - ";
echo "prod1.Precio: " . $productos2['prod1']['Precio'] . "<br>";
echo "prod2.Codigo: " . $productos2['prod2']['Codigo'] . " - ";
echo "prod2.Descripción: " . $productos2['prod2']['Descripcion'] . " - ";
echo "prod2.Precio: " . $productos2['prod2']['Precio'] . "<br>";

echo "prod3.Codigo: " . $productos2['prod3']['Codigo'] . " - ";
echo "prod3.Descripción: " . $productos2['prod3']['Descripcion'] . " - ";
echo "prod3.Precio: " . $productos2['prod3']['Precio'] . "<br>";

/* n */
echo "<h4>n)</h4>";
echo"Productos: <br>";


    for ($i = 0; $i < count($productos); $i ++) {
        while (list ($clave, $valor) = each($productos[$i])) {
            echo "$clave: $valor - ";
        }
        echo "<br>";
    }
    
    
    echo "<br>";echo "<br>";echo "<br>";
echo"Productos2 (que si se puede): <br>";
$clavesProductos2=array_keys($productos2);

for ($i = 0; $i < count($productos2); $i ++) {
    while (list ($clave, $valor) = each($productos2[$clavesProductos2[$i]])) {
        echo "$clave: $valor - ";
    }
    echo "<br>";
}

/* o */
echo "<h4>o)</h4>";

echo"Productos: <br>";

$i = 0;
foreach ($productos as $producto) {
    echo "Producto $i: ";
    $i ++;
    foreach ($producto as $clave => $valor) {
        echo "$clave: $valor - ";
    }
    echo "<br>";
}

echo "<h4><hr>Ejercicio 04</h4>";
echo "<h3>ARRAY TRIDIMENSIONAL ASOCIATIVO</h3>";

$tri = array(
    "Clientes" => array(
        "Cliente01" => array("Nombre"=>"Pepe", "Apellido1"=>"Pérez", "Apellido2"=>"Pérez"),
        "Cliente02" => array("Nombre"=>"Paco", "Apellido1"=>"González", "Apellido2"=>"Martín"),
        "Cliente03" => array("Nombre"=>"María", "Apellido1"=>"Álvarez", "Apellido2"=>"Nuñez")
    ),
    "Proveedores" => array(
        "Proveedor01" =>array("Nombre"=>"Juan", "Apellido1"=>"Martínez", "Apellido2"=>"Pérez"),
        "Proveedor02" =>array("Nombre"=>"Ana", "Apellido1"=>"Pérez", "Apellido2"=>"González"),
        "Proveedor03" => array("Nombre"=>"Silvia", "Apellido1"=>"Pérez", "Apellido2"=>"Pérez")
    ),
    "Empleados" => array(
        "Empleado01" =>array("Nombre"=>"Carlos", "Apellido1"=>"Pérez", "Apellido2"=>"Martínez"),
        "Empleado02" =>array("Nombre"=>"Victor", "Apellido1"=>"Martín", "Apellido2"=>"Pérez"),
        "Empleado03" =>array("Nombre"=>"Manuel", "Apellido1"=>"Nuñez", "Apellido2"=>"Pérez")
    )
);

/* p */
echo "<h4>p)</h4>";

$Cliente01 = $tri["Clientes"]["Cliente01"]["Nombre"]." ".$tri["Clientes"]["Cliente01"]["Apellido1"]." ".$tri["Clientes"]["Cliente01"]["Apellido2"];
$Cliente02 = $tri["Clientes"]["Cliente02"]["Nombre"]." ".$tri["Clientes"]["Cliente02"]["Apellido1"]." ".$tri["Clientes"]["Cliente02"]["Apellido2"];
$Cliente03 = $tri["Clientes"]["Cliente03"]["Nombre"]." ".$tri["Clientes"]["Cliente03"]["Apellido1"]." ".$tri["Clientes"]["Cliente03"]["Apellido2"];
$Proveedor01 = $tri["Proveedores"]["Proveedor01"]["Nombre"]." ".$tri["Proveedores"]["Proveedor01"]["Apellido1"]." ".$tri["Proveedores"]["Proveedor01"]["Apellido2"];
$Proveedor02 = $tri["Proveedores"]["Proveedor02"]["Nombre"]." ".$tri["Proveedores"]["Proveedor02"]["Apellido1"]." ".$tri["Proveedores"]["Proveedor02"]["Apellido2"];
$Proveedor03 = $tri["Proveedores"]["Proveedor03"]["Nombre"]." ".$tri["Proveedores"]["Proveedor03"]["Apellido1"]." ".$tri["Proveedores"]["Proveedor03"]["Apellido2"];
$Empleado01 = $tri["Empleados"]["Empleado01"]["Nombre"]." ".$tri["Empleados"]["Empleado01"]["Apellido1"]." ".$tri["Empleados"]["Empleado01"]["Apellido2"];
$Empleado02 = $tri["Empleados"]["Empleado02"]["Nombre"]." ".$tri["Empleados"]["Empleado02"]["Apellido1"]." ".$tri["Empleados"]["Empleado02"]["Apellido2"];
$Empleado03 = $tri["Empleados"]["Empleado03"]["Nombre"]." ".$tri["Empleados"]["Empleado03"]["Apellido1"]." ".$tri["Empleados"]["Empleado03"]["Apellido2"];

echo "Clientes:<br>";
echo "Cliente 01: $Cliente01<br>";
echo "Cliente 02: $Cliente02<br>";
echo "Cliente 03: $Cliente03<br>";
echo "Proveedores:<br>";
echo "Proveedor 01: $Proveedor01<br>";
echo "Proveedor 02: $Proveedor02<br>";
echo "Proveedor 03: $Proveedor03<br>";
echo "Empleados:<br>";
echo "Empleado 01: $Empleado01<br>";
echo "Empleado 02: $Empleado02<br>";
echo "Empleado 03: $Empleado03<br>";

/* p */
echo "<h4>p)</h4>";

foreach ($tri as $key=>$arrays) {
    echo"$key:<BR>";
    foreach ($arrays as $key=>$array) {
        echo"$key:<BR>";
        foreach ($array as $key=>$value){
            echo "$key: $value ";
        }
echo"<br>";
    }
        
}


?>
</body>
</html>
