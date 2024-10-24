<?php

//Constantes globales
const SERVERURL = "http://localhost/permisos/";
const COMPANY = "SENATI";
const VERSION = "1.0";

//Configuracion horaria
date_default_timezone_set("America/Lima");

//Recursos - HELPERS...
function renderContentHeader($title, $home, $path){
    return "
     <div class='content-header'>
        <div class='container-fluid'>
            <div class='row mb-2'>
                <div class='col-sm-6'>
                    <h1 class='m-0'>{$title}</h1>
                </div>
                <div class='col-sm-6'>
                    <ol class='breadcrumb float-sm-right'>
                        <li class='breadcrumb-item'><a href='{$path}'>{$home}</a></li>
                        <li class='breadcrumb-item active'>{$title}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>";
    
}

//Que opciones e interfaces podra utilizar el usuario
$permisos = [
    "ADM"  => [
        ["vista" => "permisos", "ruta" => "lista-permiso"],
        ["vista" => "colaboradores", "ruta" => "lista-colaborador"],
        ["vista" => "reportes", "ruta" => "lista-reporte"],
        ["vista" => "horarios", "ruta" => "lista-horario"],
    ],
    "SPV"  => [
        ["vista" => "permisos", "ruta" => "lista-permiso"],
        ["vista" => "reporte", "ruta" => "lista-reporte"]
    ],
    "INV"  => [
        ["vista" => "horarios", "ruta" => "lista-horario"]
    ]
];