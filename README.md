# ProyectoRedSocial
Un proyecto conceptual en el que se creara una red social sin base de datos para practicar la implementación de patrones de diseño.


## Diagrama conceptual
![alt text](https://github.com/CristianVM1/proyectoRedSocial/blob/main/diagrama.PNG)

   No se han indicado las clases de fabricacion para no complicar el diagrama.  	

   Las flechas indican pertenencia:  
   Los comentarios se guardan en el array "comentarios" de los posts a los que pertenecen.  
   Los posts se guardan en el array "posts" de los usuarios que los han creado.  
   Los usuarios se guardan en los array "seguidores" y "siguiendo" de los usuarios respectivos.  

   Las lineas continuas indican relacion.  
   El index llama al panel para mostrar los posts y este le dice que mostrar.
   Las funciones se llaman en el index, son interpretadas por el panel y se ejecutan sobre los objetos de usuarios, posts y comentarios.  
   El index vuelve a llamar al panel para refrescar la informacion.

## Objetos que se usaran en el proyecto
   Se utilizaran dos clases abstractas con el patron de diseño *Factory Method*.  
   Una de ellas para crear lo usuarios y otra para crear los posts y comentarios.  
   
   Para crear el panel se usara el patron de diseño *singleton* o *bridge* (por determinar).  
   
   El index se diseñara con bootstrap.  


## Funcionamiento

   Los botones que apareceran en el index, llamaran a funciones del panel que creara y usara los objetos.  
   Cuando se crea un usuario, post o comentario, se guardan en los arrays correspondientes del panel y se accederan a ellos mediante consultas en bucle a los array. 
   Para refrescar los datos y mostrarlos en el index, guardaremos los objetos en variables de sesion y se cargaran desde ahi al panel y despues se mostrara en el index.  
   
   Debemos comprobar como de bien se guardan los objetos y los otros objetos contenidos en su array para usar sesiones y para resumir las matrices y consultas usadas.
   
		
