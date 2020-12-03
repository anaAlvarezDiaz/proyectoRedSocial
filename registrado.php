<?php

class registrado extends Control{

    public function mostrarSeguidores()
    {
        foreach ($this->seguidores as $value){
            echo $value;
        }
    }

    public function mostrarSiguiendo()
    {
    }

    public function Seguir($usuarios)
    {
        $this->seguidores[] = $usuarios;
        self::$nseguidores++;        
    }

    public function dejarSeguir($usuarios)
    {
        $this->seguidores->unset($usuarios);
    }

    //agregar posts al array
    public function addPost($comment)
    {
        $this->posts[] = $comment;
    }
    public function mostrarPost()
    {
        foreach ($this->posts as $key) {
            echo $key;
        }
    }

    //eliminar un comentario del array de posts
    public function eliminarPost($comment)
    {
        $this->posts->unset($comment);
    }


}


?>
