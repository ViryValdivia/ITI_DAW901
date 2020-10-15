<?php 
class Convertidor
{
    public $clasificacion;
    public $unidad1;
    public $unidad2;
    public $valor1;

    function __construct(){
        $this->clasificacion=0;
        $this->unidad1=0;
        $this->unidad2=0;
        $this->valor1=0;
    }

    public function cachaParametros(){
        if(isset($_POST["unidad1"])){
            $this->unidad1 = $_POST["unidad1"];
        }
        if(isset($_POST["unidad2"])){
            $this->unidad2 = $_POST["unidad2"];
        }
        if(isset($_POST["valor1"])){
            $this->valor1 = $_POST["valor1"];
        }
    }

    public function getClasificacion($clasifi){
        $this->clasificacion = $clasifi;
        switch($this->clasificacion){
            case "1":
                $unidades = array( "Centimetros", "Metros", "Pulgadas", "Yardas", "Kilometros");
                $JSONunidades = json_encode($unidades);
                return $JSONunidades;
            break;
            case "2": 
                $unidades = array("Gramos", "Kilos", "Onzas");
                $JSONunidades = json_encode($unidades);
                return $JSONunidades;
            break;
            case "3": 
                $unidades = array("Mililitros", "Litros", "Metro Cúbico");
                $JSONunidades = json_encode($unidades);
                return $JSONunidades;
            break;
            default: break;
        }
    }

    public function getCalcDist($unidad1, $unidad2, $valor1){
        switch ($unidad1) {
            case '0':
                switch ($unidad2) {
                    case '0':
                        return "Error, selecciona otra unidad de medida";
                    break;
                    case '1':
                        $resp = $valor1 / 100;
                        return $resp." Metro(s)";
                    break;
                    case '2':
                        $resp = $valor1 / 2.54;
                        return $resp ." Pulgada(s)";
                    break;
                    case '3':
                        $resp = $valor1 / 91.44;
                        return $resp. " Yarda(s)";
                    break;
                    case '4':
                        $resp = $valor1 / 1000;
                        return $resp. " Kilometros(s)";
                    break;
                    default:
                        return "Error";
                    break;
                }
            break;

            case '1':
                switch ($unidad2) {
                    case '0':
                        $resp = $valor1 * 100;
                        return $resp. " Centimetros(s)";
                    break;
                    case '1':
                        return "Error, selecciona otra unidad de medida";
                    break;
                    case '2':
                        $resp = $valor1 * 39.37;
                        return $resp. " Pulgadas(s)";
                    break;
                    case '3':
                        $resp = $valor1 * 1.094;
                        return $resp. " Yarda(s)";
                    break;
                    case '4':
                        $resp = $valor1 / 1000;
                        return $resp. " Kilometros(s)";
                    default:
                        return "Error";
                    break;
                }
            break;

            case '2':
                switch ($unidad2) {
                    case '0':
                        $resp = $valor1 * 2.54;
                        return $resp. " Centimetros(s)";                    
                    break;
                    case '1':
                        $resp = $valor1 / 39.37;
                        return $resp. " Metros(s)";                          
                    break;
                    case '2':
                        return "Error, selecciona otra unidad de medida";
                    break;
                    case '3':
                        $resp = $valor1 / 36;
                        return $resp. " Yarda(s)";
                    break;
                    case '4':
                        $resp = $valor1 * 1000;
                        return $resp. " Kilometros(s)";
                    default:
                        return "Error";
                    break;
                }
            break;

            case '3':
                switch ($unidad2) {
                    case '0':
                       
                        $resp = $valor1 * 91.44;
                        return $resp. " Centimetro(s)";                        
                    break;
                    case '1':
                        
                        $resp = $valor1 / 1.094;
                        return $resp. " Metro(s)";                        
                    break;
                    case '2':
                        $resp = $valor1 * 36;
                        return $resp. " Pulgada(s)";
                    break;
                    case '3':
                        $resp = $valor1 * 1094;
                        return $resp. " Yarda(s)";
                    break;
                    case '4':
                        return "Error, selecciona otra unidad de medida";
                    default:
                        return "Error";
                    break;
                }
            break;
            case '4':
                switch ($unidad2) {
                    case '0':
                       //Kilometros a ...
                        $resp = $valor1 * 100000;
                        return $resp. " Centimetro(s)";                        
                    break;
                    case '1':
                        $resp = $valor1 * 1000                        ;
                        return $resp. " Metro(s)";                      
                    break;
                    case '2':
                        $resp = $valor1 * 39370;
                        return $resp. " Pulgada(s)";
                    break;
                    case '3':
                        $resp = $valor1 * 1094                        ;
                        return $resp. " Yardas(s)";
                    break;
                    case '4':
                            return "Error, selecciona otra unidad de medida";
                    default:
                        return "Error";
                    break;
                }
            break;
            default:
                return "Error";
            break;
        }
    }

