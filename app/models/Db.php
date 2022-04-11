<?php

class DB{
    
  private static $db=null;  
    
    public static function getInstans(){
        
        
        if(self::$db == null)
            self::$db=new PDO('mysql:host=localhost;dbname=pizzaoop','root','');
     
     /*  self::$db=new PDO('mysql:host=localhost;dbname=u0453274_blog;
    charset=utf8;','u0453274_blog','123Q=blog@V');*/
         return  self:: $db;
     
    }
    private function __construct(){}
    private function __clone(){}
    public function __wakeup(){}
    
}