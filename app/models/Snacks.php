<?php
session_start();
require_once'Db.php';
class Snacks
{

    private $db=null;
	private $session = 'cart';
    
    
	 public function __construct(){
        $this->db=DB::getInstans();
    }
	public function getSession()
	{
			return ($_SESSION[$this->session]);
	}

	    public function getSnack(){
      
        $result=$this->db->prepare("SELECT*FROM snacks");
		$result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    
    }
	 function getProduct($items) 
  {

	    $product_session = $_SESSION[$this->session];
		 if(!empty($product_session)){
			$flipped = array_flip($product_session);

			$items=implode(', ', array_values($flipped));

			$result=$this->db->prepare("SELECT*FROM snacks WHERE id IN ($items)");
			$result->execute();
			return $result->fetchAll(PDO::FETCH_ASSOC);
  }
  }
}