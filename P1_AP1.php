<!DOCTYPE html>
<html lang ="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-sacle=1.0">
<title>Documento</title>

<body>
<a href="index.php">Inicia</a>
<br>
<br>
<?php
echo "<strong>Comentarios</strong><br>";
echo "<br><strong>Impresion de PHP</strong><br>";


$variable = 1+1;
echo "$variable<br>";

echo "<br><strong>Operacion aritmetica</strong><br>";
echo "1+1. <br>";
echo "3-1.<br>";
echo "2*3.<br>";
echo "10/5.<br>";
echo "10%7.<br>";

echo "<br><strong>Impresion de comillas</strong><br>";
$variablec ="hola como estas";
echo "$variablec <br>";

echo "<br><strong>Validacion if </strong><br>";
if(is_bool(false))
{
echo "es booleano<br>";
}else{
echo "No es booleano<br>";
}

if(is_null($variable)){
echo "es nulo<br>";
}else{
echo "no es nuelo<br>";
}

echo "<br><strong>Verificar declaracion</strong><br>";

if(isset($variable2)){
echo "si esta declarada<br>";
}else{
echo "no esta declarada <br>";
}

/*$varaiable2 =123;
echo var_dump($variable2);1*/


































?>



</body>

</head>