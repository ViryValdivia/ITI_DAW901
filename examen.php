<?php 

$fila =12;
for($i=0; $i < $fila; $i++) { 
    for ($j=0; $j< ($i + 1); $j++) { 
        if ($i <= 0 ) {
            echo "A";
        }elseif ($i <= 1 && $i <= 2) {
            echo "B";
        }elseif ($i <= 2 && $i <= 3) {
            echo "C";
        }elseif ($i <= 3 && $i <= 4) {
            echo "D";
        }elseif ($i <= 4 && $i <= 5) {
            echo "E";
        }elseif ($i <= 5 && $i <= 6) {
            echo "F";
        }elseif ($i <= 6 && $i <= 7) {
            echo "G";
        }elseif ($i <= 7 && $i <= 8) {
            echo "H";
        }elseif ($i <= 8 && $i <= 9) {
            echo "I";
        }elseif ($i <= 9 && $i <= 10) {
            echo "J";
        }elseif ($i <= 10 && $i <= 11) {
            echo "K";
        }elseif ($i <= 11 && $i <= 12) {
            echo "L";
        }
            
    }
    echo "<br/>";
}

?>

