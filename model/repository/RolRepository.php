<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of UsuarioRepository
 *
 * @author wadmin
 */
class RolRepository extends BaseRepository implements IRolRepository{


    public function __construct() {
       parent::__construct();
        $this->table_name = "rol";
        $this->pk_name = "id";
        $this->class_name = "Rol";
        $this->default_order_column = "name";
       
    }
    
     

    public function create($object) {
        //No es necesario en este ejercicio
    }

    public function update($object): bool {
        //No es necesario en este ejercicio
    }

    //Obtiene un objeto Rol consultando la tabla rol y filtrando por nombre. Utiliza un parámentro posicional
    public function findRolByName(string $name): \Rol {
       //TODO
    }
    
    //Obtiene un array de objetos Rol filtrados por el identificador numérico del usuario. 
     public function findRolesByUserId(int $userId): array {
        //TO DO
    }

   

}
