<?php
include_once('P1_AI9_BD_Config.php');
class DBConnection{

    public $conexion;
    function __construct(){

        try{
            $this->conexion = new PDO(
                "mysql:host=" . BDConfig::$DBSERVER .
                ";dbname=" . BDConfig::$DBNAME,
                BDConfig::$DBUSER,
                BDConfig::$DBPASSWORD
            );

            $this->conexion->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
        }catch(PDOException $e){
                echo "Error al coenctar con la base de datos" . $e->getMessage();
                exit;
        }
    }
    public function cierraConexion(){
        $this->coenxion =null;
    }
}
















?>