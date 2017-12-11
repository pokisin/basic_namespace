<?php
/*
	Para poder ejecutar los namespaces dentro de la libreria
*/
function __autoload($clase){
	$clase = PATH_WL.DS."Libraries/".str_replace("\\",DS,$clase).".php";
	if (! file_exists($clase)) {
		throw new Exception("El archivo {$clase} no fue encontrado");
	}
	require_once($clase);
}
