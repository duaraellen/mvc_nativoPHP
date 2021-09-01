<?php

class Conexion {
    

    public function conectarBD() {
        // Conectando, seleccionando la base de datos
        $db_host="127.0.0.1"; 
        $db_port="3306";
        $db_name="exempel"; 
        $db_user="root"; 
        $db_pass="";
                
        $conn = mysqli_connect($db_host.':'.$db_port, $db_user, $db_pass) or die ("Error conectando a la base de datos.");
        mysqli_select_db($conn,$db_name) or die("Error seleccionando la base de datos.");
        mysqli_set_charset($conn,"utf8");
        return $conn;
    }


}





?>