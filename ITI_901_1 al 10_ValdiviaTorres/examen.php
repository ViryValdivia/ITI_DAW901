<?php 

$fila = 24;
for($i=0; $i < $fila; $i++) { 
    for ($j=0; $j < $fila - $i; $j++) { 
        if ($i <= 8) {
            echo "1";
        }if ($i >= 9 && $i <= 16) {
            echo "2";
        }if ($i> 16 && $i<= $fila) {
            echo "3";
        }
    }
    echo "<br/>";
}

?>

