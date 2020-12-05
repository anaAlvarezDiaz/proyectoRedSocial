<?php
include_once('error_handler.php');

class Registrado implements Usuario{

    public function __toString()
    {
        echo "Creacion de usuario registrado";
    }

    public function follow($usuario)
    {
        $this->seguidos[] = $usuario;   
        self::$nseguidos++;     
    }

    public function unfollow($usuario)
    {
        $this->seguidos->unset($usuario);
        
    }

    //agregar comentarios al array de publicaciones 
    public function addPost($comment)
    {
        $this->posts[] = $comment;
        return $comment;
        
    }

    public function showPost(){
        foreach($this->posts as $key){
            echo $key;
        }
    }
    
    public function deletePost($comment)
    {

    }

    public function like()
    {
        
    }

    public function dislike()
    {
        
    }

    public function showFollowers()
    {
        foreach($this->seguidores as $value){
            echo $value;
        }
        
    }
}



?>
