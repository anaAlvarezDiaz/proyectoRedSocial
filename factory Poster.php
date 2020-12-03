<?php

//Clase abstracta fabrica posts
abstract class Poster{
	
	//Variables para controlar el id del post y que se usara para ordenarlos en la vista del panel
	private $contador=0;
	private $id;

	//variables para controlar a quien pertenece el post y su contenido
	private $owner;
	private $contenido;

	//variables para controlar la valoración del post
	private $valoradosP = array();
	private $valoradosN = array();
	private $valor;


	//Constructor de la clase en la que se añade el dueño del post y su contenido y se establece su id
	//El dueño debe ser de la clase Usuario si no devolvera un error
	function __construct($owner, $contenido){

		if (is_a($owner, Usuario)){

			$this->contador++;
			$this->id=$this->contador;
			$this->owner=$owner;
			$this->contenido=$contenido;

		}else {
			return "El dueño del post debe ser de la clase usuario.</br>"
		}

	}



	//function para valorar el post
	//el valor viene dado en texto plano cuando se ejecuta la funcion y segun si es negativo o positivo, 
	//añade al usuario en la lista de votos positivos o negativos
	//antes de esto, se hacen las comprobaciones pertinentes para que un usuario no pueda 
	//votar mas de una vez pero puede cambiar de opinion.
	public function valorar($user, $valor){
		if ($valor == +1) {

			if (in_array($user, $this->valoradosN)) {
				unset($this->valoradosN[$user->getId()]);
			}

			if (!in_array($user, $this->valoradosP)) {
				array_push($this->valoradosP, $user);
			}

		}elseif ($valor == -1) {

			if (in_array($user, $this->valoradosP)) {
				unset($this->valoradosP[$user->getId()]);
			}

			if (!in_array($user, $this->valoradosN)) {
				array_push($this->valoradosN, $user);
			}

		}

		$this->valor = count($this->valoradosP) - count($this->valoradosN);

	}

}



////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////
//CLASE POST QUE IMPLEMENTA LAS FUNCIONES Y VARIABLES DE POSTER/////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////

class Post implements Poster{

	//variable array para guardar la lista de los comentarios añadidos a este post
	private $comentarios = array();


	function __construct($owner, $contenido){
		parent::__construct($owner, $contenido);
	}



	//Funcion para añadir comentarios al array de comentarios del post
	//Solo se pueden añadir objetos de la clase comentario
	public function comentar($comentario){

		if (is_a($comentario, Comentario)) {
			array_push($this->comentarios, $comentario);
		}else{
			return "El comentario debe ser de la clase comentario";
		}
	}


}


////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////
//CLASE COMENTARIO QUE IMPLEMENTA LAS FUNCIONES Y VARIABLES DE POSTER///////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////
class Comentario implements Poster{

	private $postPadre;

	function __construct($owner, $contenido, $padre){
		parent::__construct($owner, $contenido);

		$this->postPadre=$padre;
	}


}