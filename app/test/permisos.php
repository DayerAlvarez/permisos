<?php

//Administrador, asistente, Invitado.
$permisos = [
    "Administrador" => [
        ["modulo" => "colaboradores", "ruta" => "colaboradores/lista-colaborador", "icono" => "nav-icon fas fa-th"],
        ["modulo" => "colaboradores", "ruta" => "colaboradores/registra-colaborador", "icono" => "nav-icon fas fa-th"],
        ["modulo" => "Permisos", "ruta" => "permisos/lista-permiso", "icono" => ""],
        ["modulo" => "Permisos", "ruta" => "permisos/registra-permiso", "icono" => ""],
    ],
    "Asistente" => [],
    "Invitado"  => []
];