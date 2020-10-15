<a href="index.php">Inicio</a><br><br>

<?php
//------------------------------------------------------
echo "<br> <strong> IF </strong><br>";

for($i = 1; $i <= 5; $i++){
    echo "$i <br>";
}

echo "<br> <strong> IF inverso </strong><br>";

for($i = 5; $i >= 0; $i--){
    echo "$i <br>";
}
//_________________________________________________


//------------------------------------------------------
echo "<br> <strong> WHILE</strong><br>";
$ciclos = 0;
while($ciclos != 0){
    $ciclos++;
    echo "$ciclos <br>";
}

echo "<br> <strong> WHILE</strong><br>";
$ciclos = "";
while($ciclos != "aaaaa"){
    $ciclos.="a";
    echo "$ciclos <br>"; //son ejemplos que nos puso el profe en clase y aqui estan...
}

/*echo "<br> <strong> do WHILE</strong><br>";
$ciclos = 0;
do {
    
    echo "$ciclos <br>";
}
    while ($ciclos < 1);*/

    echo "<br> <strong> ARREGLOS</strong><br>";
    $arrNuevo = array (1,"a",3.554,4,true);
    echo var_dump($arrNuevo);
    echo "<br>";

    echo "<br> <strong> AGREGAR AL INICIO</strong><br>";
    array_push ($arrNuevo, "Var1");
    echo var_dump ($arrNuevo);
    echo "<br>";

    echo "<br> <strong> AGREGAR FINAL</strong><br>";
    array_unshift($arrNuevo , "var2");
    echo var_dump ($arrNuevo);
    echo "<br>";

    echo "<br> <strong> Eliminar un elemento </strong><br>";
    unset($arrNuevo [2]); //Elimina el elemento en la posicion 2
    echo var_dump($arrNuevo);
    echo "<br>";

    echo "<br> <strong> Conteo de elementos </strong><br>";
    $nElementos = count($arrNuevo);
    echo "$nElementos <br>";

    echo "<br> <strong> Merge de array </strong><br>";
    $arr1 = [1,2,3];
    $arr2 = [1,3,5,4];
    $arrMerge = array_merge ($arr1, $arr2);
    echo var_dump($arrMerge);
    echo "<br>";

    echo "<br> <strong> Voltear arreglos </strong><br>";
    $arrMerge = array_merge ($arrMerge);
    echo var_dump($arrReverse);
    echo "<br>";

    echo "<br> <strong> Merge de array diferentes</strong><br>";
    $arr1 = [1,2,3];
    $arr2 = [1,3,5,4];
    $arrMerge = array_replace ($arr1, $arr2);
    echo var_dump($arrMerge);
    echo "<br>";

    echo "<br> <strong> oRDEMANIEMNTO ASCENDENTE</strong><br>";
    $arrasc=sort ($arrMerge);
    echo var_dump($arrasc);
    echo "<br>";

    echo "<br> <strong> oRDEMANIEMNTO DESCENDENTE</strong><br>";
    rsort ($arrMerge);
    echo var_dump($arrdes);
    echo "<br>";

    echo "<br> <strong> verificar si se encuentra un elemento</strong><br>";
    if(in_array(2, $arrMerge)){
        echo "Si se encontro";
    }else{
        echo "No se encontro <br>";
    }

    echo "<br> <strong> foreach lineal</strong><br>";
    $numeros= [1,2,3, "a", array(6,7,8, array(9,20)];
    foreach ($numeros as $item){
        if(is_array($item)){//si es un arreglo
            foreach($item as $subitem){
                echo "-$subitem<br>";
            }
        }else{
            echo "$item <br>";
        }
    }

    echo "<br> <strong> Arreglo asociativos </strong><br>";
    //echo $numeros[0];
    $aspciativo = ["nombre" => 30, "nombre" => "Eduardo", "tel" => "477656562"];
    echo $asociativo ["edad"] . "<br>"; 
    echo $asociativo ["nombre"] .  "<br>";
    echo $asociativo ["tel"] .  "<br>"; 

    foreach ($asociativo as $key => $valor){
        echo "$key - $valor <br>";
    }












?>