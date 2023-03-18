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
class UsuarioRepository extends BaseRepository implements IUsuarioRepository {

    public function __construct() {

        parent::__construct();
        $this->table_name = "usuario";
        $this->pk_name = "id";
        $this->class_name = "Usuario";
        $this->default_order_column = "email";
    }

    //Devuelve un objeto de tipo Usuario filtrando por email. Si no lo encuentra devuelve null. Utiliza un parámetro nominal para filtrar.
    //No inicializa sus roles
    public function getUsuarioByEmail($email) {
       //TO DO
    }

    //Inserta un registro en la tabla usuario con el email y con el hash de la contraseña
    //Devuelve el objeto usuario con el id asignado automáticamente por la BD si ha habido éxito. null en caso contrario.
    public function create($usuario) {
        //TO DO
    }

    public function update($object): bool {
        //No es necesario en este ejercicio TO  DO   
    }

    //Añade un nuevo registro a la tabla usuario_rol. Devuelve true si se ha conseguido insertar con éxito, false en caso contrario.
    public function addRoleToUser($user_id, $rol_id):bool {
       //TO DO
    }

}
