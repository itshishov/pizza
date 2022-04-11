<?php
require 'Db.php';
class Pizza
{
	
     private $db=null;
    
	 public function __construct(){
        $this->db=DB::getInstans();
    }
      public function getProduct(){
      
        $result=$this->db->prepare("SELECT*FROM pizza");
		$result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    
    }
		
	
}