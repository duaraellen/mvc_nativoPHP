<?php

require '../modelo/usuario.php';

session_start();
if(!isset($_SESSION['id']) && empty($_SESSION['id'])) {
	header('Location: ../index.php');
	exit;
}

if(isset($_POST['flag']) && !empty($_POST['flag'])) {

	if($_POST['flag'] == 1) {

		$alias = $_POST['aliasnuevo'];
		$correo = $_POST['correonuevo'];
		$telefono = $_POST['telefononuevo'];
		$id = $_SESSION['id'];

		$usuario = new Usuario();
		$respuesta = $usuario->actualizarPerfil($id, $alias, $correo, $telefono);
		if($respuesta['resultado']) {
			echo $respuesta['mensaje'];

			$respuesta2 = $usuario->obtener($id);
			if($respuesta2['resultado']) {
			
				$_SESSION['alias'] = $respuesta2['data']['alias'];
				$_SESSION['correo'] = $respuesta2['data']['correo'];
				$_SESSION['telefono'] = $respuesta2['data']['telefono'];
				
			} else {
				echo 'Error obtener data.';
			}

			header('Location: home.php');
	
		} else {
			echo 'error actualizarPerfil.';
			include '../vista/login.php';
		}

		include '../vista/perfil.php';
	} else {
		header('Location: home.php');
	}
} else { 
	include '../vista/perfil.php';
}

?>
