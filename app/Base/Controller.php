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
        $dbname         = "corlate-pdo";
        $dbname         = "corlate-pdo4";

        $category_tbl = 'categories';

        /**
         * PDO Way
         */
        try {
          $con = new \PDO("mysql:host=$servername;", $username, $password);
          $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
          $con->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
          
          /**
           * database create if not exists
           */
          $dbname = "`".str_replace("`","``",$dbname)."`";
          $con->query("CREATE DATABASE IF NOT EXISTS $dbname");
          $con->query("use $dbname");

          /**
           * Create table if not exits
           */

          $category_table ="CREATE table $category_tbl(
          ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
          Prename VARCHAR( 50 ) NOT NULL, 
          Name VARCHAR( 250 ) NOT NULL,
          StreetA VARCHAR( 150 ) NOT NULL, 
          StreetB VARCHAR( 150 ) NOT NULL, 
          StreetC VARCHAR( 150 ) NOT NULL, 
          County VARCHAR( 100 ) NOT NULL,
          Postcode VARCHAR( 50 ) NOT NULL,
          Country VARCHAR( 50 ) NOT NULL);" ;
          $con->exec($category_table);





          return $con;
        } catch(\PDOException $e) {

        
          echo "Connection failed: " . $e->getMessage();
          
        }
    }  
    
}