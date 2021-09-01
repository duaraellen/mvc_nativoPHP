<?php

require '../conexion.php';

class Usuario {

    private $bd;

    function __construct() {
        $conexion = new Conexion();
        $this->bd = $conexion->conectarBD();
    }


    public function validarLogin($usuario, $contrasena) {

        $sql = "SELECT alias, idUsuario, correo, telefono 
                FROM usuario 
                WHERE correo = '$usuario' 
                    AND contrasena= '$contrasena'";
        $res = mysqli_query($this->bd, $sql);
        if($res) {
            return array('resultado' => TRUE, 'data' => mysqli_fetch_assoc($res));
        } else {
           return array('resultado' => FALSE);
        }

    }

    public function obtener($id) {

        $sql = "SELECT alias, idUsuario, correo, telefono 
                FROM usuario 
                WHERE idUsuario = '$id' ";
        $res = mysqli_query($this->bd, $sql);
        if($res) {
            return array('resultado' => TRUE, 'data' => mysqli_fetch_assoc($res));
        } else {
           return array('resultado' => FALSE);
        }

    }

    public function actualizarPerfil($id, $alias, $correo, $telefono) {

        $sql = "UPDATE usuario 
                SET alias = '$alias'
                    , correo = '$correo'
                    , telefono = '$telefono'
                WHERE idusuario = $id";
		$res = mysqli_query($this->bd, $sql);
		if($res) {
            return array('resultado' => TRUE, 'mensaje' => 'Actualizado.');
        } else {
           return array('resultado' => FALSE);
        }
    }

}






?>