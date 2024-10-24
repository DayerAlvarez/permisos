<?php

  const SERVER = "localhost";
  const DB = "";
  const USER = "root";
  const PASS = "";
  //cadena conexion
  const SGBD = "mysql:host=" . SERVER. ";portname=3306" . DB . ";charset=UTF8";


  class Conexion{

    /*
     * Retornar la conexion al servidor y DB utilizando seingleton de accesos restrigindo
     */
    protected static function getConexion(){
        try{
            //Instancia de la clase PDO (Integrada en php)
            $pdo = new PDO(SGBD, USER, PASS);
            //Gestionara los errores/excepciones
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //Retornamos conexion activa
            return $pdo;
        }
        catch(Exception $e){
            //error_log("Error conexion: " . $e->getCode());
            die($e->getMessage());
        }
    }
    /**
     * Metodo obtiene datos a traves del SPU y los retorna en forma arreglo
     */
    public static function getData($storeProcedure):array{
        return [];
    }

    /**
     * Evita SQLInjection
     */
    public static function limpiarCadena($cadena):string{
        $cadena = trim($cadena);
        $cadena = stripslashes($cadena);    //Eliminar el blackslash

        //Javascript
        $cadena = str_ireplace("<script>", "", $cadena);
        $cadena = str_ireplace("</script>", "", $cadena);
        $cadena = str_ireplace("<script src='", "", $cadena);
        $cadena = str_ireplace("<script type='", "", $cadena);
        $cadena = str_ireplace("'>", "", $cadena);

        //SQL
        $cadena = str_ireplace("SELECT *  FROM", "", $cadena);
        $cadena = str_ireplace("DELETE FROM", "", $cadena);
        $cadena = str_ireplace("INSERT INTO", "", $cadena);
        $cadena = str_ireplace("DROP TABLE", "", $cadena);
        $cadena = str_ireplace("TRUNCATE TABLE", "", $cadena);
        $cadena = str_ireplace("SHOW TABLES", "", $cadena);
        $cadena = str_ireplace("SHOW DATABASE", "", $cadena);

        //Etiquetas
        $cadena = str_ireplace("<?php", "", $cadena);
        $cadena = str_ireplace("?>", "", $cadena);
        $cadena = str_ireplace("--", "", $cadena);
        $cadena = str_ireplace(">", "", $cadena);
        $cadena = str_ireplace("<", "", $cadena);
        $cadena = str_ireplace("[", "", $cadena);
        $cadena = str_ireplace("]", "", $cadena);
        $cadena = str_ireplace("{", "", $cadena);
        $cadena = str_ireplace("}", "", $cadena);
        $cadena = str_ireplace("==", "", $cadena);
        $cadena = str_ireplace("===", "", $cadena);
        $cadena = str_ireplace("^", "", $cadena);
        $cadena = str_ireplace(";", "", $cadena);
        $cadena = str_ireplace("::", "", $cadena);

        $cadena = trim($cadena);
        return $cadena;
    }

  }//Fin clase