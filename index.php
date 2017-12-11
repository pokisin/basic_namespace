<?php 
/*
	Ejemplo creado por Wilmar P. 2017
*/
// Primero definimos el path de nuestro proyecto
define("PATH_WL", dirname(__FILE__));
define("DS", "/");
// Cargamos nuestro archivo autoload :)
require_once("autoload.php");

// Declaramos que clase de nuestro namespace deseamos utilizar
use Wil\Test;

// Ejecutamos nuestra función :D
print_r(new Test());
?>