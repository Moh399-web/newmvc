<?php 



namespace MVC\models;
 use MVC\core\model;

class user extends model{

public function GetAllUser(){
  $data = model::db()->run("select * FROM `user`")->fetchAll();
  return $data ;
}
public function GetUser($email , $password){
  $data = model::db()->row("select * FROM `user` WHERE `email` = ? && `password` = ?",[$email,$password]);
  return $data ;
}
public function insertUser( $name ,$email , $password){
  $data = model::db()->insert('user', ['name' => $name, 'email' => $email, 'password' => $password]);
  return $data ;
}

}