<?php
require_once '../Class/ConvertidorClass.php';

if(isset( $_POST['clasificacion'] )) {
    $clasificacion = $_POST['clasificacion'];
    $objConvertidor = new Convertidor();
    $result =  $objConvertidor->getClasificacion($clasificacion);
    echo $result;
}
?>