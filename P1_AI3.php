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

echo "<strong> Calcula la edad de la Persona </strong><br>";

$diaCum = 26;
$mesCum = 06;
$añoCum = 1997;

$hoyDia = 5;
$mesDia = 9;
$añoDia = 2020;

//$Edad = $añoDia - $añoCum; 

//echo  "La edad de la persona es: " . $Edad ;

if (($mesCum == $mesDia) && ($diaCum > $hoyDia)) {
    $ano=($ano-1); }
    
    //si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual
    
    if ($mesCum > $mesDia) {
    $añoDia=($añoDia-1);}
    
    //ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad
    
    $edad=($añoDia-$añoCum);
    "<br><br>";
    echo "La edad es: ".$edad; 

?>