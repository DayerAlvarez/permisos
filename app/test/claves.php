<?php

//Utilice siempre contraseña seguras
$clave1 ="dyer123";
$clave2 ="karina123";
$clave3 ="carlos123";

var_dump(password_hash($clave1, PASSWORD_BCRYPT));
var_dump(password_hash($clave2, PASSWORD_BCRYPT));
var_dump(password_hash($clave3, PASSWORD_BCRYPT));