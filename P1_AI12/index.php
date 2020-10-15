<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Convertidor</title>
	<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
	
</head>
<body>
    <a href ="../index.php"> Regresar al Inicio </a>

    <form method="post">
        <br>
        <select name="clasificacion" id="clasificacion">
            <option selected="selected" value="0">Valor de Conversión</option>
            <option value="1">Distancia</option>
            <option value="2">Peso</option>
            <option value="3">Volumen</option>
        </select>
        <br>
        <br>
        <input type ="number" id= "valor1" name="valor1"> =
        <label id="resultado"> </label>
        <br>
        <select class="selectMedida" id="unidad1" name="unidad1"></select>
        <select class="selectMedida" id="unidad2" name="unidad2"></select>
        
        <br>
        <input id="btnCalcular" type="button" name="operacion" value="Calcular">
    </form>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
        
		$('#clasificacion').val(0);
		recargarLista();

		$('#clasificacion').change(function(){
			recargarLista();
		});

        $("#btnCalcular").click(function() {
            calcular();
        });
	})

	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"Controllers/ClasificacionController.php",
			data:"clasificacion=" + $('#clasificacion').val(),
			success:function(result){
                if (result != null && result != 'undefined' && result !="") {
                    //Json conversión a arreglo
                    var obj = $.parseJSON(result);
                    $('.selectMedida').empty();
                    $.each(obj, function (i, val) {
                        $('.selectMedida').append(`
                            <option value="${i}">${val}</option>
                        `);
                    });
                }
			}
		});
	}

    function calcular(){
        $('#resultado').empty();
		$.ajax({
			type:"POST",
			url:"Controllers/ConvertidorController.php",
			data:`clasificacion=${$('#clasificacion').val()}&unidad1= ${$('#unidad1').val()}&unidad2= ${$('#unidad2').val()}&valor1=${$('#valor1').val()}`,
			success:function(result){
                if (result != null && result != 'undefined' && result !="") {
                    $('#resultado').append(result);
                }
			}
		});
	}
</script>



















