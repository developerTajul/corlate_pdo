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
        $dbname         = "corlate-pdo3";

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
          $category_table ="CREATE TABLE IF NOT EXISTS $category_tbl(
          id INT( 2 ) AUTO_INCREMENT PRIMARY KEY,
          name VARCHAR( 255 ) NOT NULL, 
          slug VARCHAR( 255 ) NOT NULL, 
          excerpt VARCHAR( 150 ) NULL, 
          content VARCHAR( 150 ) NULL, 
          thumbnail VARCHAR( 250 ) NOT NULL,
          status INT( 1 ) NOT NULL DEFAULT 0,
          created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
          updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
          )";
          $con->exec($category_table);





          return $con;
        } catch(\PDOException $e) {

        
          echo "Connection failed: " . $e->getMessage();
          
        }
    }  
    
}