<?php
session_start();
require_once'app/models/CartModel.php';
require_once'app/models/Snacks.php';
class Cart
{
	private $db=null;
	
    public function __construct(){
        $this->db=DB::getInstans();
    }

	public function countArrays($getProduct) 
	{
		$count = 0;
		foreach ($getProduct as $key => $value) {
        if (is_array($value)) {
            $count += countArrays($value) + 1;
        }
    }
    return $count;
    }


    public function index(){
        
        $cart = new CartModel();
        $snacks = new Snacks();
        if (isset($_POST["item_id"])) {
			 $products = $cart->addToCart($_POST["item_id"]);
	    }
			 $product_session = $cart->getSession();
			 $getProduct =  $snacks->getProduct($_POST["item_id"]);
			 $cart = new CartModel();
		 if (isset($_POST['send'])) {
			 $order = $cart->order($_POST["name"],$_POST["phone"],$_POST["address"],$_POST["comment"]);
			 $cart->orderItems($_POST["name"]);
		 } 
		 
        require 'app/views/cart/index.php';

    }

	public function delete()
	{
		   $cart = new CartModel();
		   $deleteSession = $cart->deleteSession();
		   require 'app/views/cart/index.php';
	}

}