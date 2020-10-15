<?php
include_once('P1_AI9 BD_Config.php');
class DBConnection{

    public $conexion;
    function __construct(){

        try{
            $this->conexion = new PDO(
                "mysql:host=" . BDConfig::$DBSERVER .
                ";dbname=" . DBConfig::$DBNAME,
                DBConfig::$DBUSER,
                DBConfig::$DBPASSWORD
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