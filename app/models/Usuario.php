<?php

require_once "Conexion.php";

/**
 * Contiene toda las logica (CRUD) de acceso a datos
 */
class Usuario extends Conexion{

    //Objeto a nivel de clase, que almacena la conexion
    private $pdo;

    //aconstumbrase hacer eso
    /** 
     * Validara el acceso en 2 pasos (primero usuario, segundo contraseña)
     * @param array<string> $params Arreglo que contiene el nombre de usuario
     * @return array Retornara una coleccion
    */
    public function login($params = []):array{
        try{
            
            return [];
        }
        catch(Exception $e){

        }
    }


    public function add(){}
    public function update(){}
    public function delete(){}

}

$usuario = new Usuario();
$usuario ->login();