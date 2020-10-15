<a href="index.php">Inicio</a><br><br>	
<?php
echo "<br><strong>Primer Ejercicio</strong><br>";
$nivel=10; 
$cons=$nivel;
$contador=$nivel;
$fin=$nivel;
$finn=$nivel;
$i=1;
while ($i<=$nivel) {
	$j=1;
	while ($j<=$i) {
		echo "$j ,";
		$j+=1;
	}
	echo "<br>";
	$i+=1;
}
$salto = "<hr>";

echo $salto;
echo "<br><strong>Segundo Ejercicio</strong><br>";
$a=$nivel;
while($a>=1) { 
	$b=1;
	while ($b<=$a) {
		echo "$b ,";
		$b+=1;
	}
	echo "<br>";
	$a-=1;
}
$salto = "<hr>";

echo $salto;
echo "<br><strong>Tercer Ejercicio</strong><br>";
$dosOcho=28;
$tresUno=31;
$tress=30;
$uno=0;
$dos=0;
$tres=0;
$cuatro=0;
$cinco=0;
$seis=0;
$siete=0;
$ocho=0;
$nueve=0;
$diez=0;
$once=0;
$doce=0;
echo "Enero: ";
for ($i=1; $i <= $tresUno ; $i++) {$uno+=1; echo "$uno ,";}
echo "<br>";

echo "Febrero: ";
for ($i=1; $i <= $dosOcho ; $i++) {$dos+=1; echo "$dos ,";}
echo "<br>";

echo "Marzo: ";
for ($i=1; $i <= $tresUno ; $i++) {$tres+=1; echo "$tres ,";}
echo "<br>";

echo "Abril: ";
for ($i=1; $i <= $tress ; $i++) {$cuatro+=1; echo "$cuatro ,";}
echo "<br>";

echo "Mayo: ";
for ($i=1; $i <= $tresUno ; $i++) {$cinco+=1; echo "$cinco ,";}
echo "<br>";

echo "Junio: ";
for ($i=1; $i <= $tress ; $i++) {$seis+=1; echo "$seis ,";}
echo "<br>";

echo "Julio: ";
for ($i=1; $i <= $tresUno ; $i++) {$siete+=1; echo "$siete ,";}
echo "<br>";

echo "Agosto: ";
for ($i=1; $i <= $tresUno ; $i++) {$ocho+=1; echo "$ocho ,";}
echo "<br>";

echo "Septiembre: ";
for ($i=1; $i <= $tress ; $i++) {$nueve+=1; echo "$nueve ,";}
echo "<br>";

echo "Octubre: ";
for ($i=1; $i <= $tresUno ; $i++) {$diez+=1; echo "$diez ,";}
echo "<br>";

echo "Noviembre: ";
for ($i=1; $i <= $tresUno ; $i++) {$once+=1; echo "$once ,";}
echo "<br>";

echo "Dicembre: ";
for ($i=1; $i <= $tresUno ; $i++) {$doce+=1; echo "$doce ,";}
echo "<br>";

$salto = "<hr>";

echo $salto;


echo "<br><strong>Priamide Numerica </strong><br>";
$k=10;
for ($i = 1; $i < $contador+1; $i++) {
	for ($j = 1; $j <= ($contador+1)-$i; $j++) {
	echo "=";
	}
	for ($l=$i; $l>0; $l--){
		echo $l;	
	}
	for($r=2; $r<=$i; $r++){
		echo $r;
	}
	for ($j = 1; $j <= ($contador+1)-$i; $j++) {
	echo "=";
	}
	echo"<br>";
}
$salto = "<hr>";

echo $salto;

echo "<br><strong>Rombo Numerico </strong><br>";
$k=10;
for ($i = 1; $i < $fin+1; $i++) {
	for ($j = 1; $j <= ($fin+1)-$i; $j++) {
	echo "=";
	}
	for ($l=$i; $l>0; $l--){
		echo $l;	
	}
	for($r=2; $r<=$i; $r++){
		echo $r;
	}
	for ($j = 1; $j <= ($fin+1)-$i; $j++) {
	echo "=";
	}
	echo"<br>";	
}
$m=1;
for($i=$finn; $i>=$m; $i--){
	for($j=1; $j<=($finn+1)-$i; $j++){
		echo "=";
	}
	for($l=$i; $l>0; $l--){
		echo $l;	
	}
	for($r=2; $r<=$i; $r++){
		echo $r;
		if ($r==0) {
			$r=$finn+1;
		}
	}
	for($j=1; $j<=($finn+1)-$i; $j++){
		echo "=";
	}
	echo "<br>";
}
$salto = "<hr>";