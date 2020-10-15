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


$hoyDia = 8;
$hoyMes = 9;
$hoyAnho = 2020;

$fNacDia = 8;
$fNacMes = 4;
$fNacAnho = 2020;

//Desarrollar el codigo con ifs.
//año de hoy menos año de nacimiento

/*  Que se desea obtener -> la edad
    Lo que determina si se resta o no un año es
    "si ya paso o llego la fecha de nacimiento"
*/

//1. La fecha ya paso o es el dia de hoy
//2. La fecha no ha pasado (aun no cumple años)
// Si el mes actual es mayor -> Ya paso la fecha
// Cuando es el mismo mes y el dia es mayor o igual -> ya pasó
// Si el mes actual es menor -> no ha pasado.
$yaPasoFecha = false;

if($hoMes > $fNacMes){// Siel mes de cumpleaños ya paso
$yaPasoFecha = true;

}

if ($hoyMes == $fNacMes){//Si el mes de cumpleaños es el mismo
    if($hoyDia >= $fNacDia){//Si el dia es el mismo o ya pasó
        $yaPasoFecha = true;
    }
}
 if($hoyMes < $fNacMes){//Si el mes actual es menor al del cumpleaños
    $yaPasoFecha = false;
 }

 if($yaPasoFecha){
     $edad = $hoyAnho - $fNacAnho; 
 }else{
     $edad = $hoyAnho - $fNacAnho - 1;
 }

 echo "Tiene $edad Años";


?>