<?php

class Invitado implements Usuario{

    public function __toString()
    {
        echo "Creacion de usuario invitado";
    }
    
    //invitado no puede seguir
    public function follow($usuario)
    {
        
    }

    //no puede dejar de seguir
    public function unfollow($usuario)
    {
        
    }

    public function addPost($comment)
    {
        
    }

    //no puede borrar comentarios
    public function deletePost($comment)
    {
        
    }
    

    public function like()
    {
        
    }

    public function dislike()
    {
        
    }

    //no puede mostrar seguidores
    public function showFollowers()
    {
        
    }

}


?>
