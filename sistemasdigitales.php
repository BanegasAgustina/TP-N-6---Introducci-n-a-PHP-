
<html>
<head>
<title></title>
</head>
<body>
<p>
<?php
//3)
$haceFrio = 30;
$respuesta ="";

if($haceFrio < 20){
$respuesta = "hace frio";
}
else{
$respuesta = "no hace frio";
}
echo "$respuesta <br>";

//4)
$precio = 500000;
$cantidad = 3;
$descuento = 10;

$mensaje = "La computadora tiene un precio de $$precio, una cantidad 
de $cantidad compus , y un descuento del $descuento%";

echo "$mensaje <br>";

//6)
$Name = "Humano";
echo "Hola <b>$Name</b>, encantado de conocerte<br>\n";
echo "Gracias por venir! <br>";

//7)
$color = "verde";

switch ($color) {
    case "rojo":
        echo "Hola";
        break;
    case "verde":
            echo "Bienvenido";
            break;
    default:
        echo "ninguno";
}

//9)
$a = 5;
$b = 3;

if ($a == $b) {
    echo " <br> 1";
} elseif ($a > $b) {
    echo "  <br>  2";
} else {
    echo " <br> 3";
}

//10)
echo "<br>Tabla de multiplicar del 4:<br>";

for ($i = 1; $i <= 10; $i++) {
    $tabla = 4 * $i;
    echo "4 x $i = $tabla<br>";
}
//11)
$n = rand(1,3);
$txt = " ";
switch($n){
    case 1:
        $txt = "uno";
        break;
    case 2:
        $txt = "dos";
        break;
    case 3:
        $txt = "tres";
        break;
}

echo "<br> $txt <br>";

//12)
$a = 8;
$b = 3;
echo $a + $b, "<br>";
echo $a - $b, "<br>";
echo $a * $b, "<br>";
echo $a / $b, "<br>";
$a++ ;
echo $a,"<br>";
$b--;
echo $b,"<br>";

//13)
$a = 8;
$b = 3;
$c = 3;
echo $a == $b, "<br>";
echo $a != $b, "<br>";
echo $a < $b, "<br>";
echo $a > $b, "<br>";
echo $a >= $c, "<br>";
echo $a <= $c, "<br>";

//14)
$num = rand(1, 100);
echo "El número generado es: $num<br>";

if ($num <= 50) {
    echo "El número es menor o igual a 50.";
} else {
    echo "El número es mayor a 50.";
}

//15)
$A = 5;
$B = 3;
$C = -12;

echo ($A > 3 ? 'Verdadero' : 'Falso') . "<br>";
echo ($A > $C ? 'Verdadero' : 'Falso') . "<br>";
echo ($A < $C ? 'Verdadero' : 'Falso') . "<br>";
echo ($B < $C ? 'Verdadero' : 'Falso') . "<br>";
echo ($B != $C ? 'Verdadero' : 'Falso') . "<br>";
echo ($A == 3 ? 'Verdadero' : 'Falso') . "<br>";
echo ($A * $B == 15 ? 'Verdadero' : 'Falso') . "<br>";
echo ($A * $B == -30 ? 'Verdadero' : 'Falso') . "<br>";
echo ($C / $B < $A ? 'Verdadero' : 'Falso') . "<br>";
echo ($C / $B == -10 ? 'Verdadero' : 'Falso') . "<br>";
echo ($C / $B == -4 ? 'Verdadero' : 'Falso') . "<br>";
echo ($A + $B + $C == 5 ? 'Verdadero' : 'Falso') . "<br>";
echo (($A + $B == 8) && ($A - $B == 2) ? 'Verdadero' : 'Falso') . "<br>";
echo (($A + $B == 8) || ($A - $B == 6) ? 'Verdadero' : 'Falso') . "<br>";
echo (($A > 3) && ($B > 3) && ($C < 3) ? 'Verdadero' : 'Falso') . "<br>";
echo (($A > 3) && ($B >= 3) && ($C < -3) ? 'Verdadero' : 'Falso') . "<br>";

?>
</body>
</html>

