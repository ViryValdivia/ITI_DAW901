<?php 
$import =[
    'js'=> ['js/site.js'],
    'css' => ['css/site3.css']
];
    
include('layout/header.php');?>
<a href="P1_AI10_2.php">Pagina 2</a>
<br><br>


<form action="P1_AI10_Peticion.php" method="POST">
    <input type="text" id ="nombre" name="nombre" placeholder="Nombre"> <br>|

<button>Enviar</button>
</form><br>


<!--<button onclick="saludar()"> Mostrar hola</button>-->

<?php include('layout/footer.php');?>

