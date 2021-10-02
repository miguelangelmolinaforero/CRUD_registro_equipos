<?php 

// arreglo contenedor de todas los procedimientos controladores
$controllers=array(
	'equipo'=>['index','register','save','show','updateshow','update','delete','search','error']
);

if (array_key_exists($controller,  $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	}
	else{
		call('equipo','error');
	}		
}else{
	call('equipo','error');
}

// funcion de llamado de archivo php
function call($controller, $action){
	// requerimiento de funciones de controlador
	require_once('php/Controllers/'.$controller.'controller.php');

	switch ($controller) {
		case 'equipo':
		require_once('php/Model/equipo.php');
		// se crea un nuevo objeto UsuarioController
		$controller = new UsuarioController();
		break;
	}
	$controller->{$action}();
}

?>