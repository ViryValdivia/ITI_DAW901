<a href="index.php">Inicio</a><br><br>


<?php
include_once('P1_AI9_Controlador.php');

echo var_dump($mUsuarios);



?>
<table border = "1">
    <thead>
        <tr>
            <tr>ID</tr>
            <tr>NOMBRE</tr>
            <tr>EDAD</tr>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($mUsuarios as $rowUsuario){
            echo "<tr>
                    <td>$rowUsuario->id</td>
                    <td>$rowUsuario->nombre</td>
                    <td>$rowUsuario->edad</td>
                </tr>";
        }?>
    </tbody>
</table>