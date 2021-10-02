<?php 
/**
* 
*/
class UsuarioController
{
	
	function __construct()
	{
		
	}

	function index(){
		require_once('php/Views/Equipo/bienvenido.php');
	}

	function register(){
		require_once('php/Views/Equipo/register.php');
	}

	function save(){
		$equipo= new Equipo(null, $_POST['nombre'],$_POST['descripcion']);

		equipo::save($equipo);
		$this->show();
	}

	function show(){
		$listaEquipos = Equipo::all();

		require_once('php/Views/Equipo/show.php');
	}

	function updateshow(){
		$id=$_GET['idequipo'];
		$equipo=Equipo::searchById($id);
		require_once('php/Views/Equipo/updateshow.php');
	}

	function update(){
		$equipo = new Equipo($_POST['id'],$_POST['nombre'],$_POST['descripcion']);
		Equipo::update($equipo);
		$this->show();
	}
	function delete(){
		$id=$_GET['id'];
		Equipo::delete($id);
		$this->show();
	}

	function search(){
		if (!empty($_POST['id'])) {
			$id=$_POST['id'];
			$equipo=Equipo::searchById($id);
			$listaEquipos[]=$equipo;
			//var_dump($id);
			//die();
			require_once('php/Views/Equipo/show.php');
		} else {
			$listaEquipos=Equipo::all();

			require_once('php/Views/Equipo/show.php');
		}
		
		
	}

	function error(){
		require_once('Views/Equipo/error.php');
	}

}

?>