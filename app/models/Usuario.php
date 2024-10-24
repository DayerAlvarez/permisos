<?php

require_once "Conexion.php";

/**
 * Contiene toda las logica (CRUD) de acceso a datos
 */
class Usuario extends Conexion{

    //Objeto a nivel de clase, que almacena la conexion
    private $pdo;

    public function __CONSTRUCT() { $this->pdo = parent::getConexion();}

    //aconstumbrase hacer eso
    /** 
     * Validara el acceso en 2 pasos (primero usuario, segundo contraseña)
     * @param array<string> $params Arreglo que contiene el nombre de usuario
     * @return array Retornara una coleccion
    */
    public function login($params = []):array{
        try{
            //variables de entrada
            //Forma 1       : ?,?,? (comodines|indice datos)
            //Forma 2       : @valor1, @valor2, @valorN (explicita00)0
            $cmd = $this->pdo->prepare("call spu_usuarios_login(?)");
            
            //Forma 1
            $cmd->execute(array($params['nomuser']));
            //Forma 2
            //$cmd->bindParam(@variable, @valor);

            //Se retorna la coleccion como arreglo asociativo (JSON)
            return $cmd->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(Exception $e){
            error_log("Error login: " . $e->getMessage());
            return[];
        }
    }


    public function add(){}
    public function update(){}
    public function delete(){}

}

$usuario = new Usuario();
$tmp =  $usuario ->login(["nomuser" => "Dyer"]);
var_dump($tmp);