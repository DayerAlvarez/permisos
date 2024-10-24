<?php

require_once "../models/Usuario.php";
$usuario = new Usuario();

header('Content-Type: application/json; charset=utf-8');

//GET =  Buscadores, listas, filtros, consultas...
//POST = mayor de nivel de proteccion
if ($_SERVER["REQUEST_METHOD"] == "POST"){

  if($_POST['operation'] == 'login'){
    //obteniendo datos del origin (vista)
    $nomuser = $usuario->limpiarCadena($_POST['nomuser']);
    $passuser = $usuario->limpiarCadena($_POST['passuser']);
    $claveEncriptada = "";

    //Arreglo que sirve para comunicarme con el usuario
    $statusLogin = [
        "esCorrecto" => false,
        "mensaje" => ""
    ];

    $registro = $usuario->login(['nomuser' => $nomuser]);
    
    //Comprobar si existe el usuario
    if(count($registro) == 0){
        //No existe el usuario
        $statusLogin["mensaje"] = "Usuario no existe";
    }else{
        //El usuario existe , verificar la contraseña
        $claveEncriptada =  $registro[0]['passuser'];

        if(password_verify($passuser, $claveEncriptada)){
            //La contraseña es correcta
            $statusLogin["esCorrecto"] = true;
            $statusLogin["mensaje"] = "Bienvenido";
        }else{
            //La contraseña es Incorrecta
            $statusLogin["mensaje"]= "Contraseña incorrecta";
        }
    }
    //Enviando datos a la vista
    echo json_encode($statusLogin);
  } //Operation = Login
}// REQUEST METHOD