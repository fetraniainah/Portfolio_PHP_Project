<?php
namespace Model;

use Exception;
use Migration\Migration;

class User extends Migration{
    private static $pdo;

    public function __construct() {
        self::$pdo = Migration::Db();
    }

    public static function insertUser($username, $email, $password) {
        // Vérifier si l'email est unique
        if (self::isEmailUnique($email)) {
            // Insérer l'utilisateur dans la base de données
            try {
                $stmt = Migration::Db()->prepare('INSERT INTO users (username, email, password) VALUES (?, ?, ?)');
                $stmt->execute([$username, $email, $password]);
                return true;
            } catch (\PDOException $e) {
                return false;
            }
        } else {
            return false;
        }
    }

 public static function getUserByEmail($email) {
        $stmt = Migration::Db()->prepare('SELECT * FROM users WHERE email = ?');
        $stmt->execute([$email]);
        $user = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $user;
    }
   
    public static function isEmailUnique($email) {
        $stmt = Migration::Db()->prepare('SELECT * FROM users WHERE email = ?');
        $stmt->execute([$email]);
        $result = $stmt->fetch();
        return !$result; // Retourne vrai si l'email est unique, faux sinon
    }
}



