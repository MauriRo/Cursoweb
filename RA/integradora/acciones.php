<?php

    include_once("funciones.php");

    $objeto = new Objeto;
    $crud = new CRUD;

    $clave = $_POST ['txtclave'];
    $nombre = $_POST ['txtnombre'];
    $app_paterno = $_POST ['txtapp_paterno'];
    $app_materno = $_POST ['txtapp_materno'];
    $sexo = $_POST ['txtSexo'];
    $accion = $_POST ['cmbAccion'];

    $objeto->clave = $clave;
    $objeto->nombre = $nombre;
    $objeto->app_paterno = $app_paterno;
    $objeto->app_materno = $app_materno;
    $objeto->sexo = $sexo;
    


    if ($accion == 'registrar') {
        $crud->RegistrarUsuario($objeto); 
    }


?>