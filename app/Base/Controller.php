<?php 
namespace App\Base;

use mysqli;

class Controller{

    public function __construct(){
        $this->connect();
    }

    public function connect():\PDO
    {
        $servername     = "localhost";
        $username       = "root";
        $password       = "";
        $db             = "corlate-pdo";

        /**
         * PDO Way
         */
        try {
          $con = new \PDO("mysql:host=$servername;dbname=$db", $username, $password);
          $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
          $con->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
          return $con;
        } catch(\PDOException $e) {

          echo "Connection failed: " . $e->getMessage();
          
        }
    }  
    
}