
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Llenar select a partir de otro con php y mysql</title>
	<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
	
</head>
<body>
    <a href ="../index.php"> Regresar al Inicio </a>
    <?php

    include("Controllers/CalculadoraController.php");
    $calculadora = new CalculadoraController();
    $calculadora->cachaParametros();
    $calculadora->ejecutarOperacion();
    //obtener la entrada y la accion
    //Eejecutar la operacion 
    //imprimir los resultados
    ?>

    <form method="post">
        <label> <?php echo $calculadora->pantalla?></label>"

        <select name="unidad" id="unidad">
            <option selected="selected" value="0">Valor de Conversión</option>
            <option value="1">Distancia</option>
            <option value="2">Peso</option>
            <option value="3">Volumen</option>
        </select>
        <br>
        
        <input type = "number" name="valor1">

        <input type = "number" name="valor2">
        <br>
        <div class="selectMedida"></div>
        <div class="selectMedida"></div>
        <input type="submit" value="enviar">

        <input type = "hidden" name="pantalla" value ="<?php echo $calculadora->pantalla?>"> =
        <input type = "hidden" name="resultado" value ="<?php echo $calculadora->resultado?>">
    </form>

    <form method="post">
        <button name = "accion" value="reset"> reset </button>
    </form>
    
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#unidad').val(0);
		recargarLista();

		$('#unidad').change(function(){
			recargarLista();
		});
	})

	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"Controllers/CalculadoraController.php",
			data:"clasificacion=" + $('#unidad').val(),
			success:function(r){
                console.log(r);
				$('.selectMedida').html(r);
			}
		});
	}
</script>



















