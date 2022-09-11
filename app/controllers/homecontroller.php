<?php 

namespace MVC\controllers ;
 use MVC\core\controller;
 use MVC\models\user;
 use GUMP;
 use MVC\core\Session;
 use MVC\core\helpers;

class homecontroller extends controller {


   public function __construct(){
     Session::Start();

   }


   public function index(){

    // $db = $this->db()->run("select * FROM `user`")->fetchAll();
   // $data  = $this->db()->run("SELECT * FROM user")->fetchAll();
   /*echo "<pre>";
   var_dump($data);die;*/
   $user =  new user();
    $data  = $user->GetAllUser();
       
      $title = "home index";
      $h1 = "mohamed khalifa";
    $this->view("home/index",['title'=> $title , 'h1'=> $h1 , "data" => $data]);
}

public function login(){
   $this->view("home/login",['title'=>" home login"]);
}
 public function PostLogin(){
  /* echo "<pre>";
   print_r($_POST);*/

   
   $v = GUMP::is_valid($_POST , [
      'email' => 'required',
   ]);
   //print_r($_POST);die;
  // $validation->validate();
 /* echo "<pre>";
   print_r($v);die;*/
   if($v == 1){
      $user =  new user();
    $data  = $user->GetUser($_POST['email'],$_POST['password']);
    /*echo "<pre>";
    print_r($data);die;*/

     Session::Set('user' , $data);
      //header("LOCATION: user/index");
     helpers::redirect('user/index');
   } 
 }
    public function logout()
    {
      Session::stop();
    }


}

