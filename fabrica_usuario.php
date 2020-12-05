<?php
//include_once('conexion.php');
include_once('error_handler.php');

include_once('usuario.php');
include_once('registered_user.php');
include_once('guest_user.php');


//clase que creara una instancia de usuario en funcion de si está o no en la base de datos
class CrearUsuario{

    public static function tipoUsuario($usuario){
        
        //comprobar si el usuario se encuentra en la base de datos

        //si se encuentra en la base de datos
        if ($usuario == 'registrado'){
            return new Registrado();
        } else{

            //si no se encuentra en la base de datos
            return new Invitado();
        }

    }

}


CrearUsuario::tipoUsuario('registrado')->__toString();



?>
