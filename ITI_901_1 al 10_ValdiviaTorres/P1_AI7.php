<title>Actividad Individual 6</title>
 <!--Icono del sitio web-->
 <link rel="icon" href="Logo UTL.ico" type="image/x-ico"/>
<link rel="shortcut icon" type="image/x-icon" href="Logo UTL.ico" />
<meta name="theme-color" content="#083756" />
 
<style>
*{
    margin:0px;
}
nav 
{
    background-color: #FFFDFF;
    width: 100%;
    height: 10vh;
    position: sticky;
}
body
{
    font-family: "Times New Roman", Times, serif;
}
a
{
    text-decoration:none;
    color: white;
    margin-left: 30px;
    font-family: Verdana;
}
h1{
    color: #ABABAB;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight: normal;
}
#espacio{
    background-color: burlywood;
}
footer
{
    background-color: #FFFFFF;
    width: 100%;
    height: 10vh;
    position: sticky;
}
footer h3
{
    color:white;
    font-family:Verdana;
    font-weight: normal;
    top: 10px;
}
</style>
<nav>
    <br>
    <a id="href" href="index.php">Inicio</a>
</nav>

<?php
include('P1_AI7_Functions.php');
//-----------------------------------------
 ImprimirSalto();

 Salto();
//----------------------------------------
 Titulo("Impreso desde parámetro");
 Salto();
 //------------------------------------------
 $tituloRegresado = getTitulo("Impreso desde valor");
 echo $tituloRegresado;
 Salto();

 //----------------------------------------------------

 $titutloRegresado = getTituloImprimiendo("Impreso retornando valor");
 echo $titutloRegresado;
 Salto();
 //-----------------------------------------------------------
 TituloDefault();
 Salto();
 //----------------------
 $numero = 1;
 SumaUno($numero);
 echo $numero . "\tImpreso Externamente<br>";


 sumaUnoPorReferencia($numero);
 echo $numero;
 $numero = 1;

 sumaUnoEjercicio($numero);
 echo $numero;
?>
<br>
<footer>
    
</footer>