<?php
include_once('P1_AI9_Usuario.php');

/*$mUsuario = new Usuario();
$mUsuario->nombre = "MArgarita";
$mUsuario->edad = 45;
$mUsuario->save();*/

//Buscar usuario
//$mUsuarioCargado = Usuario::buscarUsuario(18);

//Eliminar usuario
//$mUsuarioCargado->delete();

//Actualizar usuario
/*$mUsuarioCargado->edad = 20;
$mUsuarioCargado->save();*/

//Buscar todos los usuarios
$mUsuarios = Usuario::all();

//echo var_dump($mUsuarios);
   
?>