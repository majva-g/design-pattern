<?php
class DatabaseConnection{
   private static $object;
 private function __construct()
 {
    
 }

 public static function getInstance(){
    if (is_null(self::$object)) {
        self::$object = new DatabaseConnection();
    }
    return self::$object;
  
 }
}

//////////////////////
$obj = DatabaseConnection::getInstance();

