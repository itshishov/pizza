<?php
session_start();
require_once'app/models/Snacks.php';
class CartModel{

	private $session = 'cart';
	private $db=null;
	private $productId;
	private $name;
	private $phone;
	private $address;
	private $comment;
	
	 
    public function __construct(){
        $this->db=DB::getInstans();
    }
	public function isSetSession()
	{
		return isset($_SESSION[$this->session]);
	}

	public function deleteSession()
	{
		unset($_SESSION[$this->session]);
	}
	
	public function getSession()
	{
		return ($_SESSION[$this->session]);
	}

	public function addToCart($productId){
      
		if (isset($_SESSION[$this->session][$productId])){
			$_SESSION[$this->session][$productId] = $_SESSION[$this->session][$productId]+1;
			$this->getProductCart();
        }
		else{
			$_SESSION[$this->session][$productId] = 1;
			$this->getProductCart();
        }

    
    }

	public function getProductCart()
	{
		$this->$productId = $_POST["item_id"];
		$result=$this->db->prepare("SELECT*FROM snacks WHERE id=:id");
		$result->execute(['id' => $this->$productId]);
		return $result->fetch(PDO::FETCH_ASSOC);
	}

	
}




    
    
    
 

 }   