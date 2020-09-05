<?php
namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Address extends DataLayer
{
    public function __construct(){
        //$entity, $required, $primary, $timestamp
        //"addresses",[campos requiridos],"id", true
        parent::__construct("addresses",["user_id"], "addr_id", false);
    }

    public function add($user, $street, $number):Address
    {
        $this->user_id = $user->id;
        $this->street = $street;
        $this->number = $number;

        //$this->save();
        return $this;//manter o active record
    }
}