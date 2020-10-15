<a href ="../index.php"> Regresar al Inicio </a>
<br></br>
<?php

include("Controllers/CalculadoraController.php");
$calculadora = new CalculadoraController();
$calculadora->cachaParametros();
$calculadora->ejecutarOperacion();
//obtener la entrada y la accion
//Eejecutar la operacion 
//imprimir los resultados
?>

<form method="get">
    <label> <?php echo $calculadora->pantalla?></label>"
<input type = "number" name="pantalla" value ="<?php echo $calculadora->pantalla?>"> =
<input type = "number" name="resultado" value ="<?php echo $calculadora->resultado?>"><br>
<input type = "number" name="entrada">
<button name = "accion" value="suma"> + </button>
<button name = "accion" value="resta"> - </button>
<button name = "accion" value="multiplicacion"> * </button>
<button name = "accion" value="division"> / </button>
</form>

<form method="post">
<button name = "accion" value="reset"> reset </button>
</form>



















