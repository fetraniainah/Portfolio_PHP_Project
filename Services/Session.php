<?php 

namespace Services;
class Session{

  public function __construct() {
    if (session_status() === PHP_SESSION_NONE) {
      session_start();
    }
  }
  
    public static function setSession($key,$value){
        $_SESSION[$key] = $value;
    }

    public static function getSession($key) {
        if (isset($_SESSION[$key])) {
          return $_SESSION[$key];
        } else {
          return null;
        }
      }

      public static function pullSession($key) {
        if (isset($_SESSION[$key])) {
          $value = $_SESSION[$key];
          unset($_SESSION[$key]);
          return $value;
        } else {
          return null;
        }
      }
}

?>