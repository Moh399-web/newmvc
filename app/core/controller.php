<?php

namespace MVC\core ;
 
use Dcblogdev\PdoWrapper\Database as Database ;

class controller {
    public function view($path , $par)
    {
    extract($par);
      require_once(VIEW.$path.".php");
    }




    /*public function db(){

        // make a connection to mysql here
$options = [
    //required
    'username' => 'root',
    'database' => 'proone',
    //optional
    'password' => '',
    'type' => 'mysql',
    'charset' => 'utf8',
    'host' => 'localhost',
    'port' => '3306'
];

return $db = new Database($options);
    }*/
}

