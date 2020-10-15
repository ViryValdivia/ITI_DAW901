
<?php
include_once('P1_AI9_BD_Config.php');
include_once('P1_AI9_BD_Connection.php');

class Usuario{

    public $id;
    public $nombre;
    public $edad;

    function __construct(){
    }

    //guarda la informacion 
    public function save(){

        try{

            $dbConnection = new DBConnection();

            if($this->id ){
                $sql ="UPDATE persona set nombre = :nombre, edad = :edad WHERE id = :id";
                $statement = $dbConnection->conexion->prepare($sql);
                $statement->bindParam(":nombre", $this->nombre, PDO::PARAM_STR);
                $statement->bindParam(":edad", $this->edad, PDO::PARAM_INT);
                $statement->bindParam(":id", $this->id, PDO::PARAM_INT);
                $statement->execute();

            }else{
                $sql ="INSERT INTO persona (nombre, edad) VALUES (:nombre, :edad)";
                $statement = $dbConnection->conexion->prepare($sql);
                $statement->bindParam(":nombre", $this->nombre, PDO::PARAM_STR);
                $statement->bindParam(":edad", $this->edad, PDO::PARAM_INT);
                $statement->execute();
                $this-> id = intval($dbConnection->conexion->lastInsertId());
            }
            

        }catch(PDOException $e){
            echo "Error al insertar" . $e->getMessage();
            return false;
        }
    }
    public function buscarUsuario($id){
        try{
            $dbConnection =new DBConnection();

            $sql = "SELECT * FROM persona WHERE id = :id";
            $statement = $dbConnection->conexion->prepare($sql);
            $statement->execute([":id" => $id]);
            $rows = $statement->fetchAll();
            $mUsuario = null;

            foreach( $rows as $row){

                //Almacenar en un objeto los valores
                $mUsuario = new Usuario ();
                $mUsuario->id = $row["id"];
                $mUsuario->nombre = $row["nombre"];
                $mUsuario->edad = $row["edad"];
                
            }
            $dbConnection->cierraConexion();

            return $mUsuario;
        
        }catch(PDOException $e){
            echo "Error al bsucar: ". $e->getMessage();
            return null;
        }
        
    }
    public static function all(){
        try{
            $dbConnection =new DBConnection();
            $sql = "SELECT * FROM persona";
            $statement = $dbConnection->conexion->prepare($sql);
            $statement->execute();
            $rows = $statement->fetchAll();
            $usuarios= [];
            foreach( $rows as $row){

                //Almacenar en un objeto los valores
                $mUsuario = new Usuario ();
                $mUsuario->id = intval($row["id"]);
                $mUsuario->nombre = $row["nombre"];
                $mUsuario->edad = intval($row["edad"]);
                array_push($usuarios,$mUsuario);
                
            }
            $dbConnection->cierraConexion();
            return $usuarios;
        
        }catch(PDOException $e){
            echo "Error al bsucar: ". $e->getMessage();
            return null;
        }
        
    }

    public function delete(){
        try{
            $dbConnection = new DBConnection();
            $sql = "DELETE FROM persona WHERE id = :id";
            $statement = $dbConnection-> conexion->prepare($sql);
            $statement->bindParam(":id", $this->id, PDO::PARAM_INT);
            $statement-> execute();
            $dbConnection->cierraConexion();


        }catch(PDOException $e){
            echo "Error al eliminar :".$e->getMessage();
            exit;

        }
    }
}

?>