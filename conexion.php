<?php

//conexion a base de datos mediante patron singleton
class Connection{
    private static $instance = null;
    private $con;

    //constructor que solo permite crear una instancia
    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new Connection();
        }
        return self::$instance;
    }

    //método conexion
    public function getConnection(){
        if(is_null($this->con)){
            $this->con = new PDO('mysql:host=; dbanme=','root','password');
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        return $this->con;
    }

}

Connection::getInstance()->getConnection();


?>
