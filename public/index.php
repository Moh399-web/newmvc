<?php
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__).DS);

define("APP",ROOT."app".DS);
//echo APP ;
define("CONTROLLERS",APP."controllers".DS);
define("CORE",APP."core".DS);
define("VIEW",APP."views".DS);
define("CONFIG",APP."config".DS);
define("MODEL",APP."models".DS);

// config 
define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","proone");
define("DATABASE_TYPE","mysql");
define("DOMAIN_NAME","http://mvc.test/");



//require_once (CORE."\app.php");
require_once("../vendor/autoload.php");



$app = new MVC\core\app()





 ?>