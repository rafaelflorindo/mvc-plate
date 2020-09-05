<?php
namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
    public function __construct(){
        //$entity, $required, $primary, $timestamp
        //entidade, campos requiridos, chave primaria, 
        //"users",["first_name", "last_name"],"id", true
        parent::__construct("users",["first_name", "last_name"]);
    }

    public function addresses()//retonar todos os endereços do usuario
    {
        return (new Address())->find()->fetch(true);//retorna todos
       // return (new Address())->find("user_id = :uid", "uid = {$this->id}")->fetch(true);
    }
   /* public function save():bool //polimorfimos no método save
    {
        //verificar e-mail duplicado
        parent::save();
    }*/
} 