<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>PHP</h1>
<h2>Ejercicio 1</h2>
<p>Imprima por pantalla: “Hola mundo”</p>

<?php
echo "Hola,Mundo";
?>

<h2>Ejercicio 2</h2>
<p>Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.</p>

<?php
$saludo = "Hola,Mundo!";
echo $saludo;
?>

<h2>Ejercicio </h2>
<p>Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
entera y el resto de la división entera.</p>

<?php
$A = 10;
$B = 4;


echo $A + $B."\n";
echo $A - $B."\n";
echo $A * $B."\n";
echo $A / $B."\n";
echo $A % $B."\n";

?>

<h2>Ejercicio 3</h2>
<p>Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
pantalla.</p>

<?php

$celcius = 20;

echo $celcius * 1.8 + 32;
?>

<h2>Ejercicio 4</h2>
<p>Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm</p>

<?php

$ladoA = 18;
$ladoB = 12;

$perimetro = $ladoA * 2 + $ladoB * 2;
echo $perimetro."\n";

$area = $ladoA * $ladoB;
echo $area;

?>

<h2>Ejercicio </h2>
<p>Calcular el perímetro y el área de un círculo dado que su radio es de 30cm</p>

<?php

$radio = 30;
$pi = 3.14;

echo 2 * $pi * $radio;

echo $pi * $radio * $radio;




?>




</body>
</html>