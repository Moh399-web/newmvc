<?php 


namespace MVC\controllers ;
 use MVC\core\controller;
 use MVC\models\user;
 use GUMP;
 use MVC\core\Session;




class usercontroller extends controller {


    public function __construct()
    {
       Session::Start();
      $user_data =  Session::Get("user");
      //var_dump($user_data);die;
      if (empty($user_data)) {
       echo "class is not access";
      }
    }
    public function index()
    {
        echo "user";
    }
    public function register(){
        $this->view("home/register",['title'=>" home register"]);
     
     }
     public function postregister(){
        $user = new user();
       $data = $user->insertUser($_POST['name'] , $_POST['email'],$_POST['password']);
      /* echo "<pre>";
       var_dump($data);*/
       echo "insert your data";
     }

  }