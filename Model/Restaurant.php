<?php
namespace Model;

use PDO;
use Exception;
use Migration\Migration;

class Restaurant extends Migration{
    public static function insertRestaurant($name,$ville,$adresse,$altitude,$longitude,$nif,$stat,$user_id){
        $db = Migration::Db();
        try{
            $stm = $db->prepare("INSERT INTO `restaurant`(`name`, `ville`, `adresse`, `altitude`, `longitude`, `nif`, `stat`,`user_id`) VALUES(?,?,?,?,?,?,?,?)");
            $stm->execute(array($name,$ville,$adresse,$altitude,$longitude,$nif,$stat,$user_id));
            return true;
        }catch(Exception $e){
            return false;
        }
    }

    public static function findRestaurant($user_id){
        $db = Migration::Db();
        $stm=$db->prepare("SELECT * FROM restaurant WHERE user_id=?");
        $stm->execute(array($user_id));
        $result = $stm->fetchAll();
        return $result;
    }

    public static function findByRestaurant($id){
        $db = Migration::Db();
        $stm=$db->query("SELECT id,user_id FROM restaurant WHERE id={$id}");
        $result = $stm->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public static function deleteBy($id):bool
    {
        $db = Migration::Db();
        $stm=$db->prepare("DELETE FROM restaurant WHERE id={$id}");
        $stm->execute();
        return true;
    }

}