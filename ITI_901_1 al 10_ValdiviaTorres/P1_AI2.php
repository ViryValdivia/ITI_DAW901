<a href="index.php">Inicio</a><br><br>

<?php

echo "<br><strong>If</strong><br>";

if(1 !=="1")
{
echo "verdadero";
}else
{echo "falso";}
//----------------------------------------
//cualquier numero diferente de 0
//cualquier string no vacio
//valor true
//&&
//||
echo "<br><strong>Valor directo</strong><br>";
$var = 0;

if($var ==true)
{
echo "verdadero<br>";
}else
{echo "falso<br>";}
//---------------------------------------
echo "<br><strong>Switch</strong><br>";
$var1 ="1";
switch($var1)
{
case "1": echo "string<br>";break;
case true: echo "boleano<br>";break;
case 1.00: echo "decimal<br>";break;
case 1: echo "num<br>";break;
default: echo "ninguno<br>";break;

}



?>