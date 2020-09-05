<?php


require __DIR__ . '/../vendor/autoload.php';

/*use CoffeeCode\DataLayer\Connect;

$conn = Connect::getInstance();
$error = Connect::getError();

if($error){
    echo $error->getMessage();
    die();
}
//var_dump(true);
/*$query = $conn->query("SELECT * FROM users");
var_dump($query->fetchAll());*/

use Source\Models\User;
$user = new User();
$list = $user->find()->fetch(true);

//var_dump($list); //lista de forma original do active record
/** @var $userItem User */ //abre documentação
foreach($list as $userItem){
   // var_dump($userItem->data());//lista geral o objeto sem active record
   var_dump($userItem->first_name);//lista coluna específica
   // var_dump($userItem->addresses());
    //var_dump($userItem->data());
   foreach($userItem->addresses() as $address){
        var_dump($address->data());
    }
//https://www.youtube.com/watch?v=eD067TOeE-k
//https://www.youtube.com/watch?v=MfZrnQprZ2U
}
    