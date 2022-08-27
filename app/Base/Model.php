<?php 
namespace App\Base;

class Model{
    public function __construct(){
        $this->connect();
    }

    public function connect(){
        $servername     = "localhost";
        $username       = "root";
        $password       = "";
        $db             = "corlate_mvc";
        
        try {
          $con = new \PDO("mysql:host=$servername;dbname=$db", $username, $password);
          // set the PDO error mode to exception
          $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
          return $con;
        } catch(\PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
    }
}