    public function getCalcPeso($unidad1, $unidad2, $valor1){
        switch ($unidad1) {
            case '0':
                switch ($unidad2) {
                    case '0':
                        return "Error, selecciona otra unidad de medida";
                    break;
                    case '1':
                        $resp = $valor1 / 1000;
                        return $resp. " Kilo(s)";
                    break;
                    case '2':
                        $resp = $valor1 / 28.35;
                        return $resp. " Onza(s)";
                    break;
                    default:
                        return "Error";
                    break;
                }
            break;

            case '1':
                switch ($unidad2) {
                    case '0':
                        $resp = $valor1 * 1000;
                        return $resp. " Gramo(s)";
                    break;
                    case '1':
                        return "Error, selecciona otra unidad de medida";
                    break;
                    case '2':
                        $resp = $valor1 / 28.35;
                        return $resp. " Onza(s)";
                    break;
                    default:
                        return "Error";
                    break;
                }
            break;

            case '2':
                switch ($unidad2) {
                    case '0':
                        
                        $resp = $valor1 * 28.35;
                        return $resp. " Gramo(s)";
                    break;
                    case '1':
                        $resp = $valor1 / 35.274;
                        return $resp. " Kilo(s)";
                    break;
                    case '2':
                        return "Error, selecciona otra unidad de medida";
                    break;
                    default:
                        return "Error";
                    break;
                }
            break;
            
            default:
                return "Error";
            break;
        }
    }

    public function getCalcVol($unidad1, $unidad2, $valor1){
        switch ($unidad1) {
            case '0':
                switch ($unidad2) {
                    case '0':
                        return "Error, selecciona otra unidad de medida";
                    break;
                    case '1':
                        $resp = $valor1 / 1000;
                        return $resp. " Litro(s)";
                    break;
                    case '2':
                        $resp = $valor1 / 1000000;
                        return $resp. " Metros Cubico(s)";
                    break;
                    default:
                        return "Error";
                    break;
                }
            break;

            case '1':
                switch ($unidad2) {
                    case '0':
                        $resp = $valor1 * 1000;
                        return $resp. " Mililitro(s)";
                    break;
                    case '1':
                        return "Error, selecciona otra unidad de medida";
                    break;
                    case '2':
                        $resp = $valor1 / 1000;
                        return $resp. " Metro(s) Cubico(s)";
                    break;
                    default:
                        return "Error";
                    break;
                }
            break;

            case '2':
                switch ($unidad2) {
                    case '0':
                        $resp = $valor1 * 1000000;
                        return $resp. " Mililitro(s)";
                    break;
                    case '1':
                        $resp = $valor1 * 1000;
                        return $resp. " Litro(s)";
                    break;
                    case '2':
                        return "Error, selecciona otra unidad de medida";
                    break;
                    default:
                        return "Error";
                    break;
                }
            break;
            
            default:
                return "Error";
            break;
        }
    }
}
?>