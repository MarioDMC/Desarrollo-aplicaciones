<?php
require_once 'Medoo.php'
require_once '_db.php'

if($_POST){
    switch($_POST['accion']) {
        case 'login': login();
        break;
        default;
        break;
    }
}

function login(){
    $global $db;
    $respuesta = [];
    $usuario = $db->count("usuarios", "*", ["correo" => $_POST['usuario']]);
    if($usuario > 0){
        $respuesta["texto"] = "Si existe";
        $respuesta["status"] = 1;
        //validar que la contraseña se correcta, 
        //Si la contraseña no es correcta enviar un status 0, con e texto que ustedes quieran
        //Si la contraseña es correcta entonces 
        //1 inicar sesion
        //2 Settear a la variabe de $_SESSION los valores: nombre, caorreo, status, id y nivel
        //Responde status 1
    }else{
        $respuesta["texto"] = "No existe";
        $respuesta["status"] = 0;
    }
    echo json_encode($respuesta);
}
?>