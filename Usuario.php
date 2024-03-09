<?php
class Conexion{
    public static function con(){
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "condor";
        $port = "3306";

        $link = mysqli_connect($hostname, $username, $password, $database, $port)
        or die("Error al hacer conexión". mysqli_connect_error());

        mysqli_select_db( $link, $database)
        or die("Error al conectarse a la base de datos". mysqli_connect_error());
        
        return $link;
    }
}

class Usuario{

    private $user;

    public function __construct() {
        $this->user = array();
    }

    public function insertUsuario($id, $name, $pass, $mail, $type, $coments){
        $sql = "INSERT INTO usuario (cedula, nombre, pass, correo, tipo, comentarios) VALUES ('$id', '$name', '$pass', '$mail', '$type', '$coments');";
        $result = mysqli_query(Conexion::con(), $sql);
    }


}

?>