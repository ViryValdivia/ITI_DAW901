

<?php
include_once('PI_AI9-Usuario.php');

$mUsuario = new Usuario();
$mUsuario->nombre = "Andrea";
$mUsuario->edad = 30;
$mUsuario->save();

echo var_dump($mUsuario);
?>