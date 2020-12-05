<?php
include_once('error_handler.php');
//include_once('conexion.php');

interface Usuario {

    //la interfaz no puede contener variables
/*
    private $usuario = array();
    private $username;
    private $password;
    private $posts = array();
    static $nseguidos = 0;
*/

    //estructura de como deben ser los objetos de la clase
    public function follow($usuario);

    public function unfollow($usuario);

    public function addPost($comment);

    public function deletePost($comment);

    public function like();

    public function dislike();

    public function showFollowers();

}


?>
