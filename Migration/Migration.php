<?php

namespace Migration;

use PDO;
use Exception;

class Migration{

    public static function Db(){
        $pdo = null;
        if ($pdo === null) {
          try{
            $pdo = new PDO("mysql:host=localhost;dbname=collab",'root' ,'');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          }catch(Exception $e){
            echo "Erreur de serveur ! ";
          }
           
        }
 
        return $pdo;
    }
}
