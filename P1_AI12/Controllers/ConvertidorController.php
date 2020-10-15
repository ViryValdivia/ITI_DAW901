<?php
require_once '../Class/ConvertidorClass.php';

if(isset( $_POST['clasificacion'] ) && isset( $_POST['unidad1'] ) && isset( $_POST['unidad2'] ) && isset( $_POST['valor1'] )) {
    $clasificacion = $_POST['clasificacion'];
    $objConvertidor = new Convertidor();
    switch ($clasificacion) {
        case '1':
            $result = $objConvertidor->getCalcDist($_POST['unidad1'], $_POST['unidad2'], $_POST['valor1']);
            echo $result;
        break;
        case '2':
            $result = $objConvertidor->getCalcPeso($_POST['unidad1'], $_POST['unidad2'], $_POST['valor1']);
            echo $result;
        break;
        case '3':
            $result = $objConvertidor->getCalcVol($_POST['unidad1'], $_POST['unidad2'], $_POST['valor1']);
            echo $result;
        break;
        default:
            $result =  "Error";
            echo $result;
        break;
    }
}

?>