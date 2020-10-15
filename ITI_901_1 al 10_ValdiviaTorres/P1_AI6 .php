<a href="index.php">Inicio</a><br><br>

<?php
Function imprimirSalto(){
    echo "<br><strong>impreso desde funcion </strong><br>";
}

imprimirSalto();

function salto(){
    echo "<br><hr><br>";

}
salto();

function titulo($titulo){
    echo "<br><string> $titulo <strong><br>";
}
$mitituloEs = "Impresso pasando parametro";
    titulo ($mitituloEs);
    salto();

function getTituloImprimiendo($titulo){
    echo "<br><strong> Impreso desde funcion><br>";
    return "<br><strong> $titulo<strong><br>";
}
$tituloRegresado = getTituloImprimiendo("Impreso retornando un valor");
salto();

function tituloDefault($titulo="Titulo pro defecto"){
    echo "<br><strong> $titulo <strong><br>";
}
tituloDefault();
salto();

//__________________________
$numero =1;
function sumaUno($numeroEntrada){
    $numeroEntrada++;
    echo "$numeroEntrada (impreso desde funcion) <br>";
}
sumaUno($numero);
echo $numero. 'impreso externamente <br>';

function sumaUnoPorReferencia($numeroEntrada){
    $numeroEntrada++;
    echo "$numeroEntrada(impreso desde funcion sumaUnoPorRefencia)<br>";
}
sumaUnoPorReferencia($numero);
echo $numero . "impreso externamente <br>";
?>