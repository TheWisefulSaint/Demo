<?php
//child class that inherit from parent class (Item class)
require_once 'Item.php';

class FoodItem extends Item{
   private $unit;
   
   public function __construct($code, $description, $price,$unit) {
       parent::__construct($code, $description, $price);
       $this->unit = $unit;
   }
   
   public function __set($name, $value) {
       if(property_exists($this, $name)){
           $this->$name = $value;
       }
       else{
          parent::__set($name, $value); 
       }     
   }
   
   public function __get($name){
       if(property_exists($this, $name)){
           return $this->$name;
       }
       else{
           return parent::__get($name);
       }
   }
   
   public function __toString() {
     return parent::__toString() . "Unit: $this->unit<br/>";
   }
   
   public function getOtherAttributes() {
       return $this->unit;
   }   
}
