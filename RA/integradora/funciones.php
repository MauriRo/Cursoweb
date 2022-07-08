<?php

class CRUD {
    private $servidor= 'localhost';
    private $usuario= 'root';
    private $contraseña= '';
    private $baseDeDatos= 'cursos';

    private function ConectarBD() {
        $conexion = mysqli_connect($this->servidor, $this->usuario, $this->contraseña, $this->baseDeDatos) or die ("Error al conectar con la base de datos");

        return $conexion;
    }

    private function CerrarConexion($conexion) {
        mysqli_close($conexion);
    }
    public function RegistrarUsuario($objeto) {
        $conexion = $this->ConectarBD();
        $insertar = "INSERT INTO datos VALUES ('$objeto->clave', '$objeto->nombre', '$objeto->app_paterno', '$objeto->app_materno', '$objeto->sexo')";

        mysqli_query($conexion, $insertar) or die ("Error al registrar el usuario");

        echo "registro agregado correctamente";

        $this->CerrarConexion($conexion);

    }
}

class Objeto {}
?>