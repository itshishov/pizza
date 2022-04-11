<?php
require_once'app/models/Pizza.php';
require_once'app/models/Snacks.php';
require_once'app/models/CartModel.php';
    class ProjectController{
        public function index() {  
		   $pizza = new Pizza();
		   $products = $pizza->getProduct();
		   
		   $snack = new Snacks();
		   $snacks = $snack->getSnack();
		   
		   require 'app/views/project/index.php';
		   
		   

		
        }
        
      
	
	} 
        
        
    
        
         