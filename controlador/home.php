<?php 
session_start();

if(!isset($_SESSION['id']) && empty($_SESSION['id'])) {
	header('Location: ../index.php');
	exit;
}

if(isset($_POST['flag']) && !empty($_POST['flag'])) {

	if($_POST['flag'] == 1) {
		header('Location: perfil.php');
	} else {
		session_start();
		unset($_SESSION['alias']);
		unset($_SESSION['id']);
		session_destroy();
		header('Location: ../index.php');
	}

} else { 
	include '../vista/home.php';
}

?>