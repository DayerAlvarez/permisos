<?php
session_start();

require_once "../models/Usuario.php";
$usuario = new Usuario();


// variable Areglo de sesion que guarde informacion de acceso
if (!isset($_SESSION['login']) || $_SESSION['login']['status'] == false){
  $_SESSION['login'] =[
    "status"    => false,
    "idusuario" => -1,
    "apellidos" => "",
    "nombres"   => "",
    "perfil"    => "",
    "nomuser"   => ""
  ];
}

//Comunicacion E/S josn
header('Content-Type: application/json; charset=utf-8');

//GET =  Buscadores, listas, filtros, consultas...
//POST = mayor de nivel de proteccion
if ($_SERVER["REQUEST_METHOD"] == "POST"){

  if($_POST['operation'] == 'login'){
    //obteniendo datos del origin (vista)
    $nomuser = $usuario->limpiarCadena($_POST['nomuser']);
    $passuser = $usuario->limpiarCadena($_POST['passuser']);
    $claveEncriptada = "";
    $statusLogin = [
      "esCorrecto"  => false,
      "mensaje"     => ""
    ];

    $registro = $usuario->login(['nomuser' => $nomuser]);
   

    //Comprobar si existe el usuario
    if(count($registro) == 0){
      //no existe el usuario
      $statusLogin["mensaje"] = "Usuario no existe";
    }else{
      //el usuario existe, verefica la contraseña
      $claveEncriptada = $registro [0] ['passuser'];
      
      if (password_verify($passuser, $claveEncriptada)){
        //La contraseña es correcta 
        $statusLogin["esCorrecto"] = true;
        $statusLogin["mensaje"] = "Bienvenido";

        //ACtualizar los datos de la variables de sesion
        $_SESSION["login"]["status"] = true;
        $_SESSION["login"]["idusuario"] = $registro [0] ['idusuario'];
        $_SESSION["login"]["apellidos"] = $registro [0] ['apellidos'];
        $_SESSION["login"]["nombres"] = $registro [0] ['nombres'];
        $_SESSION["login"]["perfil"] = $registro [0] ['perfil'];
        $_SESSION["login"]["nomuser"] = $registro [0] ['nomuser'];

      }else{
        //La contraseña es incorecta
        $statusLogin["mensaje"] = "Constraseña incorrecta";
      }

    }
    
    //Enviando datos a la vista
    echo json_encode($statusLogin);

  }//Operation = login

}//Request_method

//GET UN URL
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    if ($_GET["operation"] == "destroy"){
        session_destroy();
        session_unset();
        header("Location: ../../");
    }
}