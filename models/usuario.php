<?php
    header('Content-type: application/json');
    include_once('./controlers/Usuario.php');
      $u = new Usuario();
    switch($_SERVER["REQUEST_METHOD"]){
        case 'GET':
            echo'Obtener Usuario';
            $u->obtUsuario();
            break;
        case 'POST':
            echo'Insertar Usuario';
            $u->insUsuario();
            break;
        case 'PUT':
            echo'Actualizar Usuario';
            $u->actUsuario();
            break;
        case 'PATCH':
            echo'Modifica un campo Usuario';
            $u->actCampoUsuario();
            break;
        case 'DELETE':
            echo'Eliminar Usuario';
            $u->delUsuario();
            break;
        default:
            $msg = array("msg"=>"Método no válido.");
            echo json_encode($msg);
    }