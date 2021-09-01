<?php

require '../modelo/usuario.php';

session_start();

if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
	header('Location: home.php');
	exit;
}

if(isset($_POST['flag']) && $_POST['flag'] == 1) {

	$usuario = new Usuario();
	$respuesta = $usuario->validarLogin($_POST['usuario'], $_POST['contrasena']);
	if($respuesta['resultado']) {
		echo 'Correcto.';
		$_SESSION['alias'] = $respuesta['data']['alias'];
		$_SESSION['id'] = $respuesta['data']['idUsuario'];
		$_SESSION['correo'] = $respuesta['data']['correo'];
		$_SESSION['telefono'] = $respuesta['data']['telefono'];
		header('Location: home.php');

	} else {
		echo 'Incorrecto.';
		include '../vista/login.php';
	}
	
} else {
	echo 'login.';
	include '../vista/login.php';
}




?>