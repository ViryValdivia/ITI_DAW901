<?php
Class CalculadoraController{

    public $clasificacion;
    public $unidad1;
    public $unidad2;
    public $valor1;
    public $valor2;
    public $resultado;
    public $pantalla;

    function __construct(){
        $this->entrada = 0;
        $this->accion ="";
        $this->resultado = 0;
        $this->pantalla ="0";
    }

    public function cachaParametros(){
        if(isset($_POST["clasificacion"])){
            $this->clasificacion = $_POST["clasificacion"];
        }
        if(isset($_POST["unidad1"])){
            $this->unidad1 = $_POST["unidad1"];
        }
        if(isset($_POST["unidad2"])){
            $this->unidad2 = $_POST["unidad2"];
        }
        if(isset($_POST["valor1"])){
            $this->valor1 = $_POST["valor1"];
        }
        if(isset($_POST["valor2"])){
            $this->pantalla = $_POST["valor2"];
        }
        if(isset($_POST["pantalla"])){
            $this->pantalla = $_POST["pantalla"];
        }
    }
    public function ejecutarOperacion(){
        switch($this->clasificacion){
            case "1":$this->distancia(); break;
            case "2":$this->resta(); break;
            case "3":$this->multiplicacion(); break;
            default: break;
        }
        
    }

    private function distancia(){
        return $productos = array("Centímetros", "Metros", "Pulgadas", "Yardas");
    }

    private function suma(){
        $this->pantalla = $this->pantalla. " + " . $this->entrada;
        $this->resultado = $this->resultado + $this->entrada;
    }
    private function resta(){
        $this->pantalla = $this->pantalla. " - " . $this->entrada;
        $this->resultado = $this->resultado - $this->entrada;
    }
    private function multiplicacion(){
        $this->pantalla = $this->pantalla. " * " . $this->entrada;
        $this->resultado = $this->resultado * $this->entrada;
    }
    private function division(){
        $this->pantalla = $this->pantalla. " / " . $this->entrada;
        $this->resultado = $this->resultado / $this->entrada;
    }
    private function reset(){
        $this->entrada = 0;
        $this->accion ="";
        $this->resultado = 0;
        $this->pantalla ="0";
    }
}


?>